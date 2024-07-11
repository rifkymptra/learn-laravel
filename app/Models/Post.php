<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-post-pertama',
                'title' => 'Judul Post Pertama',
                'author' => 'Rifky Maulana Putra',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam repellendus illo, provident velit qui dolore
                illum fugiat debitis! Dicta, odit. Architecto ad sunt laboriosam quas nam corrupti cumque nulla officia
                ducimus impedit? Ullam harum nostrum eaque! Quaerat voluptates tempore laudantium nihil nostrum explicabo
                error excepturi placeat praesentium sed. Exercitationem natus quisquam aspernatur cum dolor, sunt tempore
                iste a impedit aut rerum minus eos commodi officiis nemo quae consectetur sed sequi quo voluptatibus numquam
                consequuntur illum. Eos cumque quas ex iusto odit nemo vel perferendis hic similique animi, corporis sit.
                Quisquam, quasi dolore quaerat repellat quis iusto ut assumenda placeat. Obcaecati!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-post-kedua',
                'title' => 'Judul Post Kedua',
                'author' => 'Putra Rifky Maulana',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum fugiat, molestiae dolor sed aliquam,
                nesciunt doloremque voluptas ducimus velit maxime id tenetur neque consectetur veritatis, officia
                perferendis totam itaque enim ullam similique recusandae quis vitae laudantium doloribus? Porro veritatis
                minima numquam est, cupiditate error voluptatum ipsam. Ipsum tenetur nulla eligendi totam. Velit aut dolor
                magni ad laboriosam similique, quasi minima voluptatibus labore ut sequi deserunt, ex veritatis amet rerum,
                quisquam odit cupiditate earum? Dolor, rem? Nihil, veritatis voluptatibus dicta adipisci iste sed dolor
                nesciunt aperiam, quo doloremque alias aspernatur perspiciatis natus. Voluptatem pariatur cumque sapiente
                consequatur sequi corrupti placeat veniam!'
            ]
        ];
    }

    public static function find($slug): array
    {
        $posts = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] === $slug;
        });

        if (!$posts) {
            abort(404);
        } else {
            return $posts;
        }

        // cara kedua:
        // return Arr::first(static::all(), fn ($post) => $post['slug'] === $slug);
    }
}
