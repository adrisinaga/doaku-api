<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Artikel::insert([
            ['judul'     => 'Yeay1', 'gambar'    => 'cover.png', 'isi'       => 'Yeay1', 'created_at'=>$now,'updated_at'=>$now],
            ['judul'     => 'Yeay2', 'gambar'    => 'cover2.png', 'isi'       => 'Yeay2', 'created_at'=>$now,'updated_at'=>$now]
        ]);

        // DB::table('artikel')->insert([
        //     [
        //         'judul'     => 'Yeay1',
        //         'gambar'    => 'cover.png',
        //         'isi'       => 'Yeay1',
        //     ],
        //     [
        //         'judul'     => 'Yeay2',
        //         'gambar'    => 'cover4.png',
        //         'isi'       => 'Yeay2',
        //     ],
        // ]);
    }
}
