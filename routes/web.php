<?php

use Illuminate\Support\Facades\Route;
use \App\Model\SitePages;

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

Route::get('/', 'SitePageController@index');

Route::get('about', function () {
    return view('about');
});   
Route::get('projects', function () {
        return view('projects');
    });
    Route::get('contact', function () {
        return view('contact');
    }); 
    Route::get('donate', function () {
        return view('donate');
    });    
Route::get('terms', function () {
    return view('terms');
});
Route::get('privacy', function () {
    return view('privacy');
});
Route::get('contact', function () {
    return view('contact');
});
Route::post('/send-email', 'EmailController@sendEmail')->name('send-email');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/team/{teamid}/apps', 'TeamController@index')->name('apps.show');
Route::get('/team/{teamid}/apps/{appid}', 'TeamController@editApp')->name('apps.edit');
Route::get('/team/{teamid}/apps/{appid}/activate', 'TeamController@activateApp')->name('apps.activate');
Route::get('/team/{teamid}/apps/{appid}/tabs/{tabid}', 'TeamController@editTab')->name('apps.edit-tab');
Route::get('/team/{teamid}/apps/{appid}/tabs/new', 'TeamController@addTab')->name('apps.add-tab');
Route::get('/team/{teamid}/apps/{appid}/tabs/{tabid}/delete', 'TeamController@deleteTab')->name('apps.delete-tab');

Route::get('sitepages', 'SitePageController@editSites');
