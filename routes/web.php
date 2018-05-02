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

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('/hi/{name?}', ['as' => 'hi', function ($name = 'invitado') {
    //return view('hi', ['name' => $name]);
    //return view('hi')->with(['name' => $name]);
    $consoles = [
        "playstation",
        "gamecube",
        "gameboy"
    ];

    $devices = [
    ];


    return view('hi', compact('name', 'consoles', 'devices'));
}]);

Route::get('/bye/{name?}', ['as' => 'hi', function ($name = 'invitado') {
    $html = '<h1>Good Bye</h1>';
    $js = '<script>alert("Hello")</script>';
    return view('bye', compact('name', 'html', 'js'));
}]);

Route::get('/index', function () {
    return '<a href=' . route('contacto') . '>Contactanos</a>';
});

Route::get('hello/{name?}', function ($name = 'invitado') {
    return "Hello $name";
});

Route::get('string/{string?}', function ($string = 'String') {
    return $string;
})->where('string', "[A-Za-z]+");

Route::get('contactanos', ['as' => 'contacto', function () {
    return 'Hello Contacto';
}])->where('string', "[A-Za-z]+");

Route::get('world', ['as' => 'world', function(){
  return view('world');
}]);