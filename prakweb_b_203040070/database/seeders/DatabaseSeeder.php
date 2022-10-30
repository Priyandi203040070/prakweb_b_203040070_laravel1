<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
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
            'name' => 'Priyandi Zembar Azizi',
            'email' => 'piyandi.zembarazizi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Hifki Yuda',
            'email' => 'hifki@gmail.com',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente,',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente, amet expedita nesciunt sint odit provident eius fugiat a laborum voluptas? Aperiam dolores placeat pariatur impedit molestiae molestias hic rem eaque maiores sed beatae odio dolore facere, voluptatem nostrum similique labore perferendis. A maxime neque reiciendis provident suscipit. Corrupti dolores doloribus aperiam odit nostrum, earum iusto veritatis tempore reprehenderit similique. Cum dolores qui sunt ipsa, sapiente vitae quos? Molestiae sint commodi quas quisquam rerum laboriosam, qui praesentium placeat voluptas dolor dolorum exercitationem possimus repudiandae ex laudantium quo, minus omnis, doloremque rem. Atque, dolore.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente,',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente, amet expedita nesciunt sint odit provident eius fugiat a laborum voluptas? Aperiam dolores placeat pariatur impedit molestiae molestias hic rem eaque maiores sed beatae odio dolore facere, voluptatem nostrum similique labore perferendis. A maxime neque reiciendis provident suscipit. Corrupti dolores doloribus aperiam odit nostrum, earum iusto veritatis tempore reprehenderit similique. Cum dolores qui sunt ipsa, sapiente vitae quos? Molestiae sint commodi quas quisquam rerum laboriosam, qui praesentium placeat voluptas dolor dolorum exercitationem possimus repudiandae ex laudantium quo, minus omnis, doloremque rem. Atque, dolore.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente,',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente, amet expedita nesciunt sint odit provident eius fugiat a laborum voluptas? Aperiam dolores placeat pariatur impedit molestiae molestias hic rem eaque maiores sed beatae odio dolore facere, voluptatem nostrum similique labore perferendis. A maxime neque reiciendis provident suscipit. Corrupti dolores doloribus aperiam odit nostrum, earum iusto veritatis tempore reprehenderit similique. Cum dolores qui sunt ipsa, sapiente vitae quos? Molestiae sint commodi quas quisquam rerum laboriosam, qui praesentium placeat voluptas dolor dolorum exercitationem possimus repudiandae ex laudantium quo, minus omnis, doloremque rem. Atque, dolore.',
            'category_id' => 2,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente,',
            'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, minus cupiditate rem unde asperiores nobis quaerat sapiente, amet expedita nesciunt sint odit provident eius fugiat a laborum voluptas? Aperiam dolores placeat pariatur impedit molestiae molestias hic rem eaque maiores sed beatae odio dolore facere, voluptatem nostrum similique labore perferendis. A maxime neque reiciendis provident suscipit. Corrupti dolores doloribus aperiam odit nostrum, earum iusto veritatis tempore reprehenderit similique. Cum dolores qui sunt ipsa, sapiente vitae quos? Molestiae sint commodi quas quisquam rerum laboriosam, qui praesentium placeat voluptas dolor dolorum exercitationem possimus repudiandae ex laudantium quo, minus omnis, doloremque rem. Atque, dolore.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
