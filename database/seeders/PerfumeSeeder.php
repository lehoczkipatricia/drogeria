<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PerfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("perfumes")->insert([
            "name" => "Retro Smell",
            "type" => "sweet",
            "price" => 200000
        ]);
        DB::table("perfumes")->insert([
            "name" => "Facelle",
            "type" => "sweet",
            "price" => 15000
        ]);
        DB::table("perfumes")->insert([
            "name" => "Yume",
            "type" => "weird",
            "price" => 25000
        ]);
        DB::table("perfumes")->insert([
            "name" => "Gucci Good",
            "type" => "stinky",
            "price" => 600000
        ]);
        DB::table("perfumes")->insert([
            "name" => "Ariana Grande no ioi",
            "type" => "sweet",
            "price" => 40000
        ]);
    }
}
