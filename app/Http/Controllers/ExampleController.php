<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;


class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function generateKey(){
        return Str::random(32);
    }

    public function fooExample(){
        return 'foo post';
    }

    public function getUser($id){
        return 'User '.$id;    
    }

    //
}
