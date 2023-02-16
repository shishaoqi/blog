<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'created_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
                'id' => 1,
                'meta_description' => '话题不定，关于生活、工作、思想等',
                'tag' => '随想',
                'title' => '随想随记类',
                'updated_at' => '2020-09-13 14:41:08',
            ),
            1 => 
            array (
                'created_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
                'id' => 2,
                'meta_description' => 'Adipisci mollitia aut voluptatem omnis laudantium et.',
                'tag' => 'Linux',
                'title' => 'Nemo alias voluptatem soluta natus quasi molestiae quisquam.',
                'updated_at' => '2020-09-13 11:44:24',
            ),
            2 => 
            array (
                'created_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
                'id' => 3,
                'meta_description' => 'Nobis dolorum odio aut eius perspiciatis aspernatur qui.',
                'tag' => 'Algorithm',
                'title' => 'Aut quo blanditiis non autem pariatur rerum.',
                'updated_at' => '2020-09-13 11:44:24',
            ),
            3 => 
            array (
                'created_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
                'id' => 4,
                'meta_description' => 'Adipisci nemo sint et est quo exercitationem odio.',
                'tag' => 'pattern',
                'title' => 'Aut explicabo voluptate odio.',
                'updated_at' => '2020-09-13 11:44:24',
            ),
            4 => 
            array (
                'created_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
                'id' => 5,
                'meta_description' => 'Aperiam rem et inventore mollitia.',
                'tag' => 'Java',
                'title' => 'Beatae odio et nam aut non amet.',
                'updated_at' => '2020-09-13 11:44:24',
            ),
            5 => 
            array (
                'created_at' => '2020-09-19 14:20:49',
                'deleted_at' => NULL,
                'id' => 6,
                'meta_description' => '源码分析',
                'tag' => '源码',
                'title' => '源码',
                'updated_at' => '2020-09-19 14:20:49',
            ),
            6 => 
            array (
                'created_at' => '2020-09-22 14:14:10',
                'deleted_at' => NULL,
                'id' => 7,
                'meta_description' => '所有与 Go 相关文章',
                'tag' => 'go',
                'title' => 'go语言',
                'updated_at' => '2020-09-22 14:14:10',
            ),
            7 => 
            array (
                'created_at' => '2020-09-22 14:15:24',
                'deleted_at' => NULL,
                'id' => 8,
                'meta_description' => '所有与 C 语言相关的文章',
                'tag' => 'C',
                'title' => 'C语言',
                'updated_at' => '2020-09-22 14:15:24',
            ),
            8 => 
            array (
                'created_at' => '2020-09-26 22:27:45',
                'deleted_at' => NULL,
                'id' => 9,
                'meta_description' => 'makefile 相关',
                'tag' => 'makefile',
                'title' => 'makefile',
                'updated_at' => '2020-09-26 22:27:45',
            ),
            9 => 
            array (
                'created_at' => '2021-01-24 15:47:49',
                'deleted_at' => NULL,
                'id' => 10,
                'meta_description' => 'spring 标签',
                'tag' => 'spring',
                'title' => 'spring',
                'updated_at' => '2021-01-24 15:47:49',
            ),
            10 => 
            array (
                'created_at' => '2021-08-17 23:48:22',
                'deleted_at' => NULL,
                'id' => 11,
            'meta_description' => 'TCP(Transmission Control Protocol)',
                'tag' => 'tcp',
                'title' => 'TCP',
                'updated_at' => '2021-08-17 23:48:39',
            ),
            11 => 
            array (
                'created_at' => '2021-10-07 22:29:46',
                'deleted_at' => NULL,
                'id' => 12,
                'meta_description' => 'Operating System',
                'tag' => 'Operating System',
                'title' => 'Operating System',
                'updated_at' => '2021-10-07 22:29:46',
            ),
            12 => 
            array (
                'created_at' => '2022-01-06 11:57:09',
                'deleted_at' => NULL,
                'id' => 13,
                'meta_description' => '工具',
                'tag' => 'tool',
                'title' => 'tool',
                'updated_at' => '2022-01-06 11:57:09',
            ),
            13 => 
            array (
                'created_at' => '2022-01-06 11:57:56',
                'deleted_at' => NULL,
                'id' => 14,
                'meta_description' => '推荐书籍、书单',
                'tag' => '书籍',
                'title' => '书籍',
                'updated_at' => '2022-01-06 11:57:56',
            ),
            14 => 
            array (
                'created_at' => '2022-01-06 11:58:26',
                'deleted_at' => NULL,
                'id' => 15,
                'meta_description' => 'redis 相关',
                'tag' => 'redis',
                'title' => 'redis',
                'updated_at' => '2022-01-06 11:58:26',
            ),
            15 => 
            array (
                'created_at' => '2022-01-17 11:59:45',
                'deleted_at' => NULL,
                'id' => 16,
                'meta_description' => 'alfred 应用与创建workfollow',
                'tag' => 'Alfred',
                'title' => 'Alfred',
                'updated_at' => '2022-01-17 11:59:45',
            ),
        ));
        
        
    }
}