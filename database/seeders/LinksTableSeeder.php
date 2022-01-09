<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ernest Stamm',
                'link' => 'http://www.hane.com/doloremque-labore-enim-omnis-voluptatem',
                'image' => 'https://lorempixel.com/640/480/?70710',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Justina Farrell I',
                'link' => 'http://www.toy.com/occaecati-est-error-ut-voluptatibus.html',
                'image' => 'https://lorempixel.com/640/480/?96800',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dr. Justina Graham',
                'link' => 'https://kiehn.net/perspiciatis-quia-est-magnam-laudantium-nobis-quaerat-amet.html',
                'image' => 'https://lorempixel.com/640/480/?81687',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Lizzie Fahey',
                'link' => 'http://www.rippin.com/',
                'image' => 'https://lorempixel.com/640/480/?28756',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bethany Smith',
                'link' => 'http://www.greenfelder.com/velit-quo-magnam-at-illum-numquam-aut',
                'image' => 'https://lorempixel.com/640/480/?73231',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Mr. Quincy Skiles',
                'link' => 'http://www.upton.com/illo-quo-voluptatibus-optio-qui-asperiores-ut-atque',
                'image' => 'https://lorempixel.com/640/480/?15149',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Prof. Libbie Price',
                'link' => 'https://www.smith.org/est-aut-ut-id',
                'image' => 'https://lorempixel.com/640/480/?37622',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Estell Reinger',
                'link' => 'http://www.kutch.info/',
                'image' => 'https://lorempixel.com/640/480/?68567',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Catalina Rau',
                'link' => 'http://klein.com/consectetur-error-officiis-qui-quis.html',
                'image' => 'https://lorempixel.com/640/480/?13073',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:24',
                'updated_at' => '2020-09-13 11:44:24',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dr. Abby Johnston Sr.',
                'link' => 'https://huels.com/aut-dolor-iste-et-fugit-dolor-molestiae-eaque-sit.html',
                'image' => 'https://lorempixel.com/640/480/?30691',
                'status' => 1,
                'created_at' => '2020-09-13 11:44:25',
                'updated_at' => '2020-09-13 11:44:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}