<?php

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
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-02-23 14:14:07',
                'updated_at' => '2020-02-23 14:14:07',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_input_types',
                'table_name' => 'input_types',
                'created_at' => '2020-02-23 14:14:51',
                'updated_at' => '2020-02-23 14:14:51',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_input_types',
                'table_name' => 'input_types',
                'created_at' => '2020-02-23 14:14:51',
                'updated_at' => '2020-02-23 14:14:51',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_input_types',
                'table_name' => 'input_types',
                'created_at' => '2020-02-23 14:14:51',
                'updated_at' => '2020-02-23 14:14:51',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_input_types',
                'table_name' => 'input_types',
                'created_at' => '2020-02-23 14:14:52',
                'updated_at' => '2020-02-23 14:14:52',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_input_types',
                'table_name' => 'input_types',
                'created_at' => '2020-02-23 14:14:52',
                'updated_at' => '2020-02-23 14:14:52',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_option_choices',
                'table_name' => 'option_choices',
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-23 14:29:16',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_option_choices',
                'table_name' => 'option_choices',
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-23 14:29:16',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_option_choices',
                'table_name' => 'option_choices',
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-23 14:29:16',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_option_choices',
                'table_name' => 'option_choices',
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-23 14:29:16',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_option_choices',
                'table_name' => 'option_choices',
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-23 14:29:16',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_option_groups',
                'table_name' => 'option_groups',
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-23 14:43:04',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_option_groups',
                'table_name' => 'option_groups',
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-23 14:43:04',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_option_groups',
                'table_name' => 'option_groups',
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-23 14:43:04',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_option_groups',
                'table_name' => 'option_groups',
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-23 14:43:04',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_option_groups',
                'table_name' => 'option_groups',
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-23 14:43:04',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-23 14:44:21',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-23 14:44:21',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-23 14:44:21',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-23 14:44:21',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_failed_jobs',
                'table_name' => 'failed_jobs',
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-23 14:44:21',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_countries',
                'table_name' => 'countries',
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-23 14:46:58',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_countries',
                'table_name' => 'countries',
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-23 14:46:58',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_countries',
                'table_name' => 'countries',
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-23 14:46:58',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_countries',
                'table_name' => 'countries',
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-23 14:46:58',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_countries',
                'table_name' => 'countries',
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-23 14:46:58',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-23 14:51:11',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-23 14:51:11',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-23 14:51:11',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-23 14:51:11',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-23 14:51:11',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_answers',
                'table_name' => 'answers',
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-23 14:52:25',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_answers',
                'table_name' => 'answers',
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-23 14:52:25',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_answers',
                'table_name' => 'answers',
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-23 14:52:25',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_answers',
                'table_name' => 'answers',
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-23 14:52:25',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_answers',
                'table_name' => 'answers',
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-23 14:52:25',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_organizations',
                'table_name' => 'organizations',
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-23 14:52:49',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_organizations',
                'table_name' => 'organizations',
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-23 14:52:49',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_organizations',
                'table_name' => 'organizations',
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-23 14:52:49',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_organizations',
                'table_name' => 'organizations',
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-23 14:52:49',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_organizations',
                'table_name' => 'organizations',
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-23 14:52:49',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-23 14:53:34',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-23 14:53:34',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-23 14:53:34',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-23 14:53:34',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-23 14:53:34',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'browse_permissions',
                'table_name' => 'permissions',
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-23 14:53:48',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'read_permissions',
                'table_name' => 'permissions',
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-23 14:53:48',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'edit_permissions',
                'table_name' => 'permissions',
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-23 14:53:48',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'add_permissions',
                'table_name' => 'permissions',
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-23 14:53:48',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'delete_permissions',
                'table_name' => 'permissions',
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-23 14:53:48',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-23 14:54:18',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-23 14:54:18',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-23 14:54:18',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-23 14:54:18',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-23 14:54:18',
            ),
            81 => 
            array (
                'id' => 82,
                'key' => 'browse_question_options',
                'table_name' => 'question_options',
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-23 14:54:50',
            ),
            82 => 
            array (
                'id' => 83,
                'key' => 'read_question_options',
                'table_name' => 'question_options',
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-23 14:54:50',
            ),
            83 => 
            array (
                'id' => 84,
                'key' => 'edit_question_options',
                'table_name' => 'question_options',
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-23 14:54:50',
            ),
            84 => 
            array (
                'id' => 85,
                'key' => 'add_question_options',
                'table_name' => 'question_options',
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-23 14:54:50',
            ),
            85 => 
            array (
                'id' => 86,
                'key' => 'delete_question_options',
                'table_name' => 'question_options',
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-23 14:54:50',
            ),
            86 => 
            array (
                'id' => 87,
                'key' => 'browse_questions',
                'table_name' => 'questions',
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-23 14:55:45',
            ),
            87 => 
            array (
                'id' => 88,
                'key' => 'read_questions',
                'table_name' => 'questions',
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-23 14:55:45',
            ),
            88 => 
            array (
                'id' => 89,
                'key' => 'edit_questions',
                'table_name' => 'questions',
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-23 14:55:45',
            ),
            89 => 
            array (
                'id' => 90,
                'key' => 'add_questions',
                'table_name' => 'questions',
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-23 14:55:45',
            ),
            90 => 
            array (
                'id' => 91,
                'key' => 'delete_questions',
                'table_name' => 'questions',
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-23 14:55:45',
            ),
            91 => 
            array (
                'id' => 92,
                'key' => 'browse_states',
                'table_name' => 'states',
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-23 14:56:11',
            ),
            92 => 
            array (
                'id' => 93,
                'key' => 'read_states',
                'table_name' => 'states',
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-23 14:56:11',
            ),
            93 => 
            array (
                'id' => 94,
                'key' => 'edit_states',
                'table_name' => 'states',
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-23 14:56:11',
            ),
            94 => 
            array (
                'id' => 95,
                'key' => 'add_states',
                'table_name' => 'states',
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-23 14:56:11',
            ),
            95 => 
            array (
                'id' => 96,
                'key' => 'delete_states',
                'table_name' => 'states',
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-23 14:56:11',
            ),
            96 => 
            array (
                'id' => 97,
                'key' => 'browse_survey_comments',
                'table_name' => 'survey_comments',
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-23 14:56:39',
            ),
            97 => 
            array (
                'id' => 98,
                'key' => 'read_survey_comments',
                'table_name' => 'survey_comments',
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-23 14:56:39',
            ),
            98 => 
            array (
                'id' => 99,
                'key' => 'edit_survey_comments',
                'table_name' => 'survey_comments',
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-23 14:56:39',
            ),
            99 => 
            array (
                'id' => 100,
                'key' => 'add_survey_comments',
                'table_name' => 'survey_comments',
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-23 14:56:39',
            ),
            100 => 
            array (
                'id' => 101,
                'key' => 'delete_survey_comments',
                'table_name' => 'survey_comments',
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-23 14:56:39',
            ),
            101 => 
            array (
                'id' => 102,
                'key' => 'browse_survey_headers',
                'table_name' => 'survey_headers',
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-23 14:57:00',
            ),
            102 => 
            array (
                'id' => 103,
                'key' => 'read_survey_headers',
                'table_name' => 'survey_headers',
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-23 14:57:00',
            ),
            103 => 
            array (
                'id' => 104,
                'key' => 'edit_survey_headers',
                'table_name' => 'survey_headers',
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-23 14:57:00',
            ),
            104 => 
            array (
                'id' => 105,
                'key' => 'add_survey_headers',
                'table_name' => 'survey_headers',
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-23 14:57:00',
            ),
            105 => 
            array (
                'id' => 106,
                'key' => 'delete_survey_headers',
                'table_name' => 'survey_headers',
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-23 14:57:00',
            ),
            106 => 
            array (
                'id' => 107,
                'key' => 'browse_survey_sections',
                'table_name' => 'survey_sections',
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-23 14:57:21',
            ),
            107 => 
            array (
                'id' => 108,
                'key' => 'read_survey_sections',
                'table_name' => 'survey_sections',
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-23 14:57:21',
            ),
            108 => 
            array (
                'id' => 109,
                'key' => 'edit_survey_sections',
                'table_name' => 'survey_sections',
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-23 14:57:21',
            ),
            109 => 
            array (
                'id' => 110,
                'key' => 'add_survey_sections',
                'table_name' => 'survey_sections',
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-23 14:57:21',
            ),
            110 => 
            array (
                'id' => 111,
                'key' => 'delete_survey_sections',
                'table_name' => 'survey_sections',
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-23 14:57:21',
            ),
            111 => 
            array (
                'id' => 112,
                'key' => 'browse_translations',
                'table_name' => 'translations',
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-23 14:58:00',
            ),
            112 => 
            array (
                'id' => 113,
                'key' => 'read_translations',
                'table_name' => 'translations',
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-23 14:58:00',
            ),
            113 => 
            array (
                'id' => 114,
                'key' => 'edit_translations',
                'table_name' => 'translations',
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-23 14:58:00',
            ),
            114 => 
            array (
                'id' => 115,
                'key' => 'add_translations',
                'table_name' => 'translations',
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-23 14:58:00',
            ),
            115 => 
            array (
                'id' => 116,
                'key' => 'delete_translations',
                'table_name' => 'translations',
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-23 14:58:00',
            ),
            116 => 
            array (
                'id' => 117,
                'key' => 'browse_unit_of_measures',
                'table_name' => 'unit_of_measures',
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-23 14:59:26',
            ),
            117 => 
            array (
                'id' => 118,
                'key' => 'read_unit_of_measures',
                'table_name' => 'unit_of_measures',
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-23 14:59:26',
            ),
            118 => 
            array (
                'id' => 119,
                'key' => 'edit_unit_of_measures',
                'table_name' => 'unit_of_measures',
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-23 14:59:26',
            ),
            119 => 
            array (
                'id' => 120,
                'key' => 'add_unit_of_measures',
                'table_name' => 'unit_of_measures',
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-23 14:59:26',
            ),
            120 => 
            array (
                'id' => 121,
                'key' => 'delete_unit_of_measures',
                'table_name' => 'unit_of_measures',
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-23 14:59:26',
            ),
            121 => 
            array (
                'id' => 122,
                'key' => 'browse_user_roles',
                'table_name' => 'user_roles',
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-23 14:59:53',
            ),
            122 => 
            array (
                'id' => 123,
                'key' => 'read_user_roles',
                'table_name' => 'user_roles',
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-23 14:59:53',
            ),
            123 => 
            array (
                'id' => 124,
                'key' => 'edit_user_roles',
                'table_name' => 'user_roles',
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-23 14:59:53',
            ),
            124 => 
            array (
                'id' => 125,
                'key' => 'add_user_roles',
                'table_name' => 'user_roles',
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-23 14:59:53',
            ),
            125 => 
            array (
                'id' => 126,
                'key' => 'delete_user_roles',
                'table_name' => 'user_roles',
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-23 14:59:53',
            ),
            126 => 
            array (
                'id' => 127,
                'key' => 'browse_user_survey_sections',
                'table_name' => 'user_survey_sections',
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-23 15:00:31',
            ),
            127 => 
            array (
                'id' => 128,
                'key' => 'read_user_survey_sections',
                'table_name' => 'user_survey_sections',
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-23 15:00:31',
            ),
            128 => 
            array (
                'id' => 129,
                'key' => 'edit_user_survey_sections',
                'table_name' => 'user_survey_sections',
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-23 15:00:31',
            ),
            129 => 
            array (
                'id' => 130,
                'key' => 'add_user_survey_sections',
                'table_name' => 'user_survey_sections',
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-23 15:00:31',
            ),
            130 => 
            array (
                'id' => 131,
                'key' => 'delete_user_survey_sections',
                'table_name' => 'user_survey_sections',
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-23 15:00:31',
            ),
            131 => 
            array (
                'id' => 132,
                'key' => 'browse_stations',
                'table_name' => 'stations',
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-23 21:30:42',
            ),
            132 => 
            array (
                'id' => 133,
                'key' => 'read_stations',
                'table_name' => 'stations',
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-23 21:30:42',
            ),
            133 => 
            array (
                'id' => 134,
                'key' => 'edit_stations',
                'table_name' => 'stations',
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-23 21:30:42',
            ),
            134 => 
            array (
                'id' => 135,
                'key' => 'add_stations',
                'table_name' => 'stations',
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-23 21:30:42',
            ),
            135 => 
            array (
                'id' => 136,
                'key' => 'delete_stations',
                'table_name' => 'stations',
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-23 21:30:42',
            ),
            136 => 
            array (
                'id' => 137,
                'key' => 'rate_stations',
                'table_name' => 'stations',
                'created_at' => '2020-02-23 22:32:42',
                'updated_at' => '2020-02-23 22:32:42',
            ),
        ));
        
        
    }
}