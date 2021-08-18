<?php
namespace App\Http\Controllers;

use App\Models\Renungan;
use Exception;
use Illuminate\Http\Request;

class RenunganController extends Controller{
    public function __construct()
    {}

    public function get()
    {
        try{
            $data = Renungan::get();
            return response()->json(
                [
                    'status' => "Berhasil ambil data Renungan",
                    'data' => $data,
                ]
            );
        }catch(Exception $e){
            echo $e;
        }
    }

    public function getId($id_admin)
    {
        if($id_admin){
            // $renungan = Renungan::find($id_admin);
            $renungan = Renungan::where('id_user', $id_admin)->get();

            if($renungan){
                try{
                    return response()->json(
                        [
                            'status' => "Berhasil ambil data Renungan",
                            'data' => $renungan,
                        ]
                    );
                }catch(Exception $e){
                    echo $e;
                }
            }else{
                return response()->json(
                    [
                        'status' => "Id Tidak Ditemukan",
                        'data' => null,
                    ]
                );
            }
        }else{
            return response()->json(
                [
                    'status' => "Renungan Tidak Ditemukan",
                    'data' => null,
                ]
            );
        }
        
    }

    public function add(Request $request)
    {
        $this->validate(
            $request, [
                'id_user' => 'required',
                'judul' => 'required',
                'isi_renungan' => 'required',
            ]
        );

        try{
            $isi_renungan = $request->isi_renungan;
            $judul = $request->judul;
            $id_user = $request->id_user;
    
            $add = Renungan::create([
                'id_user' => $id_user,
                'judul'   => $judul,
                'isi_renungan' => $isi_renungan
            ]);
    
            if ($add) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Menambah Renungan",
                    'data' => $add,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Menambah Renungan",
                    'data' => null,
                ]);
            } 
        }catch(Exception $e){
            echo $e;
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'id_user'       =>  'required',
                'judul'         =>  'required',
                'isi_renungan'  =>  'required'
            ]
        );

        $id_user = $request->id_user;
        $judul = $request->judul;
        $isi_renungan = $request->isi_renungan;

        $renungan = Renungan::find($id);

        if ($renungan) {
            $update = $renungan->update([
                'id_user' => $id_user,
                'judul' => $judul,
                'isi_renungan' => $isi_renungan
            ]);

            if ($update) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Mengubah Renungan",
                    'data' => $renungan,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Mengubah Renungan",
                    'data' => null,
                ]);
            }
        } else {
            return response()->json([
                'status' => "Renungan tidak ditemukan",
                'data' => null,
            ]);
        }
    }

    public function delete($id)
    {
        $renungan = Renungan::find($id);

        if ($renungan) {
            $delete = $renungan->delete();

            if ($delete) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Menghapus Renungan",
                    'data' => $renungan,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Menghapus Renungan",
                    'data' => null,
                ]);
            }
        } else {
            return response()->json([
                'status' => "Renungan tidak ditemukan",
                'data' => null,
            ]);
        }
    }
}