<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/portfolio', 'PortfolioController@index')->name('portfolio.view');
// Route::middleware(['auth:sanctum', 'verified'])->get('/portfolio', 'PortfolioController@landing')->name('portfolio.landing');  


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/portfolio', 'PortfolioController@index')->name('portfolio.view');
    Route::get('/portfolio/landing-page', 'PortfolioController@landing')->name('portfolio.landing');
    Route::get('/portfolio/create', 'PortfolioController@create')->name('portfolio.create');
});



//one to one
Route::get('ontoone/', 'MemberController@index');

//one to many
Route::get('add-post/', 'PostController@addPost');
Route::get('add-comment/{id}', 'PostController@addComment');
Route::get('get-comments/{id}', 'PostController@getCommentsByPost');


//many to many
Route::get('add-roles/', 'RoleController@addRole');
Route::get('add-users/', 'RoleController@AddUser');
Route::get('roles-by-user/{id}', 'RoleController@getAllRolesByUser');
Route::get('users-by-role/{id}', 'RoleController@getAllUserByRole');


//Socialite google auth

 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');