<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageContentController;

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


