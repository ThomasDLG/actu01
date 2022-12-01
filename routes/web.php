<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\MeteoController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NewsletterController;

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

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home.index');
// SEARCH
Route::get('/search', [SearchController::class, 'show'])->name('search.show');
// CATEGORIES
Route::controller(CategorieController::class)->group(function() {
    Route::get('/rubrique/{categorie}', 'show')->name('categories.show');
    Route::get('/redacteurs/{writer}', 'writer')->name('articles.writer');
});
// ARTICLES
Route::controller(ArticleController::class)->group(function() {
    Route::get('/article/{categorie}/{id}', 'show')->name('articles.show');
});
// LE LIVE
Route::get('/live', [LiveController::class, 'show'])->name('live.show');
// NEWSLETTER
Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
// METEO
Route::get('/meteo', [MeteoController::class, 'show'])->name('meteo');
// CONTACT
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// MENTIONS LÉGALES
Route::get('/mentions', function () {
    return view('mentions');
})->name('mentions');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
