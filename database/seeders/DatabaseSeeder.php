<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // user
        User::create([
            'name' => 'ilham ramadhan',
            'username' =>'hamz',
            'email' => 'ilhamputra0601@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(5)->create();

        // category
        Category::create([
            'name' => 'Programing',
            'slug' => 'programing',
         ]);

        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
         ]);
        Category::create([
            'name' => 'personal',
            'slug' => 'personal',
         ]);

         Post::factory(50)->create();

        //  post
        // Post::create([
        //     'category_id' =>1,
        //     'user_id' =>1,
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p>',
        // ]);
        // Post::create([
        //     'category_id' =>1,
        //     'user_id' =>1,
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p>',
        // ]);
        // Post::create([
        //     'category_id' =>1,
        //     'user_id' =>2,
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p>',
        // ]);
        // Post::create([
        //     'category_id' =>2,
        //     'user_id' =>1,
        //     'title' => 'judul ke empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p>',
        // ]);
        // Post::create([
        //     'category_id' =>3,
        //     'user_id' =>3,
        //     'title' => 'judul kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi molestias fugit minima nihil incidunt cumque earum sapiente exercitationem distinctio ipsam ea consequuntur cum iusto illum consectetur iure nesciunt et, vitae maxime reprehenderit neque perferendis libero. Nulla et fuga hic in neque, maxime eligendi sint illum blanditiis pariatur, culpa error tempora aut explicabo totam porro provident sed vero odio natus itaque quidem rerum accusantium! Iste error, porro dolore dolorem eum exercitationem aliquid ab, ratione earum optio ex. Aperiam nobis quod a.</p>',
        // ]);
    }
}
