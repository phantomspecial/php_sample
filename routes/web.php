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

Route::get('hello/', 'HelloController@index');
//Route::get('hello/other', 'HelloController@other');
