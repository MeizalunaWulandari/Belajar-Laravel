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
            'name' => 'Meizaluna Wulandari',
            'email' => 'meluna@gmail.com',
            'password' => bcrypt('1sampai8')
        ]);

        User::create([
            'name' => 'Muhammad Rifandi',
            'email' => 'rifandi424@gmail.com',
            'password' => bcrypt('1sampai8')
        ]);

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'Web-Progamming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur excepturi totam, nesciunt. Sit, modi, necessitatibus!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id quod quisquam tenetur aperiam dolore doloribus eligendi rem nisi veniam, nemo sint quae quaerat. Magnam magni molestias dolorem quam reiciendis maiores. Sequi alias omnis autem distinctio corrupti earum quas, reprehenderit fugit et aliquam iure, dignissimos ea cum, accusantium, nostrum ullam accusamus reiciendis. Quas sapiente nam recusandae error alias eligendi iste odit atque ullam accusamus, sit libero nihil unde, numquam modi aliquid? Cum temporibus corrupti quasi neque eius iure repellat provident ea, quibusdam aperiam accusamus tempore repellendus animi sequi repudiandae fuga perferendis facilis nostrum delectus, maiores aut recusandae nemo nam ipsum. Iste quidem molestiae pariatur modi veniam consectetur eius non, voluptas, sapiente ipsa laborum. Similique rerum consequatur expedita distinctio, totam perferendis dolor vero eos, iusto neque error tenetur labore quasi cumque! Molestias dolorum fuga amet beatae quod. Minima, aliquam consequuntur voluptates deserunt iure, sit fugit quibusdam aperiam qui quaerat eos quia totam quas, repudiandae. Odio natus, harum architecto quasi, nam vitae earum veritatis, dolores rerum, pariatur expedita in id nulla eaque! Assumenda, est. Distinctio impedit itaque inventore, accusantium, qui dolores laborum, atque sed reprehenderit veniam officia et quas vitae quisquam iure! Nemo quidem ea saepe, dolores officiis quibusdam corrupti natus quaerat dolore.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur excepturi totam, nesciunt. Sit, modi, necessitatibus!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id quod quisquam tenetur aperiam dolore doloribus eligendi rem nisi veniam, nemo sint quae quaerat. Magnam magni molestias dolorem quam reiciendis maiores. Sequi alias omnis autem distinctio corrupti earum quas, reprehenderit fugit et aliquam iure, dignissimos ea cum, accusantium, nostrum ullam accusamus reiciendis. Quas sapiente nam recusandae error alias eligendi iste odit atque ullam accusamus, sit libero nihil unde, numquam modi aliquid? Cum temporibus corrupti quasi neque eius iure repellat provident ea, quibusdam aperiam accusamus tempore repellendus animi sequi repudiandae fuga perferendis facilis nostrum delectus, maiores aut recusandae nemo nam ipsum. Iste quidem molestiae pariatur modi veniam consectetur eius non, voluptas, sapiente ipsa laborum. Similique rerum consequatur expedita distinctio, totam perferendis dolor vero eos, iusto neque error tenetur labore quasi cumque! Molestias dolorum fuga amet beatae quod. Minima, aliquam consequuntur voluptates deserunt iure, sit fugit quibusdam aperiam qui quaerat eos quia totam quas, repudiandae. Odio natus, harum architecto quasi, nam vitae earum veritatis, dolores rerum, pariatur expedita in id nulla eaque! Assumenda, est. Distinctio impedit itaque inventore, accusantium, qui dolores laborum, atque sed reprehenderit veniam officia et quas vitae quisquam iure! Nemo quidem ea saepe, dolores officiis quibusdam corrupti natus quaerat dolore.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur excepturi totam, nesciunt. Sit, modi, necessitatibus!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id quod quisquam tenetur aperiam dolore doloribus eligendi rem nisi veniam, nemo sint quae quaerat. Magnam magni molestias dolorem quam reiciendis maiores. Sequi alias omnis autem distinctio corrupti earum quas, reprehenderit fugit et aliquam iure, dignissimos ea cum, accusantium, nostrum ullam accusamus reiciendis. Quas sapiente nam recusandae error alias eligendi iste odit atque ullam accusamus, sit libero nihil unde, numquam modi aliquid? Cum temporibus corrupti quasi neque eius iure repellat provident ea, quibusdam aperiam accusamus tempore repellendus animi sequi repudiandae fuga perferendis facilis nostrum delectus, maiores aut recusandae nemo nam ipsum. Iste quidem molestiae pariatur modi veniam consectetur eius non, voluptas, sapiente ipsa laborum. Similique rerum consequatur expedita distinctio, totam perferendis dolor vero eos, iusto neque error tenetur labore quasi cumque! Molestias dolorum fuga amet beatae quod. Minima, aliquam consequuntur voluptates deserunt iure, sit fugit quibusdam aperiam qui quaerat eos quia totam quas, repudiandae. Odio natus, harum architecto quasi, nam vitae earum veritatis, dolores rerum, pariatur expedita in id nulla eaque! Assumenda, est. Distinctio impedit itaque inventore, accusantium, qui dolores laborum, atque sed reprehenderit veniam officia et quas vitae quisquam iure! Nemo quidem ea saepe, dolores officiis quibusdam corrupti natus quaerat dolore.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur excepturi totam, nesciunt. Sit, modi, necessitatibus!',
            'body' => 'Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Id quod quisquam tenetur aperiam dolore doloribus eligendi rem nisi veniam, nemo sint quae quaerat. Magnam magni molestias dolorem quam reiciendis maiores. Sequi alias omnis autem distinctio corrupti earum quas, reprehenderit fugit et aliquam iure, dignissimos ea cum, accusantium, nostrum ullam accusamus reiciendis. Quas sapiente nam recusandae error alias eligendi iste odit atque ullam accusamus, sit libero nihil unde, numquam modi aliquid? Cum temporibus corrupti quasi neque eius iure repellat provident ea, quibusdam aperiam accusamus tempore repellendus animi sequi repudiandae fuga perferendis facilis nostrum delectus, maiores aut recusandae nemo nam ipsum. Iste quidem molestiae pariatur modi veniam consectetur eius non, voluptas, sapiente ipsa laborum. Similique rerum consequatur expedita distinctio, totam perferendis dolor vero eos, iusto neque error tenetur labore quasi cumque! Molestias dolorum fuga amet beatae quod. Minima, aliquam consequuntur voluptates deserunt iure, sit fugit quibusdam aperiam qui quaerat eos quia totam quas, repudiandae. Odio natus, harum architecto quasi, nam vitae earum veritatis, dolores rerum, pariatur expedita in id nulla eaque! Assumenda, est. Distinctio impedit itaque inventore, accusantium, qui dolores laborum, atque sed reprehenderit veniam officia et quas vitae quisquam iure! Nemo quidem ea saepe, dolores officiis quibusdam corrupti natus quaerat dolore.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
