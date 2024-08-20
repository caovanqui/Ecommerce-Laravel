<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CheckoutController;

//Định tuyến
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/forgotpass', [HomeController::class, 'forgotpass'])->name('forgotpass');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/product', [ProductController::class, 'product'])->name('product');
// Route::get('/productdetail', [HomeController::class, 'productdetail'])->name('productdetail');
Route::get('/uprofile', [HomeController::class, 'uprofile'])->name('uprofile');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/{id}', [ProductController::class, 'productdetail'])->name('productdetail');





Route::prefix('admin')->middleware('admin')->group(function () {
    //Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    //Product
    Route::get('/productlist', [AdminController::class, 'productlist'])->name('admin.productlist');
    Route::get('/addproduct', [AdminController::class, 'showAddProductForm'])->name('admin.showAddProductForm');
    Route::post('/addproduct', [AdminController::class, 'addproduct'])->name('admin.addproduct');
    Route::get('/deleteproduct/{id}', [AdminController::class, 'productdelete'])->name('admin.productdelete');
    Route::get('/editproduct/{id}', [AdminController::class, 'showEditProductForm'])->name('admin.showEditProductForm');
    Route::post('/editproduct', [AdminController::class, 'editproduct'])->name('admin.editproduct');
    //Category
    Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/addcategory', [AdminController::class, 'showAddCategoryForm'])->name('admin.showAddCategoryForm');
    Route::post('/addcategory', [AdminController::class, 'addcategory'])->name('admin.addcategory');
    Route::get('/deletecategory/{id}', [AdminController::class, 'deletecategory'])->name('admin.deletecategory');
    //User
    Route::get('/userlists', [UserController::class, 'userlists'])->name('admin.userlists');
    Route::get('/role/{id}/edit', [UserController::class, 'editRoleForm'])->name('admin.editrole');
    Route::post('/role/{id}', [UserController::class, 'updateRole'])->name('role.update');
    // Route::get('/profile', [UserController::class, 'profile'])->name('admin.profile');
    // Route::get('/newuser', [AdminController::class, 'newuser'])->name('admin.newuser');
    
});

//Auth
Route::get('/signup', [RegisterController::class, 'showRegistrationForm'])->name('showRegistrationForm');
Route::post('/signup', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
//Cart
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [CartController::class, 'viewCart'])->name('viewCart');
Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/payment', [CheckoutController::class, 'showPaymentForm'])->name('showPaymentForm');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('/ordertracking', [CheckoutController::class, 'showOrderTrackingForm'])->name('showOrderTrackingForm');
