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
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'list_user',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            1 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'create_user',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            2 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'update_user',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            3 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'destroy_user',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            4 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'list_article',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            5 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'create_article',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            6 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'update_article',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            7 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'destroy_article',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            8 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'list_discussion',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            9 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'create_discussion',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            10 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'update_discussion',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            11 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'destroy_discussion',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            12 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'list_comment',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            13 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'update_comment',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            14 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'destroy_comment',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            15 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'list_file',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            16 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 17,
                'name' => 'create_file_folder',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            17 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 18,
                'name' => 'upload_file',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            18 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 19,
                'name' => 'destroy_file',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            19 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 20,
                'name' => 'list_tag',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            20 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 21,
                'name' => 'create_tag',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            21 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 22,
                'name' => 'update_tag',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            22 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 23,
                'name' => 'destroy_tag',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            23 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 24,
                'name' => 'list_category',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            24 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 25,
                'name' => 'create_category',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            25 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 26,
                'name' => 'update_category',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            26 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 27,
                'name' => 'destroy_category',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            27 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 28,
                'name' => 'list_link',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            28 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 29,
                'name' => 'create_link',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            29 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 30,
                'name' => 'update_link',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            30 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 31,
                'name' => 'destroy_link',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            31 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 32,
                'name' => 'list_role',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            32 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 33,
                'name' => 'create_role',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            33 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 34,
                'name' => 'update_role',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            34 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 35,
                'name' => 'update_role_permissions',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            35 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 36,
                'name' => 'destroy_role',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            36 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 37,
                'name' => 'list_visitor',
                'updated_at' => '2020-09-13 11:44:53',
            ),
            37 => 
            array (
                'created_at' => '2020-09-13 11:44:53',
                'guard_name' => 'web',
                'id' => 38,
                'name' => 'list_system_info',
                'updated_at' => '2020-09-13 11:44:53',
            ),
        ));
        
        
    }
}