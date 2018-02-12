<?php

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

use App\Events\MessagePosted;

Route::get('/', function () {
    return view('welcome');
});

Route::view('chat', 'chat')->middleware('auth');

Route::get('messages', function() {
    return App\Message::with('User')->get();
})->middleware('auth');

Route::post('messages', function() {
    $user = Auth::user();
    $message = $user->Messages()->create([
        'message' => request()->get('message')
    ]);

    //Announce that a new message has been posted
    broadcast(new MessagePosted($message, $user))->toOthers();

    return ['status' => 'OK'];
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
