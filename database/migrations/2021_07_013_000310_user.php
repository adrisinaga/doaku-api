<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration{
    
    public function up(){
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email',20);
            $table->string('password',50);
            $table->string('tentang');
            $table->string('role',20);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('user');
    }
}