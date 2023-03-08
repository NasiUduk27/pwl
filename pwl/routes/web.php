<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/marbel', [ProductController::class, 'index']);
});

Route::get('/dashboard', [DashboardController::class, 'dashboard']);

Route:: get('/profile', [ProfileController::class, 'profile']);


Route:: get('/pengalaman', [PengalamanController::class, 'pengalaman']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'index']);
});

Route::get('/news/{news}', [NewsController::class, 'show']);

Route::get('/aboutus', [PageController::class, 'AboutUs']);

Route::resource('contactus', ContactUsController::class);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/articles/{id}', function ($id) {
    echo ("Halaman Artikel dengan ID $id");
});

Route::get('/articles', [ArticleController::class, 'index']);



