<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::factory(5)->create();

        User::create([
            'name' => 'Ivan Antony',
            'username' => 'Shutte',
            'email' => 'ivan22002@mail.unpad.ac.id',
            'password' => bcrypt('CrzShutte1'),
        ]);

        // User::create([
        //     'name' => 'Junaedi',
        //     'email' => 'Junaedi25001@mail.uni.ac.id',
        //     'password' => bcrypt('12345678'),
        // ]);

        Category::create([
            'name' => 'Achievements',
            'slug' => 'achievements',
        ]);

        Category::create([
            'name' => 'Activities',
            'slug' => 'activities',
        ]);
        
        Category::create([
            'name' => 'Delegation',
            'slug' => 'delegation',
        ]);

        Post::factory(20)->create();
    }
}
