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

use App\Http\Middleware\HelloMiddleware;


$html = <<<EOF
<html>
<head>
<title>Hello</title>
</head>
</html>
EOF;


Route::get('/', function () {
    return view('welcome');
});

//Route::get('hello/', function () {
//    return view('hello.index');
//});

Route::get('hello', 'HelloController@index')
    ->middleware('helo');
Route::post('hello', 'HelloController@post');
//Route::get('hello/other', 'HelloController@other');
