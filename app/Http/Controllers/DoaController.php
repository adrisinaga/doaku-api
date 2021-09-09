<?php

namespace App\Http\Controllers;

use App\Models\Doa;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;

class DoaController extends Controller
{
    public function __construct()
    { }

    public function get()
    {
        try {

            $data = Doa::select('doa.id', 'doa.isi_doa', 'doa.jumlah_orang_berdoa','user.nama','doa.created_at','doa.updated_at')
                ->join('user','user.id','=','doa.id_user')
                ->get();
            // $data['user'] = User::find($id_user);

            // $data['doa'] = Doa::get(
            //     [   
            //         'id',
            //         'isi_doa',
            //         'jumlah_orang_berdoa',
            //     ]
            // );

            // $data = Doa::get();
            return response()->json(
                [
                    'status' => "Berhasil ambil data Doa",
                    'data' => $data,
                ]
            );
           
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function add(Request $request)
    {
        $this->validate(
            $request,
            [
                'isi_doa' => 'required',
                'id_user' => 'required',
            ]
        );

        try {
            $isi_doa = $request->isi_doa;
            $id_user = $request->id_user;
            $jumlah_orang_berdoa = '0';

            $add = Doa::create([
                'isi_doa' => $isi_doa,
                'id_user' => $id_user,
                'jumlah_orang_berdoa' => $jumlah_orang_berdoa,
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
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function delete($id)
    {
        $doa = Doa::find($id);

        if ($doa) {
            $delete = $doa->delete();

            if ($delete) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Menghapus Doa",
                    'data' => $doa,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Menghapus Doa",
                    'data' => null,
                ]);
            }
        } else {
            return response()->json([
                'status' => "Doa tidak ditemukan",
                'data' => null,
            ]);
        }
    }

    public function berdoa(Request $request)
    {
        $this->validate(
            $request,
            [
                'id_doa'          =>  'required',
                'id_user'         =>  'required',
            ]
        );

        $id_doa = $request->id_doa;
        $id_user = $request->id_user;

        $doa = Doa::find($id_doa);

        if ($doa) {
            $total_jumlah = $doa->jumlah_orang_berdoa;
            $total_doa = $total_jumlah + 1;

            $update = $doa->update([
                'jumlah_orang_berdoa' => $total_doa,
            ]);

            if ($update) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Mengubah Renungan",
                    'data' => $doa,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Mengubah Renungan",
                    'data' => null,
                ]);
            }
        } else {
            return response()->json([
                'status' => "Doa tidak ditemukan",
                'data' => null,
            ]);
        }
    }
}
