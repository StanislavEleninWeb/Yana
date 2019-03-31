<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call([
    		UsersTableSeeder::class,
            RolesTableSeeder::class,
            PositionsTableSeeder::class,
            CategoriesTableSeeder::class,
            ImagesTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,
            PoetriesTableSeeder::class,
            GalleriesTableSeeder::class,
            VideosTableSeeder::class,
            CommentsTableSeeder::class,
    	]);
    }
}
