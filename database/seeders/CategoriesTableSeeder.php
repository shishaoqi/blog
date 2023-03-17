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
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 1,
                'image_url' => NULL,
                'name' => '随想',
                'parent_id' => 0,
                'path' => 'http://www.fahey.org/',
                'updated_at' => '2020-09-13 14:13:58',
            ),
            1 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 2,
                'image_url' => NULL,
                'name' => 'PHP',
                'parent_id' => 0,
                'path' => 'https://www.langosh.biz/suscipit-maiores-excepturi-sed-vitae-ullam',
                'updated_at' => '2020-09-13 14:15:24',
            ),
            2 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 3,
                'image_url' => NULL,
                'name' => 'Laravel',
                'parent_id' => 0,
                'path' => 'http://www.tremblay.net/qui-reprehenderit-mollitia-est-est',
                'updated_at' => '2020-09-13 14:14:57',
            ),
            3 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 4,
                'image_url' => NULL,
                'name' => 'C&GO',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/C&GO',
                'updated_at' => '2020-09-13 11:44:11',
            ),
            4 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 5,
                'image_url' => NULL,
                'name' => 'Redis',
                'parent_id' => 0,
                'path' => 'http://kshlerin.com/non-ducimus-tempora-necessitatibus-dolor-suscipit',
                'updated_at' => '2020-09-13 14:16:24',
            ),
            5 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 6,
                'image_url' => NULL,
                'name' => 'Docker',
                'parent_id' => 0,
                'path' => 'http://www.kessler.com/aut-fuga-ex-voluptates.html',
                'updated_at' => '2020-09-13 14:16:55',
            ),
            6 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 7,
                'image_url' => NULL,
                'name' => 'Mysql',
                'parent_id' => 0,
                'path' => 'http://www.towne.biz/voluptatem-voluptatum-architecto-delectus.html',
                'updated_at' => '2020-09-13 14:17:50',
            ),
            7 => 
            array (
                'created_at' => '2020-09-13 11:44:11',
                'description' => NULL,
                'id' => 8,
                'image_url' => NULL,
                'name' => 'Linux',
                'parent_id' => 0,
                'path' => 'https://www.schiller.org/aliquam-culpa-unde-fugit-non-excepturi',
                'updated_at' => '2020-09-13 14:18:15',
            ),
            8 => 
            array (
                'created_at' => '2020-09-13 11:44:12',
                'description' => NULL,
                'id' => 9,
                'image_url' => NULL,
                'name' => 'Java',
                'parent_id' => 0,
                'path' => 'http://shishao.320.io:8090/java',
                'updated_at' => '2020-09-13 14:41:51',
            ),
            9 => 
            array (
                'created_at' => '2020-09-13 11:44:12',
                'description' => NULL,
                'id' => 10,
                'image_url' => NULL,
                'name' => 'algorithm',
                'parent_id' => 0,
                'path' => 'http://www.swaniawski.info/',
                'updated_at' => '2020-09-13 14:19:41',
            ),
            10 => 
            array (
                'created_at' => '2020-09-26 22:28:37',
                'description' => 'shell 学习与笔记相关',
                'id' => 11,
                'image_url' => NULL,
                'name' => 'shell',
                'parent_id' => 0,
                'path' => 'http://shishao.320.io:8090/',
                'updated_at' => '2020-09-26 22:28:50',
            ),
            11 => 
            array (
                'created_at' => '2020-10-17 23:04:57',
                'description' => 'C语言相关',
                'id' => 12,
                'image_url' => NULL,
                'name' => 'C',
                'parent_id' => 0,
                'path' => 'http://shishao.320.io:8090/',
                'updated_at' => '2020-10-17 23:04:57',
            ),
            12 => 
            array (
                'created_at' => '2021-01-24 15:47:24',
                'description' => 'spring框架学习',
                'id' => 13,
                'image_url' => NULL,
                'name' => 'spring',
                'parent_id' => 0,
                'path' => 'http://shishao.320.io:8090/',
                'updated_at' => '2021-01-24 15:47:24',
            ),
            13 => 
            array (
                'created_at' => '2021-08-17 23:49:29',
            'description' => 'TCP(Transmission Control Protocol)',
                'id' => 14,
                'image_url' => NULL,
                'name' => 'TCP/IP',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/tcp',
                'updated_at' => '2021-08-17 23:50:15',
            ),
            14 => 
            array (
                'created_at' => '2021-09-20 12:57:08',
                'description' => '数据结构',
                'id' => 15,
                'image_url' => NULL,
                'name' => 'data structure',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/dataStructure',
                'updated_at' => '2021-09-20 12:57:08',
            ),
            15 => 
            array (
                'created_at' => '2021-10-07 22:31:03',
                'description' => 'Operating System',
                'id' => 16,
                'image_url' => NULL,
                'name' => 'Operating System',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/OperatingSystem',
                'updated_at' => '2021-10-07 22:31:03',
            ),
            16 => 
            array (
                'created_at' => '2022-01-06 11:56:19',
                'description' => '工具',
                'id' => 17,
                'image_url' => NULL,
                'name' => 'tool',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/tool',
                'updated_at' => '2022-01-06 11:56:19',
            ),
            17 => 
            array (
                'created_at' => '2022-01-06 11:56:48',
                'description' => '书籍',
                'id' => 18,
                'image_url' => NULL,
                'name' => 'book',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/book',
                'updated_at' => '2022-01-06 11:56:48',
            ),
            18 => 
            array (
                'created_at' => '2022-01-06 11:58:57',
                'description' => 'redis类别',
                'id' => 19,
                'image_url' => NULL,
                'name' => 'redis',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/redis',
                'updated_at' => '2022-01-06 11:58:57',
            ),
            19 => 
            array (
                'created_at' => '2022-01-17 12:00:22',
                'description' => 'alfred学习与使用',
                'id' => 20,
                'image_url' => NULL,
                'name' => 'Alfred',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/alfred',
                'updated_at' => '2022-01-17 12:00:22',
            ),
            20 => 
            array (
                'created_at' => '2023-02-09 14:43:22',
                'description' => '学习新知识，重新学习已经学过（费）的东西',
                'id' => 21,
                'image_url' => NULL,
                'name' => '学习',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/学习',
                'updated_at' => '2023-02-09 14:43:22',
            ),
            21 => 
            array (
                'created_at' => '2023-02-20 17:09:17',
                'description' => '所有 goland 相关',
                'id' => 22,
                'image_url' => NULL,
                'name' => 'golang',
                'parent_id' => 0,
                'path' => 'http://www.shishao.site/golang',
                'updated_at' => '2023-02-20 17:09:17',
            ),
        ));
        
        
    }
}