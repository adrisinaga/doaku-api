<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Exception;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {}

    public function get()
    {
        $data = Artikel::get();
        return response()->json($data);
    }

    public function add(Request $request)
    {
        $this->validate(
            $request, [
                'judul' => 'required',
                'gambar' => 'file',
                'isi' => 'required',
            ]
        );

        // Upload Foto
        if ($request->hasFile('gambar')) { // Jika input foto ada isinya
            $file_test = $request->file('gambar');
            $folder = public_path('uploads');
            $file_name = $file_test->getClientOriginalName();

            try {
                $file_test->move($folder, $file_name);
            } catch (Exception $e) {
                echo $e;
            }

            $judul = $request->judul;
            $gambar = url('public/uploads'.'/'.$file_name);
            $isi = $request->isi;
        } else { // Jika input foto tidak ada isinya
            $judul = $request->judul;
            $gambar = url('public/uploads'.'/'.'default.png');
            $isi = $request->isi;
        }

        // $judul = $request->judul;
        // $gambar = 'default.png';
        // $isi = $request->isi;

        $add = Artikel::create([
            'judul' => $judul,
            'gambar' => $gambar,
            'isi' => $isi,
        ]);

        if ($add) { // Jika berhasil
            return response()->json([
                'status' => "Berhasil Menambah Artikel",
                'data' => $add,
            ]);
        } else {
            return response()->json([
                'status' => "Gagal Menambah Artikel",
                'data' => null,
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'judul' => 'required',
                'gambar' => 'required',
                'isi' => 'required',
            ]
        );

        $judul = $request->judul;
        $gambar = $request->gambar;
        $isi = $request->isi;

        $artikel = Artikel::find($id);

        if ($artikel) {
            $update = $artikel->update([
                'judul' => $judul,
                'gambar' => $gambar,
                'isi' => $isi,
            ]);

            if ($update) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Mengubah Artikel",
                    'data' => $artikel,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Mengubah Artikel",
                    'data' => null,
                ]);
            }
        } else {
            return response()->json([
                'status' => "Artikel tidak ditemukan",
                'data' => null,
            ]);
        }
    }

    public function delete($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel) {
            $delete = $artikel->delete();

            if ($delete) { // Jika berhasil
                return response()->json([
                    'status' => "Berhasil Menghapus Artikel",
                    'data' => $artikel,
                ]);
            } else {
                return response()->json([
                    'status' => "Gagal Menghapus Artikel",
                    'data' => null,
                ]);
            }
        } else {
            return response()->json([
                'status' => "Artikel tidak ditemukan",
                'data' => null,
            ]);
        }

    }
}
