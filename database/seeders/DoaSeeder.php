<?php

namespace Database\Seeders;

use App\Models\Doa;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DoaSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        Doa::insert([
            [
                'isi_doa' => 'Ya Tuhan, selamatkanlah kami.', 
                'id_user' => '1',
                'jumlah_orang_berdoa' => '2',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
            [
                'isi_doa' => 'Doakanlah Kami ya Tuhan', 
                'id_user' => '1',
                'jumlah_orang_berdoa' => '2',
                'created_at' => $now, 
                'updated_at' => $now,
            ],
        ]);
    }
}
