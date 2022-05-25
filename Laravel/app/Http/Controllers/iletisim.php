<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iletisimmodel;
class iletisim extends Controller
{
    public  function index()
    {
        return view("iletisim");
    }

    public function ekleme(Request $request)
    {
        echo $adsoyad=$request->adsoyad;
        echo "<br>";
        echo $telefon=$request->telefon;
        echo "<br>";
        echo $mail=$request->mail;
        echo "<br>";
        echo $metin=$request->metin;

        Iletisimmodel::create([
            "adsoyad"=>$adsoyad,
            "telefon"=>$telefon,
            "mail"=>$mail,
            "metin"=>$metin,
        ]);
    }
}
