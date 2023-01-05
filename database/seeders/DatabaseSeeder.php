<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'Web-Progamming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
 
        Post::factory(20)->create();
    
    }
}
