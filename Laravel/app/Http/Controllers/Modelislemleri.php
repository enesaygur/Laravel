<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bilgiler;

class Modelislemleri extends Controller
{
    public function liste()
    {
       // $bilgi=Bilgiler::where("id",2)->first();
        for($i=1; $i<4; $i++) {
            $bilgi = Bilgiler::find($i);//id ye göre bulan komut
            echo $bilgi->metin;
            echo "<br>";
        }
    }
    public function ekle()
    {
        Bilgiler::create([
            "metin"=>"Model dosyasından giriş yapıldı.",
        ]);
    }

    public function guncelle()
    {
        Bilgiler::where("id",4)->update([
            "metin"=>"Model dosyasından update yapıldı.",
        ]);
    }

    public function sil()
    {
        Bilgiler::whereId(4)->delete();
        echo "1 satır silindi";
    }
}
