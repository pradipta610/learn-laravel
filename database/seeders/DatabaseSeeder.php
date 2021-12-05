<?php

namespace Database\Seeders;


use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'=> 'Pradipta Wistika',
            'username' => 'pradipta',
            'email'=>'ketut@yahoo.com',
            'password'=> bcrypt('password')
        ]);
        User::create([
            'name'=> 'Nanda Wistika',
            'username' => 'nanda',
            'email'=>'santoso@yahoo.com',
            'password'=> bcrypt('password')
        ]);
        User::create([
            'name'=> 'Natalia Wistika',
            'username' => 'natalia',
            'email'=>'Nata@yahoo.com',
            'password'=> bcrypt('password')
        ]);
        User::factory(3)->create();
        Category::create([
            'name'=>'Samsung',
            'slug'=>'samsung'
        ]);
        Category::create([
            'name'=>'Apple',
            'slug'=>'apple'
        ]);
        Category::create([
            'name'=>'Xiaomi',
            'slug'=>'xiaomi'
        ]);
        Post::factory(20)->create();

        // Post::create([
        //         'title'=>'Contoh ke 1',
        //         'category_id'=>1,
        //         'user_id'=>1,
        //         'slug'=>'Contoh-ke-1',
        //         'excerpt'=>'sta dan Yuno ditelantarkan bersama di gereja yang sama. Sebagai anak-anak, mereka berjanji bahwa mereka akan bersaing satu sama lain untuk',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p>'
        // ]);
        // Post::create([
        //         'title'=>'Contoh ke 2',
        //         'category_id'=>2,
        //         'user_id'=>2,
        //         'slug'=>'Contoh-ke-2',
        //         'excerpt'=>'sta dan Yuno ditelantarkan bersama di gereja yang sama. Sebagai anak-anak, mereka berjanji bahwa mereka akan bersaing satu sama lain untuk',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p>'
        // ]);
        // Post::create([
        //         'title'=>'Contoh ke 3',
        //         'category_id'=>3,
        //         'user_id'=>3,
        //         'slug'=>'Contoh-ke-3',
        //         'excerpt'=>'sta dan Yuno ditelantarkan bersama di gereja yang sama. Sebagai anak-anak, mereka berjanji bahwa mereka akan bersaing satu sama lain untuk',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p>'
        // ]);
        // Post::create([
        //         'title'=>'Contoh ke 4',
        //         'category_id'=>2,
        //         'user_id'=>1,
        //         'slug'=>'Contoh-ke-4',
        //         'excerpt'=>'sta dan Yuno ditelantarkan bersama di gereja yang sama. Sebagai anak-anak, mereka berjanji bahwa mereka akan bersaing satu sama lain untuk',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p>'
        // ]);
        // Post::create([
        //         'title'=>'Contoh ke 5',
        //         'category_id'=>1,
        //         'user_id'=>3,
        //         'slug'=>'Contoh-ke-5',
        //         'excerpt'=>'sta dan Yuno ditelantarkan bersama di gereja yang sama. Sebagai anak-anak, mereka berjanji bahwa mereka akan bersaing satu sama lain untuk',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nam labore necessitatibus ratione sapiente recusandae, dolore voluptate perferendis, esse voluptatum possimus amet quam tenetur aut hic. Sit error facere praesentium rerum vel qui soluta quod similique, hic ratione aspernatur, alias harum distinctio cum magni commodi enim itaque fuga dolore ipsa, laudantium deleniti voluptatem nisi. Aspernatur perspiciatis reiciendis aliquam sint sed voluptatibus placeat excepturi optio quidem laboriosam quas minus at quod voluptas dolorem, et asperiores nulla molestiae architecto natus veniam, aliquid rem. Vitae mollitia voluptate rem reprehenderit sunt ipsa nihil voluptates explicabo quia expedita, deserunt quisquam eveniet voluptatibus, itaque iusto quidem!</p>'
        // ]);
    }
}
