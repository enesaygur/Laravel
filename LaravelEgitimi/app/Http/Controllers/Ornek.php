<?php

namespace App\Http\Controllers;

class Ornek extends Controller
{
    function test($isim)
    {
        return "Merhaba ".$isim;
    }
}
