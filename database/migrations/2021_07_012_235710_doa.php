<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Doa extends Migration{
    
    public function up(){
        Schema::create('doa', function (Blueprint $table) {
            $table->id();
            $table->text('isi_doa');
            $table->string('id_user');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('doa');
    }
}