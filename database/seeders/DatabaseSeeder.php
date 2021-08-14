<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtikelSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(DoaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
