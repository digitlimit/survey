<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-23 14:14:03',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-02-23 14:14:03',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2020-02-23 14:14:07',
                'updated_at' => '2020-02-28 00:42:23',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Input Types',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => '#000000',
                'parent_id' => 34,
                'order' => 1,
                'created_at' => '2020-02-23 14:14:52',
                'updated_at' => '2020-02-28 00:46:38',
                'route' => 'voyager.input-types.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Option Choices',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 2,
                'created_at' => '2020-02-23 14:29:16',
                'updated_at' => '2020-02-28 00:43:26',
                'route' => 'voyager.option-choices.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Option Groups',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 4,
                'created_at' => '2020-02-23 14:43:04',
                'updated_at' => '2020-02-28 00:44:00',
                'route' => 'voyager.option-groups.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Failed Jobs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 3,
                'created_at' => '2020-02-23 14:44:21',
                'updated_at' => '2020-02-28 00:44:00',
                'route' => 'voyager.failed-jobs.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Countries',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 5,
                'created_at' => '2020-02-23 14:46:58',
                'updated_at' => '2020-02-28 00:44:04',
                'route' => 'voyager.countries.index',
                'parameters' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 6,
                'created_at' => '2020-02-23 14:51:11',
                'updated_at' => '2020-02-28 00:44:06',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Answers',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 7,
                'created_at' => '2020-02-23 14:52:25',
                'updated_at' => '2020-02-28 00:44:08',
                'route' => 'voyager.answers.index',
                'parameters' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Organizations',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 8,
                'created_at' => '2020-02-23 14:52:49',
                'updated_at' => '2020-02-28 00:44:10',
                'route' => 'voyager.organizations.index',
                'parameters' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 10,
                'created_at' => '2020-02-23 14:53:34',
                'updated_at' => '2020-02-28 00:44:19',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Permissions',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 9,
                'created_at' => '2020-02-23 14:53:48',
                'updated_at' => '2020-02-28 00:44:19',
                'route' => 'voyager.permissions.index',
                'parameters' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Posts',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 11,
                'created_at' => '2020-02-23 14:54:18',
                'updated_at' => '2020-02-28 00:44:26',
                'route' => 'voyager.posts.index',
                'parameters' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Question Options',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 12,
                'created_at' => '2020-02-23 14:54:50',
                'updated_at' => '2020-02-28 00:44:29',
                'route' => 'voyager.question-options.index',
                'parameters' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Questions',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 13,
                'created_at' => '2020-02-23 14:55:45',
                'updated_at' => '2020-02-28 00:44:31',
                'route' => 'voyager.questions.index',
                'parameters' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'menu_id' => 1,
                'title' => 'States',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 14,
                'created_at' => '2020-02-23 14:56:11',
                'updated_at' => '2020-02-28 00:44:33',
                'route' => 'voyager.states.index',
                'parameters' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'menu_id' => 1,
                'title' => 'Survey Comments',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 15,
                'created_at' => '2020-02-23 14:56:39',
                'updated_at' => '2020-02-28 00:44:39',
                'route' => 'voyager.survey-comments.index',
                'parameters' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'menu_id' => 1,
                'title' => 'Survey Headers',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 16,
                'created_at' => '2020-02-23 14:57:00',
                'updated_at' => '2020-02-28 00:44:44',
                'route' => 'voyager.survey-headers.index',
                'parameters' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'menu_id' => 1,
                'title' => 'Survey Sections',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 17,
                'created_at' => '2020-02-23 14:57:21',
                'updated_at' => '2020-02-28 00:44:47',
                'route' => 'voyager.survey-sections.index',
                'parameters' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'menu_id' => 1,
                'title' => 'Translations',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 20,
                'created_at' => '2020-02-23 14:58:00',
                'updated_at' => '2020-02-28 00:44:53',
                'route' => 'voyager.translations.index',
                'parameters' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'menu_id' => 1,
                'title' => 'Unit Of Measures',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => NULL,
                'parent_id' => 34,
                'order' => 18,
                'created_at' => '2020-02-23 14:59:26',
                'updated_at' => '2020-02-28 00:44:51',
                'route' => 'voyager.unit-of-measures.index',
                'parameters' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'menu_id' => 1,
                'title' => 'User Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 19,
                'created_at' => '2020-02-23 14:59:53',
                'updated_at' => '2020-02-28 00:44:53',
                'route' => 'voyager.user-roles.index',
                'parameters' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'menu_id' => 1,
                'title' => 'User Survey Sections',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 21,
                'created_at' => '2020-02-23 15:00:31',
                'updated_at' => '2020-02-28 00:44:54',
                'route' => 'voyager.user-survey-sections.index',
                'parameters' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'menu_id' => 1,
                'title' => 'Stations',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 34,
                'order' => 22,
                'created_at' => '2020-02-23 21:30:42',
                'updated_at' => '2020-02-28 00:44:58',
                'route' => 'voyager.stations.index',
                'parameters' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'menu_id' => 1,
                'title' => 'Surveys',
                'url' => '#',
                'target' => '_self',
                'icon_class' => 'voyager-pie-chart',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-02-28 00:42:12',
                'updated_at' => '2020-02-28 00:42:49',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}