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
                'remember_token' => '9VJUavvesQXwFaRGbwuW8Hc0y5tAYpYNUXm7C7dVG4SLmMmUMcxwE9xA6TWt',
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
                'password' => '$2y$10$j6P3Vf8fnqbuIXP1T7qYCeH6eyvN6vLSK9UIkFzZRYgNAdlYtYbCm',
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
                'password' => '$2y$10$5Ce47zxYR13D5FyhSoQZau5DkpUpOcTs9MI4S.d17/RukVQsV57d.',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-23 21:17:49',
                'updated_at' => '2020-02-23 21:17:49',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 4,
                'name' => 'Lilian',
                'email' => 'likokwu@ovhenergy.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cFG6Q.LUjc50C9mYsabt5O93x3ELZAJiCHlNdMQ2c0ujfX5Ysws2O',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-23 21:17:49',
                'updated_at' => '2020-02-23 21:17:49',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Henry',
                'email' => 'emills@ovhenergy.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ynNP0jqcCyWvaDxU7UbineT4warLluCi2/3itqR.QT/liZosep9Hu',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2020-02-28 01:16:48',
                'updated_at' => '2020-02-28 01:16:48',
            ),
        ));
        
        
    }
}