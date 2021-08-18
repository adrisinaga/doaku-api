<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration{
    
    public function up(){
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',20);
            $table->string('password',50);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('admin');
    }
}