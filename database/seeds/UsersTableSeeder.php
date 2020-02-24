<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iA60FPwOyqAlU/AxlK4kmusQiJbbUkmJoAfIxvRwIvS7zOXMe0M5m',
                'remember_token' => 'qPTiHb2JSoDR2U2nkPRj6tz66jZYANjZxzr8OaIOeWqY83TYyePVi8GqreAj',
                'settings' => NULL,
                'created_at' => '2020-02-22 22:13:52',
                'updated_at' => '2020-02-22 22:13:52',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Seun Ogunlana',
                'email' => 'oogunalana@ovhenergy.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sgKxNe2Y8V7cTfwfUeAdIOT4OrBqR3OW1PkiGw6MDsYoSddykjKI6',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-23 15:20:12',
                'updated_at' => '2020-02-23 15:20:12',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Nnamdi',
                'email' => 'nidika@ovhenergy.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$koAfJTChjh.l4dKVI5yU..f4iYEeiPaAGd9GJl2V9YBw8DOclu7na',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-23 21:17:49',
                'updated_at' => '2020-02-23 21:17:49',
            ),
        ));
        
        
    }
}