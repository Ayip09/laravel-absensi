<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "M Iktafal Ma'arif",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium vitae consectetur accusamus? Dolorem odit quod ipsam maxime placeat incidunt laborum velit natus quam ad enim asperiores voluptatibus amet neque praesentium, expedita est cumque optio distinctio consequatur. Quas, tempora autem! Laudantium eveniet nesciunt quasi, illo pariatur eius vitae deleniti ipsa quibusdam culpa nulla commodi deserunt facere? Voluptatem ab expedita culpa aliquid. Libero perferendis perspiciatis esse delectus labore adipisci quo laboriosam ut velit cupiditate consequatur nulla, quasi quae. Necessitatibus natus delectus soluta?"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Pratama Ardy",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate error quasi dolores maxime sit quisquam rerum sapiente ipsam, ullam consequuntur possimus quis eligendi, rem aspernatur alias perspiciatis voluptates ducimus, commodi quaerat minus! Nemo omnis reprehenderit aut soluta ducimus amet inventore dicta tempore laboriosam, voluptates modi praesentium ad, a saepe vel, quasi laborum accusamus tempora eveniet. Omnis consequatur corrupti distinctio reiciendis recusandae, alias ullam cum, quasi minus consequuntur provident, numquam corporis magni doloribus possimus ut molestias dolorem molestiae dolore laborum eos similique! Voluptate rem inventore magni veritatis, doloremque, vero dolore nam dicta voluptatibus quidem laboriosam itaque reprehenderit maxime illum quo blanditiis."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = []; 
        foreach($posts as $p){
            if ($p["slug"] === $slug){
                $post = $p;
            }
        }
        return $post;
    }
}
