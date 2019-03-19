<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(range(10,20)),
            'email' => Str::random(range(10,20)).'@gmail.com',
            'password' => bcrypt('secret')
        ]);
    }
}
