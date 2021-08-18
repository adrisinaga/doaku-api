<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;

class AdminController extends Controller{
    public function __construct()
    {}

    public function getId($id_admin)
    {
        $admin = Admin::find($id_admin);
        if($admin){
            try{
                $data = Admin::get();
                return response()->json(
                    [
                        'status' => "Berhasil ambil data Admin",
                        'data' => $data,
                    ]
                );
            }catch(Exception $e){
                echo $e;
            }
        }else{
            return response()->json(
                [
                    'status' => "Admin tidak ditemukan",
                    'data' => null,
                ]
            );
        }
        
    }
}