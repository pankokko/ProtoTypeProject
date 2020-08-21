<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('self_evaluation')->name('self_evaluation.')->group(function () {
    Route::post('/step1', 'SelfEvaluationController@step1')->name('step1');
});

Route::prefix('activity')->name('activity.')->group(function () {
    Route::get('/activity_step1', 'ActivityController@step1')->name('step1');
    Route::post('/register_step1', 'ActivityController@registerStep1')->name('register_step1');
    Route::get('/activity_step2', 'ActivityController@step2')->name('step2');
    Route::post('/register_step2', 'ActivityController@registerStep2')->name('register_step2');
    Route::get('/activity_step3', 'ActivityController@step3')->name('step3');
    Route::post('/register_step3', 'ActivityController@registerStep3')->name('register_step3');
});
