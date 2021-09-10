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
                'nama' => 'Admin',
                'email'             =>  'admin',
                'password'          =>  'admin',
                'tentang' => 'Tekun berdoa',
                'role' => 'admin',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nama' => 'Adri',
                'email'             =>  'fcb.sinaga@gmail.com',
                'password'          =>  '123',
                'tentang' => 'Tekun berdoa',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nama' => 'Diana',
                'email' =>  'diana@gmail.com',
                'password' =>  '123',
                'tentang' => 'Tekun sekali menggambar',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);
    }
}
