<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
// extends Model
{
   private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'author' => 'Meizaluna Wulandari',
            'slug' => 'Judul-Post-Pertama',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus debitis voluptatum possimus, a, dolorum vero tempora consequuntur, non expedita nulla, officia eos. Iusto necessitatibus eos porro ut qui ipsum perferendis odit nam natus voluptates incidunt cumque pariatur exercitationem ullam quae placeat perspiciatis sunt sapiente voluptatum consequuntur, rerum recusandae. Ipsa, illum vel? Illo cupiditate doloremque corrupti aut neque quidem quas dicta expedita obcaecati maxime exercitationem nam tempore, et adipisci autem modi dolor ab corporis excepturi rem, dolore a voluptas! Quibusdam, odio?'
        ],
        [
            'title' => 'Judul Post Kedua',
            'author' => 'Joko Widodo',
            'slug' => 'Judul-Post-Kedua',
            'body' => '
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde odit assumenda odio architecto totam vitae facilis ut aspernatur a fugit necessitatibus eaque omnis rem earum numquam molestiae, iste inventore, expedita, perspiciatis dolorem maiores corrupti cum possimus velit, quia! Consequuntur optio dignissimos sit error praesentium, voluptatibus libero modi exercitationem delectus nam corporis inventore, quasi eos at mollitia, molestias culpa, rem fuga architecto. Id, natus nobis impedit exercitationem blanditiis nam!'
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
