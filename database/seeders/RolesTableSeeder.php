<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => '管理员',
                'guard_name' => 'web',
                'created_at' => '2020-09-13 14:04:41',
                'updated_at' => '2020-09-13 14:04:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '作者',
                'guard_name' => 'api',
                'created_at' => '2020-09-13 14:09:21',
                'updated_at' => '2020-09-13 14:09:21',
            ),
        ));
        
        
    }
}