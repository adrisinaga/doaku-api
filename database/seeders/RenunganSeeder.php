<?php

namespace Database\Seeders;

use App\Models\Renungan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RenunganSeeder extends Seeder
{ 
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Renungan::insert([
            [
                'id_user'           =>  '1',
                'judul'             =>  'Domba Yang Baik',
                'isi_renungan'      =>  'Saat ini sudah banyak manusia yang mulai kehilangan jati diri. Namun Tuhan tetap memberkati',
                'created_at'        =>  $now,
                'updated_at'        =>  $now
            ],
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
