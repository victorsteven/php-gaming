<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('versions')->insert([
        [
        "name" => "2010",
        'created_at' => now()->toDateTimeString(),
        'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2011",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2012",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2013",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2014",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2015",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2016",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2017",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2018",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2019",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "2020",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
      ]);
    }
}
