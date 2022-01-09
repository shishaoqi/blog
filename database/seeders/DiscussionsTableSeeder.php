<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('discussions')->delete();
        
        \DB::table('discussions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'last_user_id' => 3,
                'title' => 'Officiis voluptas reprehenderit similique fuga doloribus quidem.',
                'content' => '{"raw":"Nisi voluptates consequuntur error ut quasi laborum. Omnis voluptatem eaque veniam consequatur voluptatem qui. Eos consequatur qui vero.","html":"<p>Nisi voluptates consequuntur error ut quasi laborum. Omnis voluptatem eaque veniam consequatur voluptatem qui. Eos consequatur qui vero.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:14',
                'updated_at' => '2020-09-13 11:44:14',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 10,
                'last_user_id' => 10,
                'title' => 'Quae illo eligendi qui saepe ipsam illum odit et.',
                'content' => '{"raw":"Aut consectetur quo omnis quo id repellat animi odio. Assumenda quasi aliquid aut. Et accusamus voluptas sunt eos.","html":"<p>Aut consectetur quo omnis quo id repellat animi odio. Assumenda quasi aliquid aut. Et accusamus voluptas sunt eos.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:14',
                'updated_at' => '2020-09-13 11:44:14',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 8,
                'last_user_id' => 8,
                'title' => 'Officia accusantium voluptas libero quis eveniet voluptas ex.',
                'content' => '{"raw":"Ullam tempora ut itaque sit voluptas. Non quis ea dolorum omnis. Delectus reprehenderit temporibus libero rem libero voluptas. Hic officiis culpa est id error molestiae voluptatem.","html":"<p>Ullam tempora ut itaque sit voluptas. Non quis ea dolorum omnis. Delectus reprehenderit temporibus libero rem libero voluptas. Hic officiis culpa est id error molestiae voluptatem.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:14',
                'updated_at' => '2020-09-13 11:44:14',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 1,
                'last_user_id' => 1,
                'title' => 'Dolorem sunt reprehenderit quas adipisci et praesentium.',
                'content' => '{"raw":"Necessitatibus odit dolor temporibus molestiae quas. Molestiae quis vero cum in est voluptas iste tempore. Non nihil repudiandae sint magnam sit quaerat.","html":"<p>Necessitatibus odit dolor temporibus molestiae quas. Molestiae quis vero cum in est voluptas iste tempore. Non nihil repudiandae sint magnam sit quaerat.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:14',
                'updated_at' => '2020-09-13 11:44:14',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'last_user_id' => 4,
                'title' => 'Et perferendis dignissimos iusto ex.',
                'content' => '{"raw":"Nostrum consequatur quam quod eius delectus fuga. Est vero ipsum suscipit facilis qui. Maxime enim optio et et. Ut amet est tempore et harum.","html":"<p>Nostrum consequatur quam quod eius delectus fuga. Est vero ipsum suscipit facilis qui. Maxime enim optio et et. Ut amet est tempore et harum.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:14',
                'updated_at' => '2020-09-13 11:44:14',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 5,
                'last_user_id' => 5,
                'title' => 'Impedit fugiat explicabo quae quae qui.',
                'content' => '{"raw":"Dolor qui ea sunt odio. Maxime veniam iure nihil dolorem vero vel omnis officia. In sint veniam non quisquam dolor esse vel. Odit exercitationem neque error rerum.","html":"<p>Dolor qui ea sunt odio. Maxime veniam iure nihil dolorem vero vel omnis officia. In sint veniam non quisquam dolor esse vel. Odit exercitationem neque error rerum.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 5,
                'last_user_id' => 5,
                'title' => 'Quia earum enim totam.',
                'content' => '{"raw":"Voluptatum voluptas recusandae quos neque eveniet non repudiandae. Ducimus ipsam consequatur sint sapiente. Cupiditate est odit et eligendi animi. Dignissimos laborum autem odio officiis.","html":"<p>Voluptatum voluptas recusandae quos neque eveniet non repudiandae. Ducimus ipsam consequatur sint sapiente. Cupiditate est odit et eligendi animi. Dignissimos laborum autem odio officiis.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 7,
                'last_user_id' => 7,
                'title' => 'Rem reiciendis maxime quas possimus autem aperiam velit.',
                'content' => '{"raw":"Et voluptatem suscipit nihil iusto et nisi. Laudantium adipisci omnis accusantium voluptatum ducimus voluptas facilis. Ipsam esse aperiam sequi iusto aut magnam a.","html":"<p>Et voluptatem suscipit nihil iusto et nisi. Laudantium adipisci omnis accusantium voluptatum ducimus voluptas facilis. Ipsam esse aperiam sequi iusto aut magnam a.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 9,
                'last_user_id' => 9,
                'title' => 'Quia sunt expedita eligendi fugiat quo esse dolorum.',
                'content' => '{"raw":"Qui in laudantium nihil ducimus. Dolorem animi consequuntur accusamus a quaerat. Aperiam eligendi optio id consequuntur.","html":"<p>Qui in laudantium nihil ducimus. Dolorem animi consequuntur accusamus a quaerat. Aperiam eligendi optio id consequuntur.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 8,
                'last_user_id' => 8,
                'title' => 'Sunt tempora consequatur omnis qui neque iusto.',
                'content' => '{"raw":"Distinctio id aperiam id mollitia quas. Qui autem labore consequatur corrupti consequatur accusamus et. Sit quidem perferendis ea.","html":"<p>Distinctio id aperiam id mollitia quas. Qui autem labore consequatur corrupti consequatur accusamus et. Sit quidem perferendis ea.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 4,
                'last_user_id' => 4,
                'title' => 'Aut rerum vel minima alias ut.',
                'content' => '{"raw":"Ut dolores blanditiis error alias deleniti consequatur aliquid dignissimos. Eos molestias enim ad ducimus alias. Iusto et dignissimos excepturi quaerat et praesentium cum.","html":"<p>Ut dolores blanditiis error alias deleniti consequatur aliquid dignissimos. Eos molestias enim ad ducimus alias. Iusto et dignissimos excepturi quaerat et praesentium cum.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 2,
                'last_user_id' => 2,
                'title' => 'Commodi saepe impedit est.',
                'content' => '{"raw":"Reiciendis cupiditate accusantium dolorum sed error rerum. Esse aut doloremque aut illum ut velit et. Consequatur in et ratione. Velit aspernatur qui minima ut officiis qui voluptatem.","html":"<p>Reiciendis cupiditate accusantium dolorum sed error rerum. Esse aut doloremque aut illum ut velit et. Consequatur in et ratione. Velit aspernatur qui minima ut officiis qui voluptatem.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 2,
                'last_user_id' => 2,
                'title' => 'Occaecati eius et earum.',
                'content' => '{"raw":"Aut vel facilis placeat occaecati. Et hic omnis aut. Porro omnis ducimus quod voluptatem.","html":"<p>Aut vel facilis placeat occaecati. Et hic omnis aut. Porro omnis ducimus quod voluptatem.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 5,
                'last_user_id' => 5,
                'title' => 'Veniam cupiditate et assumenda voluptatem quidem non.',
                'content' => '{"raw":"Ea laboriosam incidunt ipsa rerum fuga. Sint nostrum sequi odit molestiae. Animi nisi omnis velit at.","html":"<p>Ea laboriosam incidunt ipsa rerum fuga. Sint nostrum sequi odit molestiae. Animi nisi omnis velit at.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 9,
                'last_user_id' => 9,
                'title' => 'Ipsum sed quia et optio qui tempora soluta.',
                'content' => '{"raw":"Perferendis qui ab hic laboriosam voluptates non quod. Voluptatem est voluptates placeat maxime doloribus. Illo enim nesciunt qui ut itaque. Nulla neque velit ipsa cumque quam vero.","html":"<p>Perferendis qui ab hic laboriosam voluptates non quod. Voluptatem est voluptates placeat maxime doloribus. Illo enim nesciunt qui ut itaque. Nulla neque velit ipsa cumque quam vero.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 5,
                'last_user_id' => 5,
                'title' => 'Nemo laboriosam deleniti quisquam sed.',
                'content' => '{"raw":"Ut quis nobis earum. Dolorem deleniti et debitis est.","html":"<p>Ut quis nobis earum. Dolorem deleniti et debitis est.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 2,
                'last_user_id' => 2,
                'title' => 'Aut velit occaecati molestiae optio.',
                'content' => '{"raw":"Optio rem consequatur dolores officia aliquid aperiam. Culpa totam numquam temporibus consequuntur cumque omnis. Corrupti qui ad ut optio.","html":"<p>Optio rem consequatur dolores officia aliquid aperiam. Culpa totam numquam temporibus consequuntur cumque omnis. Corrupti qui ad ut optio.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 4,
                'last_user_id' => 4,
                'title' => 'Sed praesentium enim quibusdam sed deserunt omnis debitis.',
                'content' => '{"raw":"Odit officiis saepe optio et quisquam harum. Excepturi praesentium impedit omnis dolor. At aut aut voluptatem sed.","html":"<p>Odit officiis saepe optio et quisquam harum. Excepturi praesentium impedit omnis dolor. At aut aut voluptatem sed.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 7,
                'last_user_id' => 7,
                'title' => 'Quia voluptas dolore commodi voluptas.',
                'content' => '{"raw":"Quis ea blanditiis quis aliquam. Consequatur labore blanditiis iusto. Dolores quaerat autem ad mollitia cum explicabo.","html":"<p>Quis ea blanditiis quis aliquam. Consequatur labore blanditiis iusto. Dolores quaerat autem ad mollitia cum explicabo.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 11,
                'last_user_id' => 11,
                'title' => 'Consectetur ex quam non iusto quia et ut.',
                'content' => '{"raw":"Vel numquam quae sapiente et. Quae esse voluptatem nesciunt et dolores. Deleniti dignissimos culpa fugiat voluptatem ab sunt eligendi consequuntur. Quis aliquid eos consequatur veritatis eveniet dolores.","html":"<p>Vel numquam quae sapiente et. Quae esse voluptatem nesciunt et dolores. Deleniti dignissimos culpa fugiat voluptatem ab sunt eligendi consequuntur. Quis aliquid eos consequatur veritatis eveniet dolores.<\\/p>"}',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:15',
                'updated_at' => '2020-09-13 11:44:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}