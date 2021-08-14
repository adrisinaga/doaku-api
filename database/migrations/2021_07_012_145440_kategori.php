<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kategori extends Migration{
    
    public function up(){
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kategori');
            $table->string('icon');
            $table->string('cover');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('kategori');
    }
}