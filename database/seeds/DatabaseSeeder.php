<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(UserSeeder::class);
      $this->call(GameSeeder::class);
      $this->call(VersionSeeder::class);

      $userIds      = DB::table('users')->pluck('id')->all();
      $gamesIds     = DB::table('games')->pluck('id')->all();
      $versionIds   = DB::table('versions')->pluck('id')->all();


    foreach ($gamesIds as $gamesId) 
    {
      foreach ($versionIds as $versionId) 
      {
        DB::table('game_version')->insert(
          [
            'game_id' => $gamesId,
            'version_id' => $versionId
          ]
        );
      }
    }

    foreach ((range(1, 1500)) as $index) 
    {
      DB::table('game_user')->insert(
        [
          'user_id' => $userIds[array_rand($userIds)],
          'game_id' => $gamesIds[array_rand($gamesIds)],
          'version_id' => $versionIds[array_rand($versionIds)]
        ]
      );
     }
  }
}


