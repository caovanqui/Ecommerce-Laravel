angular
  .module("myapp", ["ngRoute"])
  .config(function ($routeProvider) {
    $routeProvider
      .when("/", {
        templateUrl: "home.html",
        // controller: "homeCtrl",
      })
      .when("/home", {
        templateUrl: "home.html",
        controller: "homeCtrl",
      })
      .when("/product/:idcatalog", {
        templateUrl: "product.html",
        controller: "productCtrl",
      })
      .when("/detail/:id", {
        templateUrl: "productdetail.html?" + Math.random(),
        controller: "detailCtrl",
      })
      .when("/login", {
        templateUrl: "login.html?" + Math.random(),
        controller: "loginCtrl",
      })
      .when("/signup", {
        templateUrl: "signup.html?" + Math.random(),
        controller: "signupCtrl",
      })
      .when("/cart", {
        templateUrl: "cart.html?" + Math.random(),
        controller: "cartCtrl",
      })
      .when("/contact", {
        templateUrl: "contact.html",
        controller: "contactCtrl",
      })
      .when("/news", {
        templateUrl: "news.html",
        controller: "newsCtrl",
      })
      .when("/userprofile", {
        templateUrl: "u-profile.html",
        controller: "userCtrl",
      })

      .otherwise({
        template: "<h1>404- Khong thay trang</h1>",
      });
  })
  .controller("myctrl", function ($rootScope, $scope, $location, $http) {
    $scope.isActive = function (viewLocation) {
      return viewLocation === $location.path();
    };
    $rootScope.keywordSearch = "";
    $scope.searchProduct = function (keywordSearch) {
      $location.path("/product/all");
      $rootScope.keywordSearch = keywordSearch;
      $rootScope.begin = 0;
    };
    $scope.resetKeyword = function () {
      $rootScope.keywordSearch = "";
    };

    $scope.dssp = [];
    // Lấy dữ liệu từ json server
    $http.get("../data/db.json").then(
      function (res) {
        //Thành công
        $scope.dssp = res.data;
        // console.log($scope.dssp);
      },
      function (res) {
        //Thất bại
        alert("Lỗi không tải dược dữ liệu!!");
      }
    );

    // Khởi tạo giỏ hàng từ Local Storage khi load lại trang
    if (localStorage.getItem("cart")) {
      $rootScope.cart = JSON.parse(localStorage.getItem("cart"));
      // Tính toán lại tổng giá trị của giỏ hàng
      $rootScope.TotalCartPrice = function () {
        $rootScope.totalCartPrice = $rootScope.cart.reduce(
          (total, item) => total + (item.totalPrice || 0),
          0
        );
      };
      $rootScope.TotalCartPrice();
    } else {
      // Nếu không có dữ liệu trong Local Storage, khởi tạo giỏ hàng trống
      $rootScope.cart = [];
    }

    // Tạo mảng giỏ hàng và thêm sản phẩm vào mảng
    $rootScope.add = function (product) {
      // Chưa có sản phẩm trong giỏ hàng
      if ($rootScope.cart.filter((i) => i.id == product.id).length == 0) {
        product.quantity = 1;
        product.totalPrice = product.price * product.quantity;
        $rootScope.cart.push(product);
      } else {
        // Đã có sản phẩm thì tăng số lượng
        $rootScope.cart.forEach((i) => {
          if (i.id == product.id) {
            i.quantity++;
            i.totalPrice = i.price * i.quantity;
          }
        });
      }
      // Lưu giỏ hàng vào Local Storage
      localStorage.setItem("cart", JSON.stringify($rootScope.cart));
      $rootScope.TotalCartPrice();
      console.log($rootScope.cart);
    };
    // Hàm tính tổng tiền giỏ hàng
    $rootScope.TotalCartPrice = function () {
      $rootScope.totalCartPrice = $rootScope.cart.reduce(
        (total, item) => total + (item.totalPrice || 0),
        0
      );
    };
    $rootScope.increQuantity = function (product) {
      product.quantity++;
      product.totalPrice = product.price * product.quantity; // Cập nhật lại tổng giá
      $rootScope.TotalCartPrice(); // Gọi lại hàm tính tổng giá
      // Lưu giỏ hàng vào Local Storage
      localStorage.setItem("cart", JSON.stringify($rootScope.cart));
    };

    $rootScope.decreQuantity = function (product) {
      if (product.quantity > 1) {
        product.quantity--;
        product.totalPrice = product.price * product.quantity; // Cập nhật lại tổng giá
        $rootScope.TotalCartPrice(); // Gọi lại hàm tính tổng giá
        // Lưu giỏ hàng vào Local Storage
        localStorage.setItem("cart", JSON.stringify($rootScope.cart));
      }
    };
    $scope.del = function (id) {
      let index = $rootScope.cart.findIndex((item) => item.id === id);
      if (index !== -1) {
        $rootScope.cart.splice(index, 1);
        // Lưu giỏ hàng vào Local Storage sau khi xóa sản phẩm
        localStorage.setItem("cart", JSON.stringify($rootScope.cart));
      }
    };
  })
  .controller("homeCtrl", function ($scope, $routeParams) {
    $scope.idcatalog = $routeParams.idcatalog;
  })
  .controller(
    "productCtrl",
    function ($rootScope, $scope, $routeParams, $location) {
      $scope.idcatalog = $routeParams.idcatalog;

      // Khởi tạo biến selectedOrder với giá trị mặc định là 'default'
      $scope.selectedOrder = "default";
      // Khởi tạo biến order với giá trị mặc định là ''
      $scope.order = "";
      $scope.updateOrder = function () {
        if ($scope.selectedOrder === "lowToHigh") {
          $scope.order = "price";
        } else if ($scope.selectedOrder === "highToLow") {
          $scope.order = "-price";
        } else if ($scope.selectedOrder === "N.A-Z") {
          $scope.order = "name";
        } else if ($scope.selectedOrder === "N.Z-A") {
          $scope.order = "-name";
        } else {
          $scope.order = ""; // Hoặc giá trị mặc định khác của bạn
        }
      };

      // Chia trang sản phẩm
      $scope.limit = 12;
      $scope.page = 1;
      // page = 1 thì begin = 0
      // page = 2 thì begin = 3
      // page = 3 thì begin = 6
      // page = n thì begin = (n-1)*3
      $rootScope.begin = ($scope.page - 1) * $scope.limit;
      $scope.changePage = function (trang) {
        $scope.page = trang;
        $rootScope.begin = ($scope.page - 1) * $scope.limit;
      };
      $scope.totalPage = function () {
        return Math.ceil($scope.dssp.length / $scope.limit);
      };
      $scope.pageList = function () {
        let arr = [];
        // Tạo 1 mảng từ 1...n với n là tổng số trang
        for (i = 1; i <= $scope.totalPage(); i++) {
          arr.push(i);
        }
        return arr;
      };
    }
  )
  .controller("detailCtrl", function ($scope, $routeParams, $rootScope) {
    $scope.id = $routeParams.id;
    $scope.sp = $scope.dssp.products.filter((i) => i.id == $scope.id)[0];
    console.log($scope.sp);
    $scope.getCategoryName = function (categoryId) {
      switch (categoryId) {
        case 1:
          return "Nhẫn";
        case 2:
          return "Vòng tay";
        case 3:
          return "Dây chuyền";
        case 4:
          return "Bông tai";
        default:
          return "";
      }
    };

    // Đổi ảnh
    $scope.updateMainImage = function (imageUrl) {
      $scope.sp.img = imageUrl;
    };
  })
  .controller("cartCtrl", function ($scope) {})
  .controller("loginCtrl", function ($scope, $http, $location, $timeout, $rootScope) {
    // Kiểm tra xem người dùng đã đăng nhập chưa khi tải lại trang
    if (localStorage.getItem("isLoggedIn") === "true") {
      $rootScope.isLoggedIn = true;
    } else {
      $rootScope.isLoggedIn = false;
    }

    // Hàm xử lý sự kiện đăng nhập
    $scope.login = function () {
      // Tạo đối tượng chứa thông tin đăng nhập từ người dùng
      var credentials = {
        username: $scope.username,
        password: $scope.password,
      };

      // Gọi API để lấy dữ liệu từ file JSON
      $http
        .get("http://localhost:3000/user?username=" + credentials.username)
        .then(function (response) {
          // Lấy dữ liệu người dùng từ phản hồi của server
          var user = response.data;
          console.log(user);
          if(user.length != 0){
            var user_success = user[0];
            if(user_success.password == credentials.password){
              // Lưu thông tin đăng nhập vào localStorage
              localStorage.setItem("isLoggedIn", "true");
              localStorage.setItem("username", credentials.username);

              // Đăng nhập thành công
              alert("Đăng nhập thành công!");
              $timeout(function () {
                $location.path("/userprofile"); // Chuyển hướng đến trang userprofile sau 2 giây
              }, 1000);
              $rootScope.isLoggedIn = true; // Đặt trạng thái đăng nhập thành true
            }else{
              alert("Sai mật khẩu");
            }
          }else{
            alert("Tài khoản không tồn tại");
          }
            var username = user.username;
            var password = user.password;
            if (!$scope.username || !$scope.password) {
              alert("Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu");
              return;
            }
        })
        .catch(function (error) {
          // Xử lý lỗi khi không thể lấy dữ liệu từ file JSON
          console.error("Đã xảy ra lỗi khi đăng nhập:", error);
          alert("Đăng nhập thất bại!");
        });
    };
  })

  .controller("userCtrl", function ($scope, $routeParams, $http, $location, $rootScope) {
    $scope.idcatalog = $routeParams.idcatalog;
    $scope.dsTinh = [];

    $http
      .get(
        "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json"
      )
      .then(
        function (res) {
          console.log(res);
          $scope.dsTinh = res.data;
        },
        function (error) {
          alert("Lỗi không tải được dữ liệu JSON");
          console.error(error);
        }
      );
    // Hàm xử lý đăng xuất
    $scope.logout = function () {
      // Xoá thông tin đăng nhập từ localStorage hoặc session storage
      localStorage.removeItem("isLoggedIn");
      // Đặt trạng thái đăng nhập về false
      $rootScope.isLoggedIn = false;
      // Chuyển hướng đến trang đăng nhập
      $location.path("/home");
    };
  })
  .controller("signupCtrl", [
    "$scope",
    "AuthService",
    "$http",
    function ($scope, AuthService, $http) {
      $scope.signup = function () {
        $http.get("http://localhost:3000/user").then(function (response) {
          var existingUsernames = response.data.map(function (user) {
            return user.username;
          });

          if (existingUsernames.includes($scope.username)) {
            alert(
              "Tên người dùng đã tồn tại. Vui lòng chọn tên người dùng khác."
            );
            return; // Ngăn chặn việc đăng ký nếu tên người dùng đã tồn tại
          }

          // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp nhau không
          if ($scope.password !== $scope.confirmPassword) {
            alert("Mật khẩu và xác nhận mật khẩu không khớp!");
            return; // Ngăn chặn việc đăng ký nếu mật khẩu không khớp
          }

          var userData = {
            fullName: $scope.fullName,
            phoneNumber: $scope.phone,
            username: $scope.username,
            password: $scope.password,
          };

          AuthService.signup(userData).then(
            function (response) {
              // Xử lý phản hồi từ JSON server sau khi gửi dữ liệu thành công
              alert("Đăng ký thành công!");
              console.log(response.data);
            },
            function (error) {
              // Xử lý lỗi nếu có
              alert("Đăng ký thất bại");
              console.log(error);
            }
          );
        });
      };
    },
  ])

  .filter("customFilterSearch", function () {
    return function (arr, id, key) {
      return arr.filter((e) => {
        if (key) {
          return (
            e.name.toLowerCase().includes(key.toLowerCase()) &&
            (e.categories_id == id || id == "all")
          );
        } else {
          return e.categories_id == id || id == "all";
        }
      });
    };
  })
  .factory("AuthService", [
    "$http",
    function ($http) {
      var authService = {};

      authService.signup = function (userData) {
        return $http.post("http://localhost:3000/user", userData);
      };

      return authService;
    },
  ]);
