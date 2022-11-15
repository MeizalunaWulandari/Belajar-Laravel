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

Post::create([
    'title' => 'Judul Post kedua',
    'slug' => 'Judul-Post-kedua',
    'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, alias omnis consequatur aperiam excepturi at hic dolor earum, explicabo in?',
    'body' => '<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Molestias obcaecati odit neque quisquam, reiciendis unde aliquid eos explicabo delectus, ratione nesciunt illum voluptate iusto itaque corporis possimus officia ipsum consequuntur adipisci illo voluptatem facere fugiat ipsam. Aliquid, facilis sapiente velit est amet dolor inventore quibusdam perferendis ea cupiditate nihil quod. Harum doloremque nesciunt repellendus hic optio ipsa consequatur temporibus cum a distinctio, animi debitis nemo similique corrupti ipsam repudiandae sequi vitae commodi quaerat quasi consequuntur aperiam saepe vero. Odio iusto, distinctio sapiente laudantium soluta consectetur aut dignissimos labore repellat eveniet. Dolores voluptatibus excepturi, sit saepe et, doloribus vero officia rem!</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At libero, explicabo beatae consequatur quod mollitia cum esse voluptates sint dignissimos, ratione, sunt velit debitis corporis rerum. Neque, dignissimos aspernatur numquam?</p>'
]);