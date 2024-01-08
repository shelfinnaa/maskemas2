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
use App\Http\Controllers\DashboardController;

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

// Route::get('/login', [HomeController::class], 'login')->name('login');

Route::post('/details', [ProductController::class, 'productdetail'])->name('productdetail');


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
Route::get('admin/users/{user}/delete', [UserController::class, 'destroy'])->middleware(['auth', 'admin'])->name('user.delete');


Route::get('/shop', [ProductController::class, 'shop'])->name('products.edit');
Route::get('/admin/content', [PageContentController::class, 'index'])->name('content.display')->middleware(['auth', 'admin']);

Route::get('/productdetails', function () {
    return view('productdetails');
});



Route::get('/admincategoryindex', [ProductController::class, 'adminCategoryIndex'])->name('admin.category.index')->middleware(['auth', 'admin']);

Route::resource('admin/products', ProductController::class)->names([
    'index' => 'products.index',
    'create' => 'products.create',
    'store' => 'products.store',
    'edit' => 'products.edit',
    'update' => 'products.update'
])->middleware(['auth', 'admin']);

Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware(['auth', 'admin']);
Route::get('admin/products/{product}/delete', [ProductController::class, 'destroy'])->name('products.delete')->middleware(['auth', 'admin']);
Route::get('product-image/{product_image_id}/delete', [ProductController::class, 'destroyImage'])
    ->name('product.image.delete')->middleware(['auth', 'admin']);
Route::get('productdetails/{product}', [ProductController::class, 'productDetails'])->name('products.show')->middleware(['auth', 'admin']);


Route::get('admin/content/{content}/edit', [PageContentController::class, 'edit'])->name('content.edit')->middleware(['auth', 'admin']);
Route::put('admin/content/{content}', [PageContentController::class, 'update'])->name('content.update')->middleware(['auth', 'admin']);

Route::get('/admincreateproducttype', [ProductController::class, 'showAdminCreateProductType'])
    ->name('admincreateproducttype')->middleware(['auth', 'admin']);
    Route::get('admin/producttype/{producttype_id}/edit', [ProductTypeController::class, 'edit'])
    ->name('producttype.edit')->middleware(['auth', 'admin']);


Route::post('admin/producttypes/create', [ProductTypeController::class, 'create'])->name('producttypes.create')->middleware(['auth', 'admin']);
Route::put('admin/producttypes/update/{productTypeID}', [ProductTypeController::class, 'update'])->name('producttypes.update')->middleware(['auth', 'admin']);
Route::get('admin/producttypes/{productTypeID}/delete', [ProductTypeController::class, 'destroy'])->name('producttypes.delete')->middleware(['auth', 'admin']);


Route::prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');

    Route::prefix('feedback')->group(function(){
        Route::get('/',[FeedbackController::class,'index'])->name('feedback.index');
        Route::get('/create',[FeedbackController::class,'create'])->name('feedback.create');
        Route::post('/store',[FeedbackController::class,'store'])->name('feedback.store');
        Route::get('/edit/{feedback}', [FeedbackController::class, 'edit'])->name('feedback.edit');
        Route::put('/update/{feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
        Route::get('/delete/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.delete');
        Route::get('/delete/{feedback}/image', [FeedbackController::class, 'destroyImage'])->name('feedback.image.delete');
    });

    Route::prefix('order')->group(function(){
        Route::get('/',[OrderController::class,'index'])->name('order.index');
        Route::get('/create',[OrderController::class,'create'])->name('order.create');
        Route::post('/store',[OrderController::class,'store'])->name('order.store');
        Route::get('/show/{order}', [OrderController::class, 'showAdmin'])->name('order.showAdmin');
        Route::get('/edit/{order}', [OrderController::class, 'edit'])->name('order.edit');
        Route::put('/update/{order}', [OrderController::class, 'update'])->name('order.update');
        Route::get('/delete/{order}', [OrderController::class, 'destroy'])->name('order.delete');
    });
})->middleware(['auth', 'admin']);

Route::get('/track', function(){return view('ordersearch');});
Route::get('/order', [OrderController::class, 'track'])->name('order.track');
Route::get('/order/{order:tracking_id}', [OrderController::class, 'showUser'])->name('order.showUser');
Route::get('/checkout', [OrderController::class, 'checkOrders'])->name('orders.check');

