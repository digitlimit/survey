<?php

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
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'bm',
                'display_name' => 'Branch Manager',
                'created_at' => '2020-02-23 21:06:39',
                'updated_at' => '2020-02-23 21:06:39',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'cmo',
                'display_name' => 'CMO',
                'created_at' => '2020-02-23 21:06:39',
                'updated_at' => '2020-02-23 21:06:39',
            ),
        ));
        
        
    }
}