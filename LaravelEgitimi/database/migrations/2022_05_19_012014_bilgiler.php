<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bilgiler', function (Blueprint $table) {
            $table->id();
            $table->longText("metin")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bilgiler');
    }
};
