<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Anakin Skywalker",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime quidem maiores rerum sunt, quaerat voluptatem porro? Odit distinctio doloremque labore, suscipit sequi deserunt provident. Mollitia numquam libero maiores natus autem pariatur atque nostrum sit impedit fugit obcaecati, laborum voluptate distinctio quod, corrupti explicabo aut corporis voluptates ea eius ullam? Dolor nemo nam distinctio quam, obcaecati at quibusdam, excepturi esse dolorem molestiae officiis nobis quas atque sequi eveniet? Temporibus numquam laborum deleniti ut illo itaque earum repellat impedit error doloribus vitae in architecto et, consequatur, voluptatem magni dicta ullam? Quod explicabo, iusto ducimus illo vitae asperiores voluptates ipsam aut dolores."
         ],
         [
             "title" => "Judul Tulisan Kedua",
             "slug" => "judul-tulisan-kedua",
             "author" => "Luke Skywalker",
             "body" => "Long Time a go in a galaxy far away , rebellion build one hope , the imperial destroyer the galaxy , Luke skywalker son of anakin skywalker stand with rebbelion Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora maxime quidem maiores rerum sunt, quaerat voluptatem porro? Odit distinctio doloremque labore, suscipit sequi deserunt provident. Mollitia numquam libero maiores natus autem pariatur atque nostrum sit impedit fugit obcaecati, laborum voluptate distinctio quod, corrupti explicabo aut corporis voluptates ea eius ullam? Dolor nemo nam distinctio quam, obcaecati at quibusdam, excepturi esse dolorem molestiae officiis nobis quas atque sequi eveniet? Temporibus numquam laborum deleniti ut illo itaque earum repellat impedit error doloribus vitae in architecto et, consequatur, voluptatem magni dicta ullam? Quod explicabo, iusto ducimus illo vitae asperiores voluptates ipsam aut dolores."
         ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
