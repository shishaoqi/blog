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
                'id' => 1,
                'tag' => '随想',
                'title' => '随想随记类',
                'meta_description' => '话题不定，关于生活、工作、思想等',
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 14:41:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'tag' => 'Linux',
                'title' => 'Nemo alias voluptatem soluta natus quasi molestiae quisquam.',
                'meta_description' => 'Adipisci mollitia aut voluptatem omnis laudantium et.',
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'tag' => 'Algorithm',
                'title' => 'Aut quo blanditiis non autem pariatur rerum.',
                'meta_description' => 'Nobis dolorum odio aut eius perspiciatis aspernatur qui.',
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'tag' => 'pattern',
                'title' => 'Aut explicabo voluptate odio.',
                'meta_description' => 'Adipisci nemo sint et est quo exercitationem odio.',
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'tag' => 'Java',
                'title' => 'Beatae odio et nam aut non amet.',
                'meta_description' => 'Aperiam rem et inventore mollitia.',
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'tag' => '源码',
                'title' => '源码',
                'meta_description' => '源码分析',
                'created_at' => '2020-09-19 14:20:49',
                'updated_at' => '2020-09-19 14:20:49',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'tag' => 'go',
                'title' => 'go语言',
                'meta_description' => '所有与 Go 相关文章',
                'created_at' => '2020-09-22 14:14:10',
                'updated_at' => '2020-09-22 14:14:10',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'tag' => 'C',
                'title' => 'C语言',
                'meta_description' => '所有与 C 语言相关的文章',
                'created_at' => '2020-09-22 14:15:24',
                'updated_at' => '2020-09-22 14:15:24',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'tag' => 'makefile',
                'title' => 'makefile',
                'meta_description' => 'makefile 相关',
                'created_at' => '2020-09-26 22:27:45',
                'updated_at' => '2020-09-26 22:27:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'tag' => 'spring',
                'title' => 'spring',
                'meta_description' => 'spring 标签',
                'created_at' => '2021-01-24 15:47:49',
                'updated_at' => '2021-01-24 15:47:49',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'tag' => 'tcp',
                'title' => 'TCP',
            'meta_description' => 'TCP(Transmission Control Protocol)',
                'created_at' => '2021-08-17 23:48:22',
                'updated_at' => '2021-08-17 23:48:39',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'tag' => 'Operating System',
                'title' => 'Operating System',
                'meta_description' => 'Operating System',
                'created_at' => '2021-10-07 22:29:46',
                'updated_at' => '2021-10-07 22:29:46',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'tag' => 'tool',
                'title' => 'tool',
                'meta_description' => '工具',
                'created_at' => '2022-01-06 11:57:09',
                'updated_at' => '2022-01-06 11:57:09',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'tag' => '书籍',
                'title' => '书籍',
                'meta_description' => '推荐书籍、书单',
                'created_at' => '2022-01-06 11:57:56',
                'updated_at' => '2022-01-06 11:57:56',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'tag' => 'redis',
                'title' => 'redis',
                'meta_description' => 'redis 相关',
                'created_at' => '2022-01-06 11:58:26',
                'updated_at' => '2022-01-06 11:58:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}