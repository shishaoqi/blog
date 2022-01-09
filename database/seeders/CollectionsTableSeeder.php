<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('collections')->delete();
        
        \DB::table('collections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'name' => '一起学 C 与 Go',
                'path' => 'http://www.shishao.site',
                'description' => '温习 C 语句，学习新语言 Go',
                'image_url' => NULL,
                'created_at' => '2020-09-19 10:09:34',
                'updated_at' => '2021-07-13 15:11:58',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'name' => 'Redis 源码拆解',
                'path' => 'http://www.shishao.site',
                'description' => '一个对 redis 源码进行按数据结构与层次升级的方式来吃透 redis 原理',
                'image_url' => NULL,
                'created_at' => '2020-09-19 10:11:14',
                'updated_at' => '2021-07-13 15:11:53',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'name' => '跟我一起写 Makefile',
                'path' => 'http://www.shishao.site',
                'description' => '走进大型项目的基石',
                'image_url' => NULL,
                'created_at' => '2020-09-20 04:56:36',
                'updated_at' => '2021-07-13 15:11:48',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 0,
                'name' => '数据结构和算法',
                'path' => 'http://www.shishao.site',
                'description' => '融汇各个知识点，包含操作系统、计算机组成原理、汇编、不同编程语言等',
                'image_url' => NULL,
                'created_at' => '2020-09-27 00:20:03',
                'updated_at' => '2021-09-20 12:54:25',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 0,
                'name' => 'spring 学习笔记',
                'path' => 'http://www.shishao.site',
                'description' => 'spring 学习笔记',
                'image_url' => NULL,
                'created_at' => '2021-01-24 15:46:08',
                'updated_at' => '2021-07-13 15:11:37',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 0,
                'name' => '我的C语言库',
                'path' => 'http://www.shishao.site',
                'description' => NULL,
                'image_url' => NULL,
                'created_at' => '2021-07-13 15:11:21',
                'updated_at' => '2021-07-13 15:11:21',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 0,
                'name' => '网络',
                'path' => 'http://www.shishao.site/network',
                'description' => '网络知识',
                'image_url' => NULL,
                'created_at' => '2021-08-17 23:43:42',
                'updated_at' => '2021-08-17 23:43:42',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'name' => '操作系统',
                'path' => 'http://www.shishao.site/systemOperation',
                'description' => '操作系统、深入理解计算机系统',
                'image_url' => NULL,
                'created_at' => '2021-09-04 17:19:13',
                'updated_at' => '2021-09-04 17:19:13',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 0,
                'name' => '6.828: Operating System Engineering',
                'path' => 'http://www.shishao.site/6.828',
                'description' => '6.828: Operating System Engineering',
                'image_url' => NULL,
                'created_at' => '2021-10-07 22:29:05',
                'updated_at' => '2021-10-07 22:29:05',
            ),
        ));
        
        
    }
}