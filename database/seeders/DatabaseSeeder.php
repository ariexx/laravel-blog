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
           'name' => 'Arief',
           'email' => 'arep@gmail.com',
           'password' => bcrypt('12345')
        ]);

        Category::create([
           'name' => 'Web Programming',
           'slug' => 'web-programming'
        ]);

        Category::create([
           'name' => 'Personal',
           'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul pertama',
            'slug'  => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nam? Itaque nihil molestiae ex veniam officiis ullam possimus molestias maxime.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro mollitia ratione ipsum odit maxime harum illum sunt nobis! Sed incidunt ipsum eos. Quasi animi omnis obcaecati ullam ex, id dignissimos error sunt enim autem alias accusamus iusto possimus quas suscipit quam eaque maiores temporibus vel ipsum magni, facere ab? Mollitia recusandae praesentium, sed ex laborum eaque molestiae dicta explicabo laudantium odit earum numquam, minima ipsa maiores molestias temporibus nobis suscipit. Facere, aut corrupti laboriosam quisquam dolore ad libero asperiores incidunt voluptates enim debitis cumque voluptatibus minus provident iste quam dolorem nobis pariatur sapiente illum? Perferendis quod, consequatur ab doloribus iure obcaecati harum veniam non culpa ducimus necessitatibus architecto soluta sint totam placeat eos fugit inventore eveniet! Est cumque sapiente, maiores animi molestias debitis incidunt laudantium autem perspiciatis libero. Iure harum blanditiis rem totam ab? Tempore nostrum nobis quas quaerat deserunt error modi sunt necessitatibus quidem totam corporis deleniti facilis repudiandae eligendi rerum odit eos, inventore magnam impedit iusto aliquid alias! Provident, doloribus perferendis consectetur quidem fuga aspernatur! Provident iusto nesciunt, numquam beatae at, doloribus amet laboriosam veritatis labore consequuntur eligendi culpa accusantium harum obcaecati. Nostrum doloremque, illum accusamus fugiat nisi velit unde distinctio minus recusandae! Vitae harum, voluptas vero quam aspernatur, corrupti dicta, omnis enim deleniti veritatis optio magni rem porro. Quas ea nostrum quasi velit tempore nisi dolorum assumenda quibusdam voluptatum quis perferendis omnis minus vitae autem hic reiciendis quo, unde vel pariatur consequuntur soluta accusamus harum eum. Et ducimus harum hic a quae rem magnam nemo, nihil ipsum autem quidem excepturi natus quasi veniam. Necessitatibus itaque, iste corporis sit in ea corrupti ullam qui, quidem nesciunt maxime saepe cum aperiam animi iusto iure inventore? Doloremque similique accusamus ducimus saepe voluptas nulla quibusdam assumenda, quidem consequuntur animi ab commodi, cupiditate, tempora quod magni. Magni, aliquid ipsa! Corporis, dolores tempore.',
            'author' => 'Arief',
            'category_id' => 1,
            'user_id' => 1
        ]);

            Post::create([
            'title' => 'Judul Kedua',
            'slug'  => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nam? Itaque nihil molestiae ex veniam officiis ullam possimus molestias maxime.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro mollitia ratione ipsum odit maxime harum illum sunt nobis! Sed incidunt ipsum eos. Quasi animi omnis obcaecati ullam ex, id dignissimos error sunt enim autem alias accusamus iusto possimus quas suscipit quam eaque maiores temporibus vel ipsum magni, facere ab? Mollitia recusandae praesentium, sed ex laborum eaque molestiae dicta explicabo laudantium odit earum numquam, minima ipsa maiores molestias temporibus nobis suscipit. Facere, aut corrupti laboriosam quisquam dolore ad libero asperiores incidunt voluptates enim debitis cumque voluptatibus minus provident iste quam dolorem nobis pariatur sapiente illum? Perferendis quod, consequatur ab doloribus iure obcaecati harum veniam non culpa ducimus necessitatibus architecto soluta sint totam placeat eos fugit inventore eveniet! Est cumque sapiente, maiores animi molestias debitis incidunt laudantium autem perspiciatis libero. Iure harum blanditiis rem totam ab? Tempore nostrum nobis quas quaerat deserunt error modi sunt necessitatibus quidem totam corporis deleniti facilis repudiandae eligendi rerum odit eos, inventore magnam impedit iusto aliquid alias! Provident, doloribus perferendis consectetur quidem fuga aspernatur! Provident iusto nesciunt, numquam beatae at, doloribus amet laboriosam veritatis labore consequuntur eligendi culpa accusantium harum obcaecati. Nostrum doloremque, illum accusamus fugiat nisi velit unde distinctio minus recusandae! Vitae harum, voluptas vero quam aspernatur, corrupti dicta, omnis enim deleniti veritatis optio magni rem porro. Quas ea nostrum quasi velit tempore nisi dolorum assumenda quibusdam voluptatum quis perferendis omnis minus vitae autem hic reiciendis quo, unde vel pariatur consequuntur soluta accusamus harum eum. Et ducimus harum hic a quae rem magnam nemo, nihil ipsum autem quidem excepturi natus quasi veniam. Necessitatibus itaque, iste corporis sit in ea corrupti ullam qui, quidem nesciunt maxime saepe cum aperiam animi iusto iure inventore? Doloremque similique accusamus ducimus saepe voluptas nulla quibusdam assumenda, quidem consequuntur animi ab commodi, cupiditate, tempora quod magni. Magni, aliquid ipsa! Corporis, dolores tempore.',
            'author' => 'Arief',
            'category_id' => 1,
            'user_id' => 1
        ]);

            Post::create([
            'title' => 'Judul ketiga',
            'slug'  => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nam? Itaque nihil molestiae ex veniam officiis ullam possimus molestias maxime.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro mollitia ratione ipsum odit maxime harum illum sunt nobis! Sed incidunt ipsum eos. Quasi animi omnis obcaecati ullam ex, id dignissimos error sunt enim autem alias accusamus iusto possimus quas suscipit quam eaque maiores temporibus vel ipsum magni, facere ab? Mollitia recusandae praesentium, sed ex laborum eaque molestiae dicta explicabo laudantium odit earum numquam, minima ipsa maiores molestias temporibus nobis suscipit. Facere, aut corrupti laboriosam quisquam dolore ad libero asperiores incidunt voluptates enim debitis cumque voluptatibus minus provident iste quam dolorem nobis pariatur sapiente illum? Perferendis quod, consequatur ab doloribus iure obcaecati harum veniam non culpa ducimus necessitatibus architecto soluta sint totam placeat eos fugit inventore eveniet! Est cumque sapiente, maiores animi molestias debitis incidunt laudantium autem perspiciatis libero. Iure harum blanditiis rem totam ab? Tempore nostrum nobis quas quaerat deserunt error modi sunt necessitatibus quidem totam corporis deleniti facilis repudiandae eligendi rerum odit eos, inventore magnam impedit iusto aliquid alias! Provident, doloribus perferendis consectetur quidem fuga aspernatur! Provident iusto nesciunt, numquam beatae at, doloribus amet laboriosam veritatis labore consequuntur eligendi culpa accusantium harum obcaecati. Nostrum doloremque, illum accusamus fugiat nisi velit unde distinctio minus recusandae! Vitae harum, voluptas vero quam aspernatur, corrupti dicta, omnis enim deleniti veritatis optio magni rem porro. Quas ea nostrum quasi velit tempore nisi dolorum assumenda quibusdam voluptatum quis perferendis omnis minus vitae autem hic reiciendis quo, unde vel pariatur consequuntur soluta accusamus harum eum. Et ducimus harum hic a quae rem magnam nemo, nihil ipsum autem quidem excepturi natus quasi veniam. Necessitatibus itaque, iste corporis sit in ea corrupti ullam qui, quidem nesciunt maxime saepe cum aperiam animi iusto iure inventore? Doloremque similique accusamus ducimus saepe voluptas nulla quibusdam assumenda, quidem consequuntur animi ab commodi, cupiditate, tempora quod magni. Magni, aliquid ipsa! Corporis, dolores tempore.',
            'author' => 'Arief',
            'category_id' => 2,
            'user_id' => 1
        ]);


    }
}
