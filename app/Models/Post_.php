<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Tulisan Akbar babi",
        "slug"  => "judul-post-pertama",
        "author" => "Akbar",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident cupiditate cum maiores fuga rerum blanditiis, sunt, nostrum, perspiciatis veritatis voluptate voluptatem dolorem porro sint. Voluptatum nisi quae quidem autem nemo. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis doloribus nam tenetur dolorem, perferendis dolore sed magnam exercitationem! Fugit voluptatem at est sed accusamus quas distinctio, a corporis sunt similique. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis placeat quibusdam pariatur animi iure explicabo natus sint repudiandae consequatur labore sequi, temporibus, mollitia ad! Facilis, reprehenderit. Libero perferendis quidem aut?"
    ],
    [
        "title" => "Judul Tulisan Arief",
        "slug"  => "judul-post-kedua",
        "author" => "Muhammad Arief",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolorum est obcaecati adipisci eaque architecto quam pariatur provident laudantium cumque corporis suscipit perferendis ex perspiciatis officia hic quidem dignissimos amet, mollitia ab molestias. Et, nemo similique est voluptatem consequuntur dicta praesentium modi nobis rem culpa illo sapiente officiis voluptas maxime adipisci molestias officia dignissimos, quam tempora minima aliquid. Odio molestias ullam nesciunt repellat. Rerum autem at aliquam amet exercitationem illum nobis dolores magni quae animi? Voluptate, accusamus architecto. Consectetur porro, a ipsa quaerat cum eveniet earum explicabo amet enim odit cupiditate aperiam? Sunt eius velit maiores fugiat ea atque, nostrum quisquam accusamus et minus animi. Temporibus perspiciatis aliquid maxime et tenetur officiis iusto fugit dolore voluptatum expedita dolores aut rerum praesentium voluptate suscipit iste, sequi laborum incidunt quos id architecto quasi accusamus dolor omnis. Optio in dolorem labore aperiam pariatur blanditiis nam tempore suscipit sunt perspiciatis corporis explicabo, repellat perferendis non laboriosam velit excepturi tempora. Similique consequatur dolores explicabo iusto ipsum totam fuga eveniet exercitationem rerum perferendis, laboriosam saepe inventore vitae aperiam, distinctio eius. Molestias suscipit repellendus hic alias et velit, consectetur fugiat sequi enim ipsam nulla! Sequi adipisci dolorum sunt ipsa eum, quis doloremque, dolore iste nostrum non est."
    ]

];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
    }
}
