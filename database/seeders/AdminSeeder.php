<?php

namespace Database\Seeders;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{ 
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Admin::insert([
            [
                'name'              =>  'Admin DoaKu',
                'email'             =>  'admin@doaku.com',
                'password'          =>  '123',
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
