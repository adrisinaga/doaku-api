<?php
namespace App\Http\Controllers;

use App\Models\User;
use Exception;

class UserController extends Controller{
    public function __construct()
    {}

    public function getId($id_user)
    {
        $id_user = User::find($id_user);
        if($id_user){
            try{
                $data = User::get();
                return response()->json(
                    [
                        'status' => "Berhasil ambil data User",
                        'data' => $data,
                    ]
                );
            }catch(Exception $e){
                echo $e;
            }
        }else{
            return response()->json(
                [
                    'status' => "User tidak ditemukan",
                    'data' => null,
                ]
            );
        }
        
    }
}