<?php

use Illuminate\Support\Facades\Route;



// //Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return 'hello World';
});
Route::get('react', function () {
    return view('welcome'); 
});

