<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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


Route::get('feedback/',[FeedbackController::class,'index'])->name('feedback.index');
Route::get('feedback/create',[FeedbackController::class,'create'])->name('feedback.create');
Route::post('feedback/store',[FeedbackController::class,'store'])->name('feedback.store');
Route::get('feedback{feedback}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('feedback/update/{feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::get('feedback/{feedback}/delete', [FeedbackController::class, 'destroy'])->name('feedback.delete');
// Route::resource('feedback', FeedbackController::class)->names([
//     'index' => 'feedback.index',
//     'create' => 'feedback.create',
//     'store' => 'feedback.store',
//     'edit' => 'feedback.edit',
//     'update' => 'feedback.update'
// ]);


