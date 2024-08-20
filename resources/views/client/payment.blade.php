<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{asset('client/css/payment.css')}}">

</head>

<body>

    <div class="container">

        <form action="{{route('checkout.process')}}" method="post">
        @csrf
            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>Họ và tên :</span>
                        <input type="text" name="name" value="{{ $user->name }}" placeholder="Nguyễn Văn A">
                    </div>
                    <div class="inputBox">
                        <span>email :</span>
                        <input type="email" name="email" value="{{ $user->email }}" placeholder="example@example.com">
                    </div>
                    <div class="inputBox">
                        <span>Địa chỉ :</span>
                        <input type="text" name="address" value="{{ $user->address }}" placeholder="Số đường - phường/xã/quận/huyện - thành phố">
                    </div>
                    <div class="inputBox">
                        <span>Số điện thoại :</span>
                        <input type="text" name="phone_number" value="{{ $user->phone_number }}" placeholder="0000000000">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Quốc Gia :</span>
                            <input type="text" placeholder="vietnam">
                        </div>
                        <div class="inputBox">
                            <span>mã zip :</span>
                            <input type="text" placeholder="123 456">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">Thanh Toán</h3>

                    <div class="inputBox">
                        <span>Thẻ tín dụng được chấp nhận :</span>
                        <img src="{{ asset('client/img/card_img.png') }}" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Tên thẻ :</span>
                        <input type="text" name="card_name" placeholder="NGUYEN VAN A">
                    </div>
                    <div class="inputBox">
                        <span>Số Thẻ Tín Dụng :</span>
                        <input type="number" name="card_number" placeholder="1111-2222-3333-4444">
                    </div>


                    <div class="inputBox">
                        <span>Năm hết hạn :</span>
                        <input type="number" name="expiry_year" placeholder="2022">
                    </div>
                    <div class="inputBox" style="margin-top: 19px">
                        <span>CVV :</span>
                        <input type="text" name="cvv" placeholder="1234">
                    </div>


                </div>

            </div>

            <input type="submit" value="proceed to checkout" class="submit-btn">

        </form>

    </div>

</body>

</html>