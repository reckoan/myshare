<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomepageController@index');

// Route::any('users/{id}', );

Auth::routes(['register' => false]);

Route::get('/waitingregister', 'HomepageController@waitingregister')->name('waitingregister');

Route::resource('waiting', 'WaitingController');
Route::resource('tackregister', 'TaskregisterController');
Route::get('payouts', 'PayoutsController@index')->name('payouts');
Route::get('payouts1', 'PayoutsController@payouts1')->name('payouts1');
Route::get('payouts2', 'PayoutsController@payouts2')->name('payouts2');
Route::get('payouts3', 'PayoutsController@payouts3')->name('payouts3');
Route::get('payouts4', 'PayoutsController@payouts4')->name('payouts4');
Route::get('payouts5', 'PayoutsController@payouts5')->name('payouts5');
Route::get('payouts6', 'PayoutsController@payouts6')->name('payouts6');
Route::get('payouts7', 'PayoutsController@payouts7')->name('payouts7');
Route::get('payouts8', 'PayoutsController@payouts8')->name('payouts8');


Route::get('/info', 'InfoController@index')->name('info');
Route::get('/waiting-list', 'WaitinglistController@index')->name('waiting-list');
Route::get('/queue-one', 'Queue1Controller@index')->name('queue-one');
Route::get('/queue-two', 'Queue2Controller@index')->name('queue-two');
Route::get('/queue-three', 'Queue3Controller@index')->name('queue-three');
Route::get('/queue-four', 'Queue4Controller@index')->name('queue-four');
Route::get('/queue-five', 'Queue5Controller@index')->name('queue-five');
Route::get('/queue-six', 'Queue6Controller@index')->name('queue-six');
Route::get('/queue-seven', 'Queue7Controller@index')->name('queue-seven');
Route::get('/queue-eight', 'Queue8Controller@index')->name('queue-eight');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('wait', 'WaitController');
    Route::post('/wait/move', 'WaitController@move')->name('wait.move');

    Route::get('/waitmovelist', 'WaitingController@index')->name('waitmovelist');


    Route::resource('que1', 'Admin\QueController');
    Route::resource('que2', 'Admin\Que2Controller');
    Route::resource('que3', 'Admin\Que3Controller');
    Route::resource('que4', 'Admin\Que4Controller');
    Route::resource('que5', 'Admin\Que5Controller');
    Route::resource('que6', 'Admin\Que6Controller');
    Route::resource('que7', 'Admin\Que7Controller');
    Route::resource('que8', 'Admin\Que8Controller');

    Route::get('import', 'ImportController@index')->name('import');
    Route::post('process', 'ImportController@processImport')->name('process');

    Route::get('taskimport', 'TaskimportController@index')->name('taskimport');
    Route::get('taskshow', 'TaskimportController@display')->name('taskshow');
    Route::post('taskprocess', 'TaskimportController@processImport')->name('taskprocess');
    Route::post('taskshow/move', 'TaskimportController@move')->name('taskshow.move');
    Route::get('bulkMoveQ1', 'TaskimportController@bulkMoveQ1')->name('bulkMoveQ1');
    Route::DELETE('taskshow/{id}/destroy', 'TaskimportController@destroy')->name('taskshow.destroy');


    Route::get('que1moved', 'MovedController@Que1Moved')->name('que1moved');
    Route::put('que1moved/{id}/update1', 'MovedController@update1')->name('que1moved.update1');
    Route::DELETE('que1moved/{id}/destroy1', 'MovedController@destroy1')->name('que1moved.destroy1');

    Route::get('que2moved', 'MovedController@Que2Moved')->name('que2moved');
    Route::put('que2moved/{id}/update2', 'MovedController@update2')->name('que2moved.update2');
    Route::DELETE('que2moved/{id}/destroy2', 'MovedController@destroy2')->name('que2moved.destroy2');

    Route::get('que3moved', 'MovedController@Que3Moved')->name('que3moved');
    Route::put('que3moved/{id}/update3', 'MovedController@update3')->name('que3moved.update3');
    Route::DELETE('que3moved/{id}/destroy3', 'MovedController@destroy3')->name('que3moved.destroy3');

    Route::get('que4moved', 'MovedController@Que4Moved')->name('que4moved');
    Route::put('que4moved/{id}/update4', 'MovedController@update4')->name('que4moved.update4');
    Route::DELETE('que4moved/{id}/destroy4', 'MovedController@destroy4')->name('que4moved.destroy4');

    Route::get('que5moved', 'MovedController@Que5Moved')->name('que5moved');
    Route::put('que5moved/{id}/update5', 'MovedController@update5')->name('que5moved.update5');
    Route::DELETE('que5moved/{id}/destroy5', 'MovedController@destroy5')->name('que5moved.destroy5');

    Route::get('que6moved', 'MovedController@Que6Moved')->name('que6moved');
    Route::put('que6moved/{id}/update6', 'MovedController@update6')->name('que6moved.update6');
    Route::DELETE('que6moved/{id}/destroy6', 'MovedController@destroy6')->name('que6moved.destroy6');

    Route::get('que7moved', 'MovedController@Que7Moved')->name('que7moved');
    Route::put('que7moved/{id}/update7', 'MovedController@update7')->name('que7moved.update7');
    Route::DELETE('que7moved/{id}/destroy7', 'MovedController@destroy7')->name('que7moved.destroy7');

    Route::get('que8moved', 'MovedController@Que8Moved')->name('que8moved');
    Route::put('que8moved/{id}/update8', 'MovedController@update8')->name('que8moved.update8');
    Route::DELETE('que8moved/{id}/destroy8', 'MovedController@destroy8')->name('que8moved.destroy8');

    Route::delete('que1moved/{id}/destroy1', 'MovedController@destroy1')->name('que1moved.destroy1');
    Route::delete('que2moved/{id}/destroy2', 'MovedController@destroy2')->name('que2moved.destroy2');
    Route::delete('que3moved/{id}/destroy3', 'MovedController@destroy3')->name('que3moved.destroy3');
    Route::delete('que4moved/{id}/destroy4', 'MovedController@destroy4')->name('que4moved.destroy4');
    Route::delete('que5moved/{id}/destroy5', 'MovedController@destroy5')->name('que5moved.destroy5');
    Route::delete('que6moved/{id}/destroy6', 'MovedController@destroy6')->name('que6moved.destroy6');
    Route::delete('que7moved/{id}/destroy7', 'MovedController@destroy7')->name('que7moved.destroy7');
    Route::delete('que8moved/{id}/destroy8', 'MovedController@destroy8')->name('que8moved.destroy8');

    Route::get('profile', 'ProfileController@index')->name('myprofile');
    Route::post('passwordsave', 'ProfileController@passwordSave')->name('passwordsave');
    Route::post('moveque/moves', 'MoveController@move')->name('moveque.moves');




});

