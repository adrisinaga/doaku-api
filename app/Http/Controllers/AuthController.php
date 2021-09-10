<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function __construct()
    { }

    public function login(Request $request)
    {
        $this->validate(
            $request,
            [
                'email'          =>  'required',
                'password'         =>  'required',
            ]
        );

        $email = $request->email;
        $password = $request->password;

        $auth = DB::table('user')
            ->where([
                ['email', '=', $email],
                ['password', '=', $password]
            ])
            ->get();


        if (count($auth) > 0) {
            return response()->json(
                [
                    'status' => "Berhasil login",
                    'data' => $auth,
                ]
            );
        } else {
            return response()->json(
                [
                    'status' => "Email dan password tidak cocok",
                    'data' => [],
                ]
            );
        }
    }

    public function register(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama'          =>  'required',
                'email'          =>  'required',
                'password'         =>  'required',
                'tentang'          =>  'required',
            ]
        );

        try{
            $nama = $request->nama;
            $email = $request->email;
            $password = $request->password;
            $tentang = $request->tentang;
    
            $insert = User::firstOrCreate([
                'nama' => $nama,
                'email' => $email,
                'password' => $password,
                'tentang' => $tentang,
            ]);
    
            if ($insert) {
                return response()->json(
                    [
                        'status' => "Berhasil register",
                        'data' => $insert,
                    ]
                );
            } else {
                return response()->json(
                    [
                        'status' => "Gagal register",
                        'data' => $insert,
                    ]
                );
            }
        }catch(Exception $e){
            echo $e;
        }
        
    }
}
