<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\InvoiceController;
use \App\Http\Controllers\FrontendController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\TicketController;
use \App\Http\Controllers\LocationController;
use \App\Http\Controllers\FrontendLocationController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('index');


Route::prefix('business-locations')->group(function () {
    Route::get('/{location}', [FrontendLocationController::class,'index'])->name('location');
});
Route::middleware([\App\Http\Middleware\BasicAuth::class,'auth'])->group( function() {
    Route::resource('invoices', InvoiceController::class);
    Route::post('getsubtotal', [InvoiceController::class, 'getsubtotal'])->name('getsubtotal');
    Route::put('getsubtotal1', [InvoiceController::class, 'getsubtotal'])->name('getsubtotal1');
    Route::get('/dashboard', [FrontendController::class,'dashboard'])->name('dashboard');
    Route::get('/getDownload/{id}', [FrontendController::class,'getDownload'])->name('getDownload');
    Route::get('/profile', [UserController::class,'profile'])->name('profile');
    Route::post('/profileUpdate', [UserController::class,'profileUpdate'])->name('profileUpdate');
    Route::resource('/users', UserController::class);
    Route::resource('/tickets', TicketController::class);
    Route::resource('/locations', LocationController::class);
    Route::get('locations/create', [LocationController::class,'create'])->name('locations.create');
    Route::get('locations/edit/{id}', [LocationController::class,'edit'])->name('locations.edit');
    Route::post('locations/store', [LocationController::class,'store'])->name('locations.store');
    Route::put('locations/update/{id}', [LocationController::class,'update'])->name('locations.update');
    Route::delete('locations/delete/{id}', [LocationController::class,'destroy'])->name('locations.delete');
    Route::resource('/posts', PostController::class);
    Route::post('posts/store', [PostController::class,'store'])->name('posts.store');
    Route::put('posts/update/{id}', [PostController::class,'update'])->name('posts.update');
    Route::delete('posts/delete/{id}', [PostController::class,'destroy'])->name('posts.delete');
	
	 Route::resource('/blog', BlogController::class);
    Route::get('/blogdelete/{id}', [BlogController::class,'delete'])->name('blog.delete');
    Route::resource('/gallery', GalleryController::class);
    Route::get('/gallerydelete/{id}', [GalleryController::class,'delete'])->name('gallery.delete');
       Route::resource('/pages', PagesController::class);
	
	Route::post('pages/store', [PagesController::class,'store'])->name('pages.store');
	Route::get('/pagedelete/{id}', [PagesController::class,'delete'])->name('pages.delete');
    Route::get('/clear-cache', function() {
        $exitCode = Artisan::call('cache:clear');
        echo "Cache Cleared";
    });
});


require __DIR__.'/auth.php';
