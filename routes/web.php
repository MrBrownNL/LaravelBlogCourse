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

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {

    return view('welcome');

    $data = [
        'title'=>'Hi student, you like the course?',
        'content'=>'Test content\r\n\r\nBest regards,',
    ];

//    Mail::send('emails.test', $data, function($message) {
//
//        $message->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))->subject('Hello student');
//
//    });

    return "message not send! (commented out)";


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', [ 'middleware'=>['web'], function() {

    return "Middleware role";

}]);

Route::get('/admin', 'AdminController@index');

Route::group(['middelware'=>'IsAdmin'], function() {

    Route::resource('/admin/users', 'AdminUsersController',['as'=>'admin']);

});
