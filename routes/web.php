<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\ProductTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PageContentController::class, 'home'])->name('page.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);

require __DIR__.'/auth.php';

Route::get('/about', [PageContentController::class, 'about'])->name('page.about');
Route::get('/contact', [PageContentController::class, 'contact'])->name('contact.about');

Route::get('/users', [UserController::class, 'index'])->name('admin.user');
Route::get('admin/users/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');


Route::get('/shop', [ProductController::class, 'shop'])->name('products.edit');
Route::get('/admin/content', [PageContentController::class, 'admincontentdisplay'])->name('content.display');

Route::get('/productdetails', function () {
    return view('productdetails');
});

Route::resource('admin/products', ProductController::class)->names([
    'index' => 'products.index',
    'create' => 'products.create',
    'store' => 'products.store',
    'edit' => 'products.edit',
    'update' => 'products.update'
]);

Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('admin/products/{product}/delete', [ProductController::class, 'destroy'])->name('products.delete');
Route::get('product-image/{product_image_id}/delete', [ProductController::class, 'destroyImage'])
    ->name('product.image.delete');
Route::get('productdetails/{product}', [ProductController::class, 'productDetails'])->name('productdetails');

Route::get('admin/content/{content}/edit', [PageContentController::class, 'edit'])->name('content.edit');
Route::put('admin/content/{content}', [PageContentController::class, 'update'])->name('content.update');

Route::get('/admincreateproducttype', [ProductController::class, 'showAdminCreateProductType'])
    ->name('admincreateproducttype');
    Route::get('admin/producttype/{producttype_id}/edit', [ProductTypeController::class, 'edit'])
    ->name('producttype.edit');


Route::post('admin/producttypes/create', [ProductTypeController::class, 'create'])->name('producttypes.create');
Route::put('admin/producttypes/update/{productTypeID}', [ProductTypeController::class, 'update'])->name('producttypes.update');
Route::get('admin/producttypes/{productTypeID}/delete', [ProductTypeController::class, 'destroy'])->name('producttypes.delete');


Route::get('admin/feedback/',[FeedbackController::class,'index'])->name('feedback.index');
Route::get('admin/feedback/create',[FeedbackController::class,'create'])->name('feedback.create');
Route::post('admin/feedback/store',[FeedbackController::class,'store'])->name('feedback.store');
Route::get('admin/feedback/{feedback}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('admin/feedback/update/{feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::get('admin/feedback/{feedback}/delete', [FeedbackController::class, 'destroy'])->name('feedback.delete');

Route::get('admin/order/',[OrderController::class,'index'])->name('order.index');
Route::get('admin/order/create',[OrderController::class,'create'])->name('order.create');
Route::post('admin/order/store',[OrderController::class,'store'])->name('order.store');
Route::get('admin/order/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::get('admin/order/{order}/show', [OrderController::class, 'show'])->name('order.show');
Route::get('admin/order/{order}/details', [OrderController::class, 'edit'])->name('order.details');
Route::put('admin/order/{order}', [OrderController::class, 'update'])->name('order.update');
Route::get('admin/order/{order}/delete', [OrderController::class, 'destroy'])->name('order.delete');

Route::get('/track', function(){return view('ordersearch');});
Route::get('track/{order}', [OrderController::class, 'search'])->name('order.search');


