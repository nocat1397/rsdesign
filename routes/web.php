<?php

use App\Project;
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

Route::get('/', function () {
    $projects=Project::all();
    return view('template.homeContent', compact('projects'));
});
Route::get('about','NavController@nav1');
Route::get('services','NavController@nav2');
Route::get('portfolio','NavController@nav5');
Route::get('portfolio{id}','NavController@nav3');
Route::get('contact','NavController@nav4');
Route::get('project','AdminController@index');

Route::resource('project','ProjectController');
Route::resource('category','CategoryController');
Route::resource('assign','AssigncatController');
Route::resource('update','UpdatecatController');
Route::resource('upload','UploadController');
Route::resource('comment','ReviewController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
