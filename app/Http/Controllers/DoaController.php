<?php
namespace App\Http\Controllers;

use App\Models\Doa;
use Exception;
use Illuminate\Http\Request;


class DoaController extends Controller{
    public function __construct()
    {}

    public function get()
    {
        try{
            $data = Doa::get();
            return response()->json(
                [
                    'status' => "Berhasil ambil data Doa",
                    'data' => $data,
                ]
            );
        }catch(Exception $e){
            echo $e;
        }
    }

    public function add(Request $request)
    {
        $this->validate(
            $request, [
                'isi_doa' => 'required',
                'id_user' => 'required'
            ]
        );

        try{
            $isi_doa = $request->isi_doa;
            $id_user = $request->id_user;
    
            $add = Doa::create([
                'isi_doa' => $isi_doa,
                'id_user' => $id_user,
            ]);
    
            if ($add) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Menambah Doa",
                    'data' => $add,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Menambah Doa",
                    'data' => null,
                ]);
            } 
        }catch(Exception $e){
            echo $e;
        }
    }
}