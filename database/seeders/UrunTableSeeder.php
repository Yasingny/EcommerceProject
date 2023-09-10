<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("urun")->insert([
            'urun_adi'=> "velı",
            'fiyati'=>rand(10,99)/10
        ]);
    }
}
