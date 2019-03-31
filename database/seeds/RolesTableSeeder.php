<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Role::class, 2)->create();

        App\Role::create([
        	'title' => 'guest'
        ]);
        App\Role::create([
        	'title' => 'admin'
        ]);
        App\Role::create([
        	'title' => 'manager'
        ]);
        App\Role::create([
        	'title' => 'developer'
        ]);

        $roles = App\Role::all();

        App\User::All()->each(function ($user) use ($roles){
            $user->roles()->saveMany($roles);
        });
    }
}
