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

        User::create([
            'name' => 'Meizaluna Wulandari',
            'email' => 'meiza1905@gmail.com',
            'username' => 'meiza1905',
            'password' => bcrypt('1sampai8')
        ]);

        User::create([
            'name' => 'Rizka Amelia Hasannah',
            'email' => 'rizka424@gmail.com',
            'username' => 'rizka424',
            'password' => bcrypt('1sampai8')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'Web-Programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'Web-Design'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Category::create([
            'name' => 'Games',
            'slug' => 'games'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
 
        Post::factory(10)->create();
    
    }
}
