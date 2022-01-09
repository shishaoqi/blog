<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'list_user',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'create_user',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'update_user',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'destroy_user',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'list_article',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'create_article',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'update_article',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'destroy_article',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'list_discussion',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'create_discussion',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'update_discussion',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'destroy_discussion',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'list_comment',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'update_comment',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'destroy_comment',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'list_file',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'create_file_folder',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'upload_file',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'destroy_file',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'list_tag',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'create_tag',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'update_tag',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'destroy_tag',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'list_category',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'create_category',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'update_category',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'destroy_category',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'list_link',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'create_link',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'update_link',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'destroy_link',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'list_role',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'create_role',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'update_role',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'update_role_permissions',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'destroy_role',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'list_visitor',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'list_system_info',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 11:44:53',
                'updated_at' => '2020-09-13 11:44:53',
            ),
        ));
        
        
    }
}