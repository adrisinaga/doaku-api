<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        User::insert([
            [
                'nama' => 'Adri', 
                'tentang' => 'Tekun berdoa',
                'created_at' => $now, 
                'updated_at' => $now],
        ]);
    }
}
