<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\PasswordController as AuthPasswordController;
use App\Http\Controllers\Admin\Auth\ForgetPasswordController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EkskulController;
use App\Http\Controllers\Admin\GaleriesController;
use App\Http\Controllers\Admin\OrganitationController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EkskulController as ControllersEkskulController;
use App\Http\Controllers\GaleriController as ControllersGaleriController;
use App\Http\Controllers\PostController as ControllersPostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/guest', function () {
    return view('guest');
})->name('guest');
// Sitemap

// Frontend Blog
Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\PostController::class, 'index'])->name('homepage');

Route::get('category/{category:slug}', [App\Http\Controllers\PostController::class, 'category'])->name('category');
Route::get('tag/{tag:slug}', [App\Http\Controllers\PostController::class, 'tag'])->name('tag');
// Galeri
Route::get('/galeri', [ControllersGaleriController::class,'index'])->name('galeri');
// Post
Route::get('/post', [ControllersPostController::class, 'index'])->name('post');
Route::get('post/{slug}', [ControllersPostController::class, 'show'])->name('show');
Route::get('/search/', [ControllersPostController::class,'search'])->name('search');
// Team
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
// Ekskul
Route::resource('/ekskul', ControllersEkskulController::class);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 // Prefix Admin
Route::prefix('/admin')->name('admin.')->group(function () {
    // Auth
    Route::get('/login',[LoginController::class,'showAdminLoginForm'])->name('login');
    Route::post('/login', [LoginController::class,'loginAdmin'])->name('login.submit');
    // Forget Password
    Route::get('forget-password', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password');
    Route::post('forget-password', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.submit');
    Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password');
    Route::post('reset-password', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.submit');

    // Security Admin
    Route::middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/dashboard/list', [AdminController::class,'getDashboard'])->name('dashboard.list');
     // Manajement Categories
    Route::resource('categories',CategoryController::class);
    Route::get('getcategories', [CategoryController::class, 'getjson'])->name('get.categories');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('categories/delete', [CategoryController::class,'destroy'])->name('categories.delete');
     // Manajement Tag
    Route::resource('tag',TagController::class);
    Route::get('gettag', [TagController::class, 'getjson'])->name('get.tag');
    Route::post('tag/store', [TagController::class, 'store'])->name('tag.store');
    Route::post('tag/delete', [TagController::class,'destroy'])->name('tag.delete');
    // Manage Soft Deletes Posts
    Route::get('post/trash',[PostController::class,'trash'])->name('post.trash');
    Route::get('post/trash/json', [PostController::class, 'jsontrash'])->name('get.post.trash');
    Route::post('post/trash/{id}/restore', [PostController::class , 'restore'])->name('post.restore');
    Route::delete('post/{id}/delete-permanent', [PostController::class,'deletePermanent'])->name('post.deletePermanent');
    // Manage Posts
    Route::resource('post', PostController::class);
    Route::get('getpost', [PostController::class, 'getjson'])->name('get.post');
    Route::post('post/store', [PostController::class, 'store'])->name('post.store');
    Route::post('post/delete', [PostController::class,'destroy'])->name('post.delete');
    Route::post('post/upload_image',[PostController::class,'uploadImage'])->name('upload');

     // Manajement Organitation
    Route::resource('organitation', OrganitationController::class);
    Route::get('getorganitation', [OrganitationController::class, 'getjson'])->name('get.organitation');
    Route::post('organitation/store', [OrganitationController::class, 'store'])->name('organitation.store');
    Route::post('organitation/delete', [OrganitationController::class,'destroy'])->name('organitation.delete');
    // Manajement Ekskul
    Route::resource('ekskul', EkskulController::class);
    Route::get('getekskul', [EkskulController::class, 'getjson'])->name('get.ekskul');
    Route::post('ekskul/store', [EkskulController::class, 'store'])->name('ekskul.store');
    Route::post('ekskul/delete', [EkskulController::class,'destroy'])->name('ekskul.delete');
    // Manajement Galeri
    Route::resource('galeri',GaleriesController::class);
    Route::get('getgaleri', [GaleriesController::class, 'getjson'])->name('get.galeri');
    Route::post('galeri/store', [GaleriesController::class, 'store'])->name('galeri.store');
    Route::post('galeri/delete', [GaleriesController::class,'destroy'])->name('galeri.delete');
     // Manajement Users
     Route::resource('user',UserController::class);
     Route::get('getuser', [UserController::class, 'getjson'])->name('get.user');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::post('user/delete', [UserController::class,'destroy'])->name('user.delete');
    // Cetak
    Route::get('getcetak', [UserController::class, 'getcetak'])->name('get.cetak');
    Route::get('cetak/user', [UserController::class, 'cetak'])->name('cetak.user');
    // Manajement Profile
    Route::get('profile', [AdminController::class,'editProfile'])->name('profile');
    Route::put('profile',  [AdminController::class,'updateProfile'])->name('profile.update');
    // Change Password
    Route::get('/changePassword', [AuthPasswordController::class, 'showChangePasswordAdmin'])->name('changepassword');
    Route::post('/changePassword', [AuthPasswordController::class, 'changePasswordStore'])->name('changepassword.submit');
    // Manajement Users
    Route::resource('user',UserController::class);


});
});
