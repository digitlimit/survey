<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\VoyagerRoleController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 22:51:55',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'input_types',
                'slug' => 'input-types',
                'display_name_singular' => 'Input Type',
                'display_name_plural' => 'Input Types',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\InputType',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\InputTypeController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-23 14:14:51',
                'updated_at' => '2020-02-23 14:28:29',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'option_choices',
                'slug' => 'option-choices',
                'display_name_singular' => 'Option Choice',
                'display_name_plural' => 'Option Choices',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\OptionChoice',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\OptionChoiceController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-23 14:38:25',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'option_groups',
                'slug' => 'option-groups',
                'display_name_singular' => 'Option Group',
                'display_name_plural' => 'Option Groups',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\OptionGroup',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\OptionGroupController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-23 14:43:04',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'failed_jobs',
                'slug' => 'failed-jobs',
                'display_name_singular' => 'Failed Job',
                'display_name_plural' => 'Failed Jobs',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\FailedJob',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-23 14:44:21',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'countries',
                'slug' => 'countries',
                'display_name_singular' => 'Country',
                'display_name_plural' => 'Countries',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\Country',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-23 14:47:31',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-23 14:51:11',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'answers',
                'slug' => 'answers',
                'display_name_singular' => 'Answer',
                'display_name_plural' => 'Answers',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\Answer',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\AnswerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-23 14:52:25',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'organizations',
                'slug' => 'organizations',
                'display_name_singular' => 'Organization',
                'display_name_plural' => 'Organizations',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Organization',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-23 14:52:49',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-23 14:53:34',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'permissions',
                'slug' => 'permissions',
                'display_name_singular' => 'Permission',
                'display_name_plural' => 'Permissions',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Permission',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-23 14:53:48',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-23 14:54:18',
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'question_options',
                'slug' => 'question-options',
                'display_name_singular' => 'Question Option',
                'display_name_plural' => 'Question Options',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\QuestionOption',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\QuestionOptionController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-23 14:54:50',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'questions',
                'slug' => 'questions',
                'display_name_singular' => 'Question',
                'display_name_plural' => 'Questions',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\Question',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\QuestionController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-23 14:55:45',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'states',
                'slug' => 'states',
                'display_name_singular' => 'State',
                'display_name_plural' => 'States',
                'icon' => NULL,
                'model_name' => 'App\\Models\\State',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\StateController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-23 14:56:11',
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'survey_comments',
                'slug' => 'survey-comments',
                'display_name_singular' => 'Survey Comment',
                'display_name_plural' => 'Survey Comments',
                'icon' => NULL,
                'model_name' => 'App\\Models\\SurveyComment',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\SurveyCommentController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-23 14:56:39',
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'survey_headers',
                'slug' => 'survey-headers',
                'display_name_singular' => 'Survey Header',
                'display_name_plural' => 'Survey Headers',
                'icon' => NULL,
                'model_name' => 'App\\Models\\SurveyHeader',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\SurveyHeaderController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-23 23:13:35',
            ),
            19 => 
            array (
                'id' => 24,
                'name' => 'survey_sections',
                'slug' => 'survey-sections',
                'display_name_singular' => 'Survey Section',
                'display_name_plural' => 'Survey Sections',
                'icon' => NULL,
                'model_name' => 'App\\Models\\SurveySection',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\SurveySectionController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-23 14:57:21',
            ),
            20 => 
            array (
                'id' => 25,
                'name' => 'translations',
                'slug' => 'translations',
                'display_name_singular' => 'Translation',
                'display_name_plural' => 'Translations',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-23 14:58:00',
            ),
            21 => 
            array (
                'id' => 26,
                'name' => 'unit_of_measures',
                'slug' => 'unit-of-measures',
                'display_name_singular' => 'Unit Of Measure',
                'display_name_plural' => 'Unit Of Measures',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\UnitOfMeasure',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\UnitOfMeasureController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-23 14:59:26',
            ),
            22 => 
            array (
                'id' => 27,
                'name' => 'user_roles',
                'slug' => 'user-roles',
                'display_name_singular' => 'User Role',
                'display_name_plural' => 'User Roles',
                'icon' => NULL,
                'model_name' => 'App\\Models\\UserRole',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\UserRoleController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-23 14:59:53',
            ),
            23 => 
            array (
                'id' => 28,
                'name' => 'user_survey_sections',
                'slug' => 'user-survey-sections',
                'display_name_singular' => 'User Survey Section',
                'display_name_plural' => 'User Survey Sections',
                'icon' => NULL,
                'model_name' => 'App\\Models\\UserSurveySection',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\SurveySectionController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-23 15:00:31',
            ),
            24 => 
            array (
                'id' => 29,
                'name' => 'stations',
                'slug' => 'stations',
                'display_name_singular' => 'Station',
                'display_name_plural' => 'Stations',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Station',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Admin\\StationController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-23 21:56:08',
            ),
        ));
        
        
    }
}