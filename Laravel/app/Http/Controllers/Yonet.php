<?php

namespace App\Http\Controllers;


class Yonet extends Controller
{
    public function site()
    {
        $data["yazi1"]="PHP Türkiye";
        $data["yazi2"]="Web Sitemize Hoş Geldiniz.";
        $data["yazi3"]="Hizmetlerimiz";
        $data["yazi4"]="Web tasarım ve yazılım hizmetlerimiz";
        $data["yazi5"]="Bize Ulaşın";
        return view('web',$data);
    }
}
