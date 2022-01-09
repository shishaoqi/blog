<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'name' => '随想',
                'path' => 'http://www.fahey.org/',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:13:58',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'name' => 'PHP',
                'path' => 'https://www.langosh.biz/suscipit-maiores-excepturi-sed-vitae-ullam',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:15:24',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'name' => 'Laravel',
                'path' => 'http://www.tremblay.net/qui-reprehenderit-mollitia-est-est',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:14:57',
            ),
            3 => 
            array (
                'id' => 5,
                'parent_id' => 0,
                'name' => 'Redis',
                'path' => 'http://kshlerin.com/non-ducimus-tempora-necessitatibus-dolor-suscipit',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:16:24',
            ),
            4 => 
            array (
                'id' => 6,
                'parent_id' => 0,
                'name' => 'Docker',
                'path' => 'http://www.kessler.com/aut-fuga-ex-voluptates.html',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:16:55',
            ),
            5 => 
            array (
                'id' => 7,
                'parent_id' => 0,
                'name' => 'Mysql',
                'path' => 'http://www.towne.biz/voluptatem-voluptatum-architecto-delectus.html',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:17:50',
            ),
            6 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'name' => 'Linux',
                'path' => 'https://www.schiller.org/aliquam-culpa-unde-fugit-non-excepturi',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:11',
                'updated_at' => '2020-09-13 14:18:15',
            ),
            7 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'name' => 'Java',
                'path' => 'http://shishao.320.io:8090/java',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:12',
                'updated_at' => '2020-09-13 14:41:51',
            ),
            8 => 
            array (
                'id' => 10,
                'parent_id' => 0,
                'name' => 'algorithm',
                'path' => 'http://www.swaniawski.info/',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2020-09-13 11:44:12',
                'updated_at' => '2020-09-13 14:19:41',
            ),
            9 => 
            array (
                'id' => 11,
                'parent_id' => 0,
                'name' => 'shell',
                'path' => 'http://shishao.320.io:8090/',
                'description' => 'shell 学习与笔记相关',
                'image_url' => NULL,
                'created_at' => '2020-09-26 22:28:37',
                'updated_at' => '2020-09-26 22:28:50',
            ),
            10 => 
            array (
                'id' => 12,
                'parent_id' => 0,
                'name' => 'C',
                'path' => 'http://shishao.320.io:8090/',
                'description' => 'C语言相关',
                'image_url' => NULL,
                'created_at' => '2020-10-17 23:04:57',
                'updated_at' => '2020-10-17 23:04:57',
            ),
            11 => 
            array (
                'id' => 13,
                'parent_id' => 0,
                'name' => 'spring',
                'path' => 'http://shishao.320.io:8090/',
                'description' => 'spring框架学习',
                'image_url' => NULL,
                'created_at' => '2021-01-24 15:47:24',
                'updated_at' => '2021-01-24 15:47:24',
            ),
            12 => 
            array (
                'id' => 14,
                'parent_id' => 0,
                'name' => 'TCP/IP',
                'path' => 'http://www.shishao.site/tcp',
            'description' => 'TCP(Transmission Control Protocol)',
                'image_url' => NULL,
                'created_at' => '2021-08-17 23:49:29',
                'updated_at' => '2021-08-17 23:50:15',
            ),
            13 => 
            array (
                'id' => 15,
                'parent_id' => 0,
                'name' => 'data structure',
                'path' => 'http://www.shishao.site/dataStructure',
                'description' => '数据结构',
                'image_url' => NULL,
                'created_at' => '2021-09-20 12:57:08',
                'updated_at' => '2021-09-20 12:57:08',
            ),
            14 => 
            array (
                'id' => 16,
                'parent_id' => 0,
                'name' => 'Operating System',
                'path' => 'http://www.shishao.site/OperatingSystem',
                'description' => 'Operating System',
                'image_url' => NULL,
                'created_at' => '2021-10-07 22:31:03',
                'updated_at' => '2021-10-07 22:31:03',
            ),
            15 => 
            array (
                'id' => 17,
                'parent_id' => 0,
                'name' => 'tool',
                'path' => 'http://www.shishao.site/tool',
                'description' => '工具',
                'image_url' => NULL,
                'created_at' => '2022-01-06 11:56:19',
                'updated_at' => '2022-01-06 11:56:19',
            ),
            16 => 
            array (
                'id' => 18,
                'parent_id' => 0,
                'name' => 'book',
                'path' => 'http://www.shishao.site/book',
                'description' => '书籍',
                'image_url' => NULL,
                'created_at' => '2022-01-06 11:56:48',
                'updated_at' => '2022-01-06 11:56:48',
            ),
            17 => 
            array (
                'id' => 19,
                'parent_id' => 0,
                'name' => 'redis',
                'path' => 'http://www.shishao.site/redis',
                'description' => 'redis类别',
                'image_url' => NULL,
                'created_at' => '2022-01-06 11:58:57',
                'updated_at' => '2022-01-06 11:58:57',
            ),
        ));
        
        
    }
}