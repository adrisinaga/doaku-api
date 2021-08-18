<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Renungan extends Migration{
    
    public function up(){
        Schema::create('renungan', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('judul');
            $table->text('isi_renungan');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('renungan');
    }
}