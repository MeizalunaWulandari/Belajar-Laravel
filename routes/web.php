<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
      'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Meizaluna Wulandari',
        'email' => 'luna@laravel.com',
        'image' => 'me.jpg'
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

Route::get('posts/{slug}', function($slug){
    $blog_posts = [
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

$new_post= [];
foreach ($blog_posts as $post) {
    if ($post['slug'] === $slug) {
        $new_post  =  $post;
    }
}
    return view('post',[
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});