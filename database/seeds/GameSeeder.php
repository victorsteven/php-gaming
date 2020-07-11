<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('games')->insert([
        [
          "name" => "Call of Duty",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "Mortal Kombat",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "FIFA",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "Just Cause",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
        [
          "name" => "Apex Legend",
          'created_at' => now()->toDateTimeString(),
          'updated_at' => now()->toDateTimeString(),
        ],
      ]);
    }
}
