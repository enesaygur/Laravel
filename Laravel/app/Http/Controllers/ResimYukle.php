<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukle extends Controller
{
    public function resimyukleme(Request $request)
    {
        echo $request->resim->getClientOriginalName(); // upload yapılan resmin adını almak için kullanılıyor.
        echo "<br>";
        echo $request->resim->getClientOriginalExtension(); // upload yapılan resmin uzantısını almak için kullanılıyor.
        //$resimadi=rand(0,1000).".".$request->resim->getClientOriginalExtension();
        $yukle=$request->resim->move(public_path('images'),$request->resim->getClientOriginalName());


    }
}
