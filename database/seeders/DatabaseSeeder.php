<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  \App\Models\User;
use  \App\Models\Category;
use  \App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name'=>'M. Zahran Yudha',
            'username'=>'zahran02',
            'email'=>'muhammadzahran02@gmail.com',
            'password'=> bcrypt('12345'),
            'is_admin'=>1
        ]);
        // User::create([
        //     'name'=>'Mancek',
        //     'email'=>'Mancek@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Web Desain',
            'slug'=>'web-desain'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at,',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at, placeat magnam aut dolorum alias cupiditate quae exercitationem earum iusto rerum nam dolores culpa ad maiores. Asperiores nemo fugit officia cupiditate maxime quam excepturi cumque voluptas. Tempora omnis vel sapiente suscipit cum ratione, sit dolorem accusamus alias ut eligendi necessitatibus quas dolores voluptatibus asperiores fugiat maxime? Ex voluptates maiores id quam labore quasi cum reiciendis et, saepe nulla illo at odit deleniti sint perspiciatis atque eligendi modi animi ipsam quod rerum ut impedit asperiores repudiandae. Cumque deserunt voluptate dolores quidem tempore molestias iusto eius, nulla officiis sapiente quos placeat tenetur commodi assumenda impedit illum voluptas facere dolorum ipsam maiores!',
        //     'category_id'=>1,
        //     'user_id'=>1,
        // ]);
        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at,',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at, placeat magnam aut dolorum alias cupiditate quae exercitationem earum iusto rerum nam dolores culpa ad maiores. Asperiores nemo fugit officia cupiditate maxime quam excepturi cumque voluptas. Tempora omnis vel sapiente suscipit cum ratione, sit dolorem accusamus alias ut eligendi necessitatibus quas dolores voluptatibus asperiores fugiat maxime? Ex voluptates maiores id quam labore quasi cum reiciendis et, saepe nulla illo at odit deleniti sint perspiciatis atque eligendi modi animi ipsam quod rerum ut impedit asperiores repudiandae. Cumque deserunt voluptate dolores quidem tempore molestias iusto eius, nulla officiis sapiente quos placeat tenetur commodi assumenda impedit illum voluptas facere dolorum ipsam maiores!',
        //     'category_id'=>1,
        //     'user_id'=>1,
        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at,',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at, placeat magnam aut dolorum alias cupiditate quae exercitationem earum iusto rerum nam dolores culpa ad maiores. Asperiores nemo fugit officia cupiditate maxime quam excepturi cumque voluptas. Tempora omnis vel sapiente suscipit cum ratione, sit dolorem accusamus alias ut eligendi necessitatibus quas dolores voluptatibus asperiores fugiat maxime? Ex voluptates maiores id quam labore quasi cum reiciendis et, saepe nulla illo at odit deleniti sint perspiciatis atque eligendi modi animi ipsam quod rerum ut impedit asperiores repudiandae. Cumque deserunt voluptate dolores quidem tempore molestias iusto eius, nulla officiis sapiente quos placeat tenetur commodi assumenda impedit illum voluptas facere dolorum ipsam maiores!',
        //     'category_id'=>3,
        //     'user_id'=>1,
        // ]);
        // Post::create([
        //     'title'=>'Judul Ke Empat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at,',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum sed recusandae nobis nemo explicabo tenetur corporis sequi quia incidunt fugiat at, placeat magnam aut dolorum alias cupiditate quae exercitationem earum iusto rerum nam dolores culpa ad maiores. Asperiores nemo fugit officia cupiditate maxime quam excepturi cumque voluptas. Tempora omnis vel sapiente suscipit cum ratione, sit dolorem accusamus alias ut eligendi necessitatibus quas dolores voluptatibus asperiores fugiat maxime? Ex voluptates maiores id quam labore quasi cum reiciendis et, saepe nulla illo at odit deleniti sint perspiciatis atque eligendi modi animi ipsam quod rerum ut impedit asperiores repudiandae. Cumque deserunt voluptate dolores quidem tempore molestias iusto eius, nulla officiis sapiente quos placeat tenetur commodi assumenda impedit illum voluptas facere dolorum ipsam maiores!',
        //     'category_id'=>2,
        //     'user_id'=>2,
        // ]);
    }
}
