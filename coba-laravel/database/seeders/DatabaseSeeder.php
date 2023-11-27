<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Anakin Skywalker',
            'username' => 'anakinskywalker',
            'email' => 'anakinskywalker@gmail.com',
            'password' => bcrypt('password')
       ]);

       // User::create([
       //     'name' => 'Luke Skywalker',
       //     'email' => 'lukeskywalker@gmail.com',
       //     'password' => bcrypt('12345')
      //  ]);

      User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

  //      Post::create([
  //          'title' => 'Judul Pertama',
  //          'slug' => 'judul-pertama',
  //          'excerpt' => 'A New Hope',
  //          'body' => 'long time a go,long time a golong time a golong time a go.</p><p>long time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong</p><p> time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a go',
  //          'category_id' => 1,
  //          'user_id' => 1
  //      ]);

  //      Post::create([
  //          'title' => 'Judul Ke Dua',
  //          'slug' => 'judul-ke-dua',
  //          'excerpt' => 'A New Hope',
  //          'body' => 'long time a go,long time a golong time a golong time a go.</p><p>long time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong</p><p> time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a go',
  //          'category_id' => 1,
  //          'user_id' => 1
  //      ]);

  //      Post::create([
  //          'title' => 'Judul Ke Tiga',
  //          'slug' => 'judul-ke-tiga',
  //          'excerpt' => 'A New Hope',
  //          'body' => 'long time a go,long time a golong time a golong time a go.</p><p>long time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong</p><p> time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a go',
  //          'category_id' => 2,
  //          'user_id' => 1
  //      ]);

  //      Post::create([
  //          'title' => 'Judul Ke Empat',
  //          'slug' => 'judul-ke-empat',
  //          'excerpt' => 'A New Hope',
  //          'body' => 'long time a go,long time a golong time a golong time a go.</p><p>long time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong</p><p> time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a golong time a go',
  //          'category_id' => 2,
  //          'user_id' => 2
  //      ]);
    }
}
