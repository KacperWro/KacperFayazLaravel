<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\LanguagesController;
use App\Http\Controllers\ContinentsController;
use App\Http\Controllers\CommentCountryController;
use App\Http\Controllers\MailController;

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

Route::get('/', [PagesController::class, 'index']);

// Route::resource('/blog', PostsController::class);

Route::resource('/blog', CountriesController::class);
Route::resource('/displaySome', CountriesController::class);
// Route::get('blog/{id}', ['as' => 'blog.index', 'uses' => 'CountriesController@index']);
Route::resource('/langPosts', LanguagesController::class);
Route::resource('/layouts', ContinentsController::class);


Route::get('sendbasicemail','App\Http\Controllers\MailController@basic_email');
Route::get('sendhtmlemail','App\Http\Controllers\MailController@html_email');
Route::get('sendattachmentemail','App\Http\Controllers\MailController@attachment_email');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

