<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Artikel extends Migration{
    
    public function up(){
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar');
            $table->text('isi');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('artikel');
    }
}