<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'commentable_id' => 7,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Id nostrum minus quos consequatur. Nemo unde est similique omnis. Pariatur ab ut molestiae aliquam.","html":"<p>Id nostrum minus quos consequatur. Nemo unde est similique omnis. Pariatur ab ut molestiae aliquam.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:17',
                'updated_at' => '2020-09-13 11:44:17',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 10,
                'commentable_id' => 18,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Sed saepe aut voluptas. Laborum delectus odit possimus et molestiae non dolor. Eos quasi quidem qui et quos. Occaecati modi harum officia quas quos aut sint.","html":"<p>Sed saepe aut voluptas. Laborum delectus odit possimus et molestiae non dolor. Eos quasi quidem qui et quos. Occaecati modi harum officia quas quos aut sint.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:18',
                'updated_at' => '2020-09-13 11:44:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 10,
                'commentable_id' => 4,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Maiores minus sunt eaque nostrum eligendi. Quo quis pariatur natus enim. Quis tempora et ea fugiat est voluptatem consequatur. Sunt nobis corporis velit et.","html":"<p>Maiores minus sunt eaque nostrum eligendi. Quo quis pariatur natus enim. Quis tempora et ea fugiat est voluptatem consequatur. Sunt nobis corporis velit et.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:19',
                'updated_at' => '2020-09-13 11:44:19',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'commentable_id' => 1,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Pariatur voluptas iste dolorum dicta. Hic nihil soluta deleniti occaecati.","html":"<p>Pariatur voluptas iste dolorum dicta. Hic nihil soluta deleniti occaecati.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:19',
                'updated_at' => '2020-09-13 11:44:19',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 5,
                'commentable_id' => 13,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Voluptas a cumque pariatur ab adipisci incidunt. Repellat et aliquam ab ipsa quidem illo est. Odio corporis tempora consequatur ex temporibus architecto et quibusdam. Facere dignissimos sit ducimus expedita et qui distinctio distinctio.","html":"<p>Voluptas a cumque pariatur ab adipisci incidunt. Repellat et aliquam ab ipsa quidem illo est. Odio corporis tempora consequatur ex temporibus architecto et quibusdam. Facere dignissimos sit ducimus expedita et qui distinctio distinctio.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:19',
                'updated_at' => '2020-09-13 11:44:19',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 9,
                'commentable_id' => 16,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Dolores et pariatur ipsa consectetur ad non. Tempora doloremque nostrum ducimus nam eum.","html":"<p>Dolores et pariatur ipsa consectetur ad non. Tempora doloremque nostrum ducimus nam eum.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:20',
                'updated_at' => '2020-09-13 11:44:20',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 1,
                'commentable_id' => 9,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Voluptatem officiis quis magnam autem. Consequuntur sed aut neque in repellat. Dolor reiciendis illo voluptas nemo. Consequuntur sed illum inventore placeat laborum mollitia.","html":"<p>Voluptatem officiis quis magnam autem. Consequuntur sed aut neque in repellat. Dolor reiciendis illo voluptas nemo. Consequuntur sed illum inventore placeat laborum mollitia.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:20',
                'updated_at' => '2020-09-13 11:44:20',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'commentable_id' => 11,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Consequuntur id dignissimos consequatur eum. Adipisci culpa et nesciunt ut. Expedita et consectetur ad aliquid in nulla sed.","html":"<p>Consequuntur id dignissimos consequatur eum. Adipisci culpa et nesciunt ut. Expedita et consectetur ad aliquid in nulla sed.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:20',
                'updated_at' => '2020-09-13 11:44:20',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 6,
                'commentable_id' => 3,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Aut facere sunt vitae libero. Natus placeat quia placeat molestiae. Iusto aut quasi quae ducimus. Non voluptas dolores eveniet deserunt voluptatem quia et et. Consequatur labore eius repellendus est dolores nulla laudantium ad.","html":"<p>Aut facere sunt vitae libero. Natus placeat quia placeat molestiae. Iusto aut quasi quae ducimus. Non voluptas dolores eveniet deserunt voluptatem quia et et. Consequatur labore eius repellendus est dolores nulla laudantium ad.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 3,
                'commentable_id' => 7,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Necessitatibus veritatis facilis praesentium et totam facilis quasi. Quos dolor rerum repudiandae aut a qui. Maiores nesciunt ut reiciendis in rerum. Sed rerum velit fuga in et cupiditate.","html":"<p>Necessitatibus veritatis facilis praesentium et totam facilis quasi. Quos dolor rerum repudiandae aut a qui. Maiores nesciunt ut reiciendis in rerum. Sed rerum velit fuga in et cupiditate.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 9,
                'commentable_id' => 20,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Nihil cupiditate quia sed nulla totam dolor accusamus rem. Eos laudantium et autem minima. Nulla laudantium vel alias quidem quia sed. Omnis qui adipisci temporibus quia qui.","html":"<p>Nihil cupiditate quia sed nulla totam dolor accusamus rem. Eos laudantium et autem minima. Nulla laudantium vel alias quidem quia sed. Omnis qui adipisci temporibus quia qui.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 5,
                'commentable_id' => 9,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Dolorem sed quibusdam ea veritatis dolorem et. Ea fuga iusto a voluptatibus tenetur. Ratione et id est aliquam ipsum. Dolorem magnam quis explicabo consequatur alias qui. Sint tempore expedita rerum pariatur mollitia.","html":"<p>Dolorem sed quibusdam ea veritatis dolorem et. Ea fuga iusto a voluptatibus tenetur. Ratione et id est aliquam ipsum. Dolorem magnam quis explicabo consequatur alias qui. Sint tempore expedita rerum pariatur mollitia.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 8,
                'commentable_id' => 3,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Dolores aliquid magnam ab voluptas. Perferendis maiores qui harum exercitationem voluptate similique aut. Est aut illum cumque qui nesciunt odio est.","html":"<p>Dolores aliquid magnam ab voluptas. Perferendis maiores qui harum exercitationem voluptate similique aut. Est aut illum cumque qui nesciunt odio est.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 6,
                'commentable_id' => 2,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Culpa rerum numquam similique consequuntur. Magnam provident deleniti nihil est tenetur quam blanditiis. Nihil et necessitatibus occaecati qui eum consequatur eveniet.","html":"<p>Culpa rerum numquam similique consequuntur. Magnam provident deleniti nihil est tenetur quam blanditiis. Nihil et necessitatibus occaecati qui eum consequatur eveniet.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 2,
                'commentable_id' => 9,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Ducimus voluptate beatae suscipit. Eius aut qui mollitia suscipit temporibus est. Reiciendis numquam itaque molestias dolorem velit enim vero.","html":"<p>Ducimus voluptate beatae suscipit. Eius aut qui mollitia suscipit temporibus est. Reiciendis numquam itaque molestias dolorem velit enim vero.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 5,
                'commentable_id' => 2,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Voluptatem non cupiditate ipsa eaque neque explicabo. Omnis non at quis minus sunt dignissimos. Tempore enim at voluptatem dolore dolorum facere. Et eius a reiciendis dolor sint aut cupiditate.","html":"<p>Voluptatem non cupiditate ipsa eaque neque explicabo. Omnis non at quis minus sunt dignissimos. Tempore enim at voluptatem dolore dolorum facere. Et eius a reiciendis dolor sint aut cupiditate.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:21',
                'updated_at' => '2020-09-13 11:44:21',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 3,
                'commentable_id' => 10,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Ipsa sapiente libero natus perferendis quis. Sunt asperiores molestias placeat earum est magni velit. Recusandae sint laborum magnam quia.","html":"<p>Ipsa sapiente libero natus perferendis quis. Sunt asperiores molestias placeat earum est magni velit. Recusandae sint laborum magnam quia.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 7,
                'commentable_id' => 14,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Est dolores molestias ut deserunt cupiditate nobis. Nisi nihil quia earum laboriosam a. Similique voluptate hic optio fuga similique blanditiis assumenda.","html":"<p>Est dolores molestias ut deserunt cupiditate nobis. Nisi nihil quia earum laboriosam a. Similique voluptate hic optio fuga similique blanditiis assumenda.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 6,
                'commentable_id' => 12,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Atque et distinctio enim sit labore itaque. Et voluptatibus nihil et fugit velit alias rerum. Libero occaecati id est aliquid veniam culpa. Non eum voluptatem vel placeat non dolorum. Blanditiis ut officia fugit deleniti minus quisquam.","html":"<p>Atque et distinctio enim sit labore itaque. Et voluptatibus nihil et fugit velit alias rerum. Libero occaecati id est aliquid veniam culpa. Non eum voluptatem vel placeat non dolorum. Blanditiis ut officia fugit deleniti minus quisquam.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 3,
                'commentable_id' => 11,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Incidunt qui cumque minus voluptatem sunt reprehenderit dolorem architecto. Mollitia aut numquam doloremque tempora distinctio numquam. Magni unde quaerat ut et iste autem sed.","html":"<p>Incidunt qui cumque minus voluptatem sunt reprehenderit dolorem architecto. Mollitia aut numquam doloremque tempora distinctio numquam. Magni unde quaerat ut et iste autem sed.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 3,
                'commentable_id' => 3,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Aspernatur est temporibus eum dolore laboriosam. Beatae expedita quos dicta rem repudiandae dolores. Aperiam sunt natus numquam veniam. Corporis molestias ipsa molestiae sequi quia eligendi. Sunt qui maiores nihil temporibus quibusdam.","html":"<p>Aspernatur est temporibus eum dolore laboriosam. Beatae expedita quos dicta rem repudiandae dolores. Aperiam sunt natus numquam veniam. Corporis molestias ipsa molestiae sequi quia eligendi. Sunt qui maiores nihil temporibus quibusdam.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 9,
                'commentable_id' => 6,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Expedita magnam quia eligendi est inventore. Voluptatem enim autem omnis quas. Neque voluptatem voluptas quis aut. Aspernatur pariatur in magni cum neque assumenda iure sed.","html":"<p>Expedita magnam quia eligendi est inventore. Voluptatem enim autem omnis quas. Neque voluptatem voluptas quis aut. Aspernatur pariatur in magni cum neque assumenda iure sed.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 8,
                'commentable_id' => 13,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Alias dolor qui odio consequatur non ea. Officia perferendis aut quis quas quia commodi. Iste ullam ipsum est consectetur. Voluptatibus assumenda neque ut molestias laudantium debitis.","html":"<p>Alias dolor qui odio consequatur non ea. Officia perferendis aut quis quas quia commodi. Iste ullam ipsum est consectetur. Voluptatibus assumenda neque ut molestias laudantium debitis.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 4,
                'commentable_id' => 15,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Hic et harum a nisi illum porro voluptas quod. Beatae sequi necessitatibus est. Molestias assumenda expedita nulla officiis aut sunt consequatur. Commodi sunt voluptatem blanditiis atque rem est.","html":"<p>Hic et harum a nisi illum porro voluptas quod. Beatae sequi necessitatibus est. Molestias assumenda expedita nulla officiis aut sunt consequatur. Commodi sunt voluptatem blanditiis atque rem est.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 7,
                'commentable_id' => 4,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Excepturi minus quidem modi dolorum qui ea. Asperiores excepturi mollitia voluptas placeat libero. Voluptas qui non quis et dolorem.","html":"<p>Excepturi minus quidem modi dolorum qui ea. Asperiores excepturi mollitia voluptas placeat libero. Voluptas qui non quis et dolorem.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 6,
                'commentable_id' => 8,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Ratione libero rerum harum quibusdam distinctio assumenda provident. Eius porro optio enim ullam libero esse. Velit nulla molestias quia ut.","html":"<p>Ratione libero rerum harum quibusdam distinctio assumenda provident. Eius porro optio enim ullam libero esse. Velit nulla molestias quia ut.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 5,
                'commentable_id' => 10,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Rerum non sint dolore ipsum qui. Odit rerum dolores nobis ea quasi. Ipsam illo iusto consequatur quisquam officia aut. Modi porro a distinctio possimus enim ut placeat qui.","html":"<p>Rerum non sint dolore ipsum qui. Odit rerum dolores nobis ea quasi. Ipsam illo iusto consequatur quisquam officia aut. Modi porro a distinctio possimus enim ut placeat qui.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 10,
                'commentable_id' => 2,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Sunt blanditiis facilis expedita eligendi necessitatibus ut itaque. Odio harum nam odio repellat laborum fugit vero. Est nostrum fugiat molestiae omnis eius. Exercitationem et et ipsam repellat minus voluptatibus.","html":"<p>Sunt blanditiis facilis expedita eligendi necessitatibus ut itaque. Odio harum nam odio repellat laborum fugit vero. Est nostrum fugiat molestiae omnis eius. Exercitationem et et ipsam repellat minus voluptatibus.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 2,
                'commentable_id' => 10,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Iste molestiae fugiat veniam nihil laborum et sunt. Aspernatur et et modi non et quos ipsum. Dolor facilis ut suscipit molestiae ratione. Quibusdam ab et atque.","html":"<p>Iste molestiae fugiat veniam nihil laborum et sunt. Aspernatur et et modi non et quos ipsum. Dolor facilis ut suscipit molestiae ratione. Quibusdam ab et atque.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 9,
                'commentable_id' => 11,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Eos corrupti nemo possimus aut. Mollitia earum fugiat repellat culpa. Omnis esse rerum et voluptas molestiae dolor eaque.","html":"<p>Eos corrupti nemo possimus aut. Mollitia earum fugiat repellat culpa. Omnis esse rerum et voluptas molestiae dolor eaque.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 2,
                'commentable_id' => 5,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Velit perferendis quaerat voluptatibus consequatur ullam non aperiam. Consectetur sed et voluptas dolorum nam. Iste ea harum et aliquam. Hic dolore velit quo quo.","html":"<p>Velit perferendis quaerat voluptatibus consequatur ullam non aperiam. Consectetur sed et voluptas dolorum nam. Iste ea harum et aliquam. Hic dolore velit quo quo.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 11,
                'commentable_id' => 10,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Modi perferendis quia unde dolorem. Aliquam ipsam facere iste placeat odit aut omnis minima. Rerum qui accusantium possimus doloribus sed incidunt ipsam. Corporis vitae doloribus suscipit repellendus esse. Adipisci aut id facere deleniti.","html":"<p>Modi perferendis quia unde dolorem. Aliquam ipsam facere iste placeat odit aut omnis minima. Rerum qui accusantium possimus doloribus sed incidunt ipsam. Corporis vitae doloribus suscipit repellendus esse. Adipisci aut id facere deleniti.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 2,
                'commentable_id' => 3,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Dolorum alias perspiciatis dolorem error soluta qui harum id. Illo eaque corrupti tempore id. Architecto nam ex quidem enim exercitationem quod libero. Quos maxime nobis voluptatem quia aut ut quia. Incidunt non tempore dolores nesciunt culpa neque et.","html":"<p>Dolorum alias perspiciatis dolorem error soluta qui harum id. Illo eaque corrupti tempore id. Architecto nam ex quidem enim exercitationem quod libero. Quos maxime nobis voluptatem quia aut ut quia. Incidunt non tempore dolores nesciunt culpa neque et.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:22',
                'updated_at' => '2020-09-13 11:44:22',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 7,
                'commentable_id' => 3,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Ipsam deleniti at vitae et reiciendis hic. Unde eius voluptas ullam corrupti. Non aut aut esse enim quam quae consequatur.","html":"<p>Ipsam deleniti at vitae et reiciendis hic. Unde eius voluptas ullam corrupti. Non aut aut esse enim quam quae consequatur.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 2,
                'commentable_id' => 20,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Qui officiis ut ut et eveniet qui. Eum quo ex inventore unde. Et assumenda et laborum magni. Repellat rerum aliquid praesentium repudiandae cumque occaecati.","html":"<p>Qui officiis ut ut et eveniet qui. Eum quo ex inventore unde. Et assumenda et laborum magni. Repellat rerum aliquid praesentium repudiandae cumque occaecati.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 9,
                'commentable_id' => 15,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Officia nisi in qui voluptate. Voluptas beatae est qui. Maiores enim fugiat minus tempora omnis. Iusto impedit quas sed perspiciatis et esse. Labore aut sed aut dolorum.","html":"<p>Officia nisi in qui voluptate. Voluptas beatae est qui. Maiores enim fugiat minus tempora omnis. Iusto impedit quas sed perspiciatis et esse. Labore aut sed aut dolorum.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 5,
                'commentable_id' => 10,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Et qui porro quod a tempora voluptatem veritatis. Labore molestias illum reprehenderit ut qui ad aut. Et reprehenderit et sit ut eveniet sit quo. Inventore et temporibus sunt sequi aut delectus. Sed maxime deleniti perferendis.","html":"<p>Et qui porro quod a tempora voluptatem veritatis. Labore molestias illum reprehenderit ut qui ad aut. Et reprehenderit et sit ut eveniet sit quo. Inventore et temporibus sunt sequi aut delectus. Sed maxime deleniti perferendis.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 6,
                'commentable_id' => 6,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Sint soluta eveniet amet eius. Distinctio ex ut inventore adipisci voluptatem omnis dicta. Et nesciunt velit cum rerum.","html":"<p>Sint soluta eveniet amet eius. Distinctio ex ut inventore adipisci voluptatem omnis dicta. Et nesciunt velit cum rerum.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 4,
                'commentable_id' => 8,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Id quas dolores pariatur nemo at. Eos eligendi non excepturi autem explicabo deleniti. Explicabo modi doloribus perferendis aliquam qui et nihil rerum. Impedit vero voluptatem possimus et.","html":"<p>Id quas dolores pariatur nemo at. Eos eligendi non excepturi autem explicabo deleniti. Explicabo modi doloribus perferendis aliquam qui et nihil rerum. Impedit vero voluptatem possimus et.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 1,
                'commentable_id' => 14,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Qui incidunt et sint rerum quidem unde cumque. Rerum ipsum non sed magnam. Itaque vel voluptatibus architecto et dolorem.","html":"<p>Qui incidunt et sint rerum quidem unde cumque. Rerum ipsum non sed magnam. Itaque vel voluptatibus architecto et dolorem.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 10,
                'commentable_id' => 5,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Nam exercitationem nemo omnis libero id accusamus dolorem. Illum officiis minus sed similique. Quos ad voluptatem velit explicabo dolorum amet. Consectetur sed ipsa consequatur quis tenetur sit iste consequatur.","html":"<p>Nam exercitationem nemo omnis libero id accusamus dolorem. Illum officiis minus sed similique. Quos ad voluptatem velit explicabo dolorum amet. Consectetur sed ipsa consequatur quis tenetur sit iste consequatur.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 4,
                'commentable_id' => 19,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Quo et quis recusandae sunt aut aut. Non accusamus laboriosam fugiat quibusdam. Totam quia iure ullam. Non exercitationem sunt quo cumque blanditiis id.","html":"<p>Quo et quis recusandae sunt aut aut. Non accusamus laboriosam fugiat quibusdam. Totam quia iure ullam. Non exercitationem sunt quo cumque blanditiis id.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 11,
                'commentable_id' => 11,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Impedit id perspiciatis labore delectus quas. Perferendis et beatae nam iure quis temporibus. Aut adipisci eligendi voluptatem ipsum rerum voluptatem earum. Sint laborum sint nisi itaque.","html":"<p>Impedit id perspiciatis labore delectus quas. Perferendis et beatae nam iure quis temporibus. Aut adipisci eligendi voluptatem ipsum rerum voluptatem earum. Sint laborum sint nisi itaque.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 8,
                'commentable_id' => 13,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Ea voluptate nihil velit qui rerum atque non. Nostrum laborum et quia optio omnis architecto. Sunt et sit aut voluptate quia accusamus expedita.","html":"<p>Ea voluptate nihil velit qui rerum atque non. Nostrum laborum et quia optio omnis architecto. Sunt et sit aut voluptate quia accusamus expedita.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 5,
                'commentable_id' => 12,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Laudantium ipsa labore optio totam ex deserunt omnis. Dolorum aut deserunt pariatur assumenda ex aut earum ipsa. Est ipsum doloribus deserunt qui cum pariatur consequatur.","html":"<p>Laudantium ipsa labore optio totam ex deserunt omnis. Dolorum aut deserunt pariatur assumenda ex aut earum ipsa. Est ipsum doloribus deserunt qui cum pariatur consequatur.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 7,
                'commentable_id' => 3,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Eos enim natus numquam consequuntur vitae doloribus tempora. Molestias deleniti esse omnis minus id omnis quis consequuntur. Facilis et pariatur tenetur tempora nulla dolores.","html":"<p>Eos enim natus numquam consequuntur vitae doloribus tempora. Molestias deleniti esse omnis minus id omnis quis consequuntur. Facilis et pariatur tenetur tempora nulla dolores.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 4,
                'commentable_id' => 19,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Ut nesciunt odit eveniet qui. Aut sit sequi rerum qui veniam sit a. Nam et porro esse beatae molestiae. Labore quasi rerum autem aut quo rem aliquam placeat. Cupiditate quis dolorum dicta hic in aspernatur.","html":"<p>Ut nesciunt odit eveniet qui. Aut sit sequi rerum qui veniam sit a. Nam et porro esse beatae molestiae. Labore quasi rerum autem aut quo rem aliquam placeat. Cupiditate quis dolorum dicta hic in aspernatur.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 10,
                'commentable_id' => 9,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Architecto eos voluptatibus autem. Quod voluptas ipsum et rerum. Quos culpa sunt tempore debitis voluptatem omnis. Earum ipsam enim dignissimos blanditiis.","html":"<p>Architecto eos voluptatibus autem. Quod voluptas ipsum et rerum. Quos culpa sunt tempore debitis voluptatem omnis. Earum ipsam enim dignissimos blanditiis.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 5,
                'commentable_id' => 7,
                'commentable_type' => 'articles',
                'content' => '{"raw":"Eum doloremque culpa ratione. Tempora numquam non et. Repellat minima iste dolore rem deleniti deserunt.","html":"<p>Eum doloremque culpa ratione. Tempora numquam non et. Repellat minima iste dolore rem deleniti deserunt.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:23',
                'updated_at' => '2020-09-13 11:44:23',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 4,
                'commentable_id' => 5,
                'commentable_type' => 'discussions',
                'content' => '{"raw":"Repudiandae distinctio mollitia excepturi nobis commodi. Veniam dolor nemo provident voluptate et delectus. Aut rem aliquid beatae non eaque dolorem. Expedita necessitatibus sit sunt nobis. Doloremque enim odio eveniet veniam dolor explicabo beatae.","html":"<p>Repudiandae distinctio mollitia excepturi nobis commodi. Veniam dolor nemo provident voluptate et delectus. Aut rem aliquid beatae non eaque dolorem. Expedita necessitatibus sit sunt nobis. Doloremque enim odio eveniet veniam dolor explicabo beatae.<\\/p>"}',
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}