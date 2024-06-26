<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\PengembalianController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/', [Controller::class, 'index']);
Route::get('/about', [Controller::class, 'about'])->name('about.about');

Route::get('/regist', [RegistrationController::class, 'Registration'])->name('Registration');
Route::resource('Registration', 'App\Http\Controllers\RegistrationController');
// Route::get('/UpdateStatusMovie/{id}', [RegistrationController::class, 'UpdateStatus'])->name('UpdateStatusMovie');

Route::get('/checkin', [CheckinController::class, 'index']);
Route::post('/CheckinMovie', [CheckinController::class, 'CheckinMovie'])->name('CheckinMovie');

Route::resource('biodata', 'App\Http\Controllers\BiodataController');

//Route::get('/post', [PostController::class, 'index']);

// middleware > defaultnya itu /home, untuk mengubahnya (app/http/providers/routeservice) ganti /home
// berikan name('login'), karna pada (app/http/middleware/authenticate) 'login', agar membaca route get/login itu namanya login   
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);   
Route::post('/logout', [LoginController::class, 'logout']);   

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');  
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/admin', function(){
    return view ('admin.index');
})->middleware('auth');  
// Route::get('/pengguna', function(){
//     return view ('admin.index');
// })->middleware('auth');  
Route::get('/dashboard', function(){
    return view ('dashboard.index');
})->middleware('auth');  
// jika ingin setting masuk ke register tidak harus login terlebih dahulu, pakai middleware'guest'
// jika ingin setting tidak bisa masuk ke dashboard harus login terlebih dahulu, pakai middleware'auth'

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('mobil', 'App\Http\Controllers\MobilController');
Route::resource('rental', 'App\Http\Controllers\RentalController');
Route::resource('pengembalian', 'App\Http\Controllers\PengembalianController');
Route::post('/get-pengembalian', 'App\Http\Controllers\PengembalianController@pengembalian')->name('get.pengembalian');


// Route::get('/mempelai', [MempelaiController::class, 'index'])->name('mempelai.index');
// Route::put('/mempelai/{id}/aktif', 'App\Http\Controllers\MempelaiController@aktif');
// Route::resource('mempelai', 'App\Http\Controllers\MempelaiController')->middleware('auth');

// Route::get('/pria', [PriaController::class, 'index'])->name('pria.index')->middleware('auth');
// Route::resource('pria', 'App\Http\Controllers\PriaController')->middleware('auth');

// Route::get('/wanita', [WanitaController::class, 'index'])->name('wanita.index');
// Route::resource('wanita', 'App\Http\Controllers\WanitaController')->middleware('auth');

// Route::get('/tempatacara', [TempatAcaraController::class, 'index'])->name('tempatacara.index');
// Route::resource('tempatacara', 'App\Http\Controllers\TempatAcaraController')->middleware('auth');

// Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
// Route::resource('kategori', 'App\Http\Controllers\KategoriController')->middleware('auth');

// Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
// Route::resource('galeri', 'App\Http\Controllers\GaleriController')->middleware('auth');

Route::prefix('galeri')->group(function () {
    Route::get('/', [\App\Http\Controllers\GaleriController::class, 'index'])->name('galeri.index');
    Route::get('/create', [\App\Http\Controllers\GaleriController::class, 'create'])->name('galeri.create');
    Route::post('/store', [\App\Http\Controllers\GaleriController::class, 'store'])->name('galeri.store');
    Route::post('/store/media', [\App\Http\Controllers\GaleriController::class, 'storeMedia'])->name('galeri.storeMedia');
    Route::get('/{id}', [\App\Http\Controllers\GaleriController::class, 'edit'])->name('galeri.edit');
    Route::put('/{id}', [\App\Http\Controllers\GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/{id}', [\App\Http\Controllers\GaleriController::class, 'destroy'])->name('galeri.delete');
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
// menamaan pada      ini  \|/ (category) harus sama dengan ini \|/  $category  
Route::get('/categories/{category:slug}', function(Category $category){
    return view ('/post/category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
        'pageTitle' => 'Category '.$category->name
    ]);
});

Route::get('/authors/{user}', function(User $user){
    return view ('/post/index', [
        'title' => 'User Post',
        'posts' => $user->posts,
        'pageTitle' => 'User Post'
    ]);
});

Route::group(['prefix' => 'api'], function () {
    Route::get('getDataPria', 'App\Http\Controllers\ApiController@getDataPria')->name('DataPria');
    Route::get('getDataWanita', 'App\Http\Controllers\ApiController@getDataWanita')->name('DataWanita');
    Route::get('getDataTempatAcara', 'App\Http\Controllers\ApiController@getDataTempatAcara')->name('DataTempatAcara');
    Route::get('getDataGaleri', 'App\Http\Controllers\ApiController@getDataGaleri')->name('DataGaleri');
});
// Route::get('/', function () {
//     return view('welcome');
// });