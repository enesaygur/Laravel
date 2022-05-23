<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table("bilgiler")->insert([
            "metin"=>"Bu 3. satır için örnek bir metindir."
        ]);
    }

    public function guncelle()
    {
        DB::table("bilgiler")->where("id",1)->update([
            "metin"=>"Bu metin güncellendi."
        ]);
    }

    public function sil()
    {
        DB::table("bilgiler")->where("id",1)->delete();
    }

    public function bilgiler()
    {
        $veriler=DB::table("bilgiler")->get();

        foreach ($veriler as $key => $bilgi)
        {
            echo $bilgi->id." - ".$bilgi->metin;
            echo "<br>";
        }
    }
}
