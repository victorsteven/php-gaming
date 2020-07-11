<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    private $userData = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i < 10000; $i++) {
            $this->userData[] = [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'nickname' => Str::random(10),
                'password' => Hash::make('password'),
                'last_login' => now()->toDateTimeString(),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }

        $chunks = array_chunk($this->userData, 50);

        foreach ($chunks as $chunk) {
            User::insert($chunk);
        }
    }
}