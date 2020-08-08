<?php


use GuzzleHttp\Psr7\Uri;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
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

Route::view('/', 'home')->name('home');

Route::view('/about','about')->name('about');

Route::resource('portfolio', 'ProjectController')->names('projects')->parameters(['portfolio'=>'project']);

/*
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');

Route::get('/portfolio/create', 'ProjectController@create')->name('projects.create');

Route::get('/portfolio/{project}/edit', 'ProjectController@edit')->name('projects.edit');

Route::patch('/portfolio/update/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portfolio', 'ProjectController@store')->name('projects.store');

Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

Route::delete('/portfolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
*/


Route::view('/contact','contact')->name('contact');

Route::post('/contact', 'MessageController@storage')->name('contact.storage');

Route::get('/css/app.css', 'MessageController@style')->name('html.style');

Auth::routes(['register' => false]);



