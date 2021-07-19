<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'Tommy',
                'email' => 'tommy@yopmail.com',
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
