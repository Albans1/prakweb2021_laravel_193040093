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
             'name' => 'Alban Sukalbu',
             'username' => 'alban',
             'email' => 'albansukalbu@gmail.com',
             'Password' => bcrypt('12345')
    ]);

    //     User::create([
    //         'name' => 'Dody Mulyadi',
    //         'email' => 'dodymulyadi@gmail.com',
    //         'Password' => bcrypt('12345')
    //     ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Textile',
            'slug' => 'textile'
        ]);

        Category::create([
            'name' => 'Belting',
            'slug' => 'belting'
        ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        Post::factory(20)->create();

    }
}
