<?php

use App\Http\Controllers\iletisim;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\ResimYukle;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/furkan', function () {
    return view('welcome');
});


Route::get('/deneme',function (){
    return view('ornek');
});
Route::get("/test/{isim}", [Ornek::class,"test"]);

Route::get('/web',[Yonet::class,'site'])->name('web');

Route::get("/form",[Formislemleri::class,'gorunum']);

Route::middleware('arakontrol')->post("/form-sonuc",[Formislemleri::class,'sonuc'])->name('sonuc');

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route::get("/sil",[Veritabaniislemleri::class,'sil']);
Route::get("/listele",[Veritabaniislemleri::class,'bilgiler']);
Route::get("/modelliste",[Modelislemleri::class,'liste']);
Route::get("/modelekle",[Modelislemleri::class,'ekle']);
Route::get("/modelupdate",[Modelislemleri::class,'guncelle']);
Route::get("/modelsil",[Modelislemleri::class,'sil']);

Route::get("/iletisim",[iletisim::class,'index']);
Route::post("/iletisim-sonuc",[iletisim::class,'ekleme'])->name('iletisim-sonuc');

Route::get('/upload',function (){
    return view('upload');
});
Route::post('/resim-ilet',[ResimYukle::class,'resimyukleme'])->name('yukle');

Route::get('/uye',function (){
    return view('uyelik');
});

Route::post('/uye-kayit',[App\Http\Controllers\Uyelikislemleri::class,'uyekayit'])->name('uyekayit');

Route::get('/tema',function (){
    return view('pages.home');
});
Route::get('/galeri',function (){
    return view('pages.galeri');
});
Route::get('/hizmetler',function (){
    return view('pages.hizmetler');
});
Route::get('/iletisim-tema',function (){
    return view('pages.iletisim');
});
Route::get('/kurumsal',function (){
    return view('pages.kurumsal');
});

Route::get('/resim',function (){
  /* $img= Image::make('php.jpg')->resize(300,300);
   $img->save("php_oran.jpg");
   return $img->response('jpg');*/
    return view('resim');
});

Route::post('/yukle',function (){
    Image::make(request()->file('resim'))->resize('300,200')->save('yeniresim.jpg');
})->name('yukle');
