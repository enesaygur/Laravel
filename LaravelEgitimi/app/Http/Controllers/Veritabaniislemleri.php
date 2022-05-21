<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Veritabaniislemleri extends Controller
{
    public function ekle()
    {
        DB::table("bilgiler")->insert([
            "metin"=>"Bu örnek bir metindir."
        ]);
    }
}
