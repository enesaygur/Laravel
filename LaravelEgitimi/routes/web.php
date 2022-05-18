<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/deneme',function (){
    return view('ornek');
});
Route::get("/test/{isim}", [Ornek::class,"test"]);
