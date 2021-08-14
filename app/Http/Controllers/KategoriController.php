<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;


class KategoriController extends Controller{

    public function __construct(){}

    public function get(){
        $data = Kategori::get();
        return response()->json($data);
    }
}