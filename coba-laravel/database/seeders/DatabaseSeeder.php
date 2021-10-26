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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Alban Sukalbu',
            'email' => 'albansukalbu@gmail.com',
            'Password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Dody Mulyadi',
            'email' => 'dodymulyadi@gmail.com',
            'Password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam, maxime corrupti a labore velit praesentium ex earum sit ad, officia molestiae laudantium cupiditate aliquid eaque, ipsa sapiente alias fuga. Quibusdam, corporis quam explicabo minima aut sint distinctio, fugit repellat a perspiciatis reprehenderit, nisi iure neque dolores quasi? Aspernatur suscipit odio maiores dolores blanditiis est fuga explicabo corrupti, eveniet debitis fugit laboriosam laborum voluptatem nihil architecto. Aut, perferendis debitis. Fugit molestias nesciunt quod laboriosam praesentium veniam totam ipsam asperiores.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam, maxime corrupti a labore velit praesentium ex earum sit ad, officia molestiae laudantium cupiditate aliquid eaque, ipsa sapiente alias fuga. Quibusdam, corporis quam explicabo minima aut sint distinctio, fugit repellat a perspiciatis reprehenderit, nisi iure neque dolores quasi? Aspernatur suscipit odio maiores dolores blanditiis est fuga explicabo corrupti, eveniet debitis fugit laboriosam laborum voluptatem nihil architecto. Aut, perferendis debitis. Fugit molestias nesciunt quod laboriosam praesentium veniam totam ipsam asperiores.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam, maxime corrupti a labore velit praesentium ex earum sit ad, officia molestiae laudantium cupiditate aliquid eaque, ipsa sapiente alias fuga. Quibusdam, corporis quam explicabo minima aut sint distinctio, fugit repellat a perspiciatis reprehenderit, nisi iure neque dolores quasi? Aspernatur suscipit odio maiores dolores blanditiis est fuga explicabo corrupti, eveniet debitis fugit laboriosam laborum voluptatem nihil architecto. Aut, perferendis debitis. Fugit molestias nesciunt quod laboriosam praesentium veniam totam ipsam asperiores.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => '
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet impedit sapiente modi molestiae nam animi, blanditiis velit quis dolorem nemo ea placeat ratione quas nisi iusto quia ad voluptatibus similique! Veniam, maxime corrupti a labore velit praesentium ex earum sit ad, officia molestiae laudantium cupiditate aliquid eaque, ipsa sapiente alias fuga. Quibusdam, corporis quam explicabo minima aut sint distinctio, fugit repellat a perspiciatis reprehenderit, nisi iure neque dolores quasi? Aspernatur suscipit odio maiores dolores blanditiis est fuga explicabo corrupti, eveniet debitis fugit laboriosam laborum voluptatem nihil architecto. Aut, perferendis debitis. Fugit molestias nesciunt quod laboriosam praesentium veniam totam ipsam asperiores.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
