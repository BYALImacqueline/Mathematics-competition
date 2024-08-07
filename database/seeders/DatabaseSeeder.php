<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
            'name' => 'Byali Macqueline Leya',
            'email' => 'macklineleya@gmail.com',
            'password' => ('secret')
        ]);
    }
}
