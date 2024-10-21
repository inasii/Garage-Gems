<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DescProController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\EnsureUserIsSeller;
use App\Models\Product;
use Termwind\Components\Raw;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\UserCategoryController;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/page', [RegisterController::class, 'Register'])->name('register');
Route::post('/make/account', [RegisterController::class, 'MakeAccount']);
Route::get('/login/page', [LoginController::class, 'Login'])->name('login');;
Route::post('/submit/login', [LoginController::class, 'authenticate'])->name('submitlogin');
Route::get('/home/page', [HomeController::class, 'Home'])->name('home');
Route::get('/cart/page', [CartController::class, 'Cart'])->name('cart');

Route::get('/profile/account', [ProfileController::class, 'Profile'])->name('profile');


Route::prefix('admin')->group(function(){
    Route::get('/AdminDashboard', [DashboardController::class, 'AdminDashboard'])->name('AdminDashboard');
    Route::resource('category', CategoryController::class)->names([
        'index' => 'category.index',
        'create' => 'category.create',
        'store' => 'category.store',
        'show' => 'category.show',
        'edit' => 'category.edit',
        'update' => 'category.update',
        'destroy' => 'category.destroy',
    ]);

    Route::resource('product', ProductController::class)->names([
        'index' => 'product.index',
        'create' => 'product.create',
        'store' => 'product.store',
        'show' => 'product.show',
        'edit' => 'product.edit',
        'update' => 'product.update',
        'destroy' => 'product.destroy',
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/seller/register', [AdminController::class, 'viewseller'])->name('seller');
    Route::post('/make/seller', [AdminController::class, 'register'])->name('seller.register');
});

Route::get('/admin/dashboard', function () {
})->middleware(isAdmin::class);


Route::get('/message', [MessageController::class, 'Message'])->name('message');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

Route::get('/product/{id}', [UserProductController::class, 'show'])->name('descpro');
Route::get('/product/{id}', [DescProController::class, 'show'])->name('descpro');

Route::get('/category/{slug}', [UserCategoryController::class, 'show'])->name('category.show');

Route::get('/fashion', [UserCategoryController::class, 'showFashion'])->name('fashion');
Route::get('/furniture', [UserCategoryController::class, 'showFurniture'])->name('furniture');
Route::get('/plant', [UserCategoryController::class, 'showPlant'])->name('plant');
Route::get('/recycle', [UserCategoryController::class, 'showRecycle'])->name('recycle');
Route::get('/free', [UserCategoryController::class, 'showFree'])->name('free');

Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart', [CartController::class, 'showCart'])->name('showCart');
Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('remove.from.cart');
Route::post('/apply-promo', [CartController::class, 'applyPromo'])->name('apply.promo');

Route::get('/search-results', [HomeController::class, 'searchResults'])->name('searchResults');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::POST('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
});