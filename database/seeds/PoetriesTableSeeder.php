<?php

use Illuminate\Database\Seeder;

class PoetriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Poetry::class, 5)->create();
    }
}
