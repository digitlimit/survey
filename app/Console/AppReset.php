<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File, DB;

class AppReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will wipe and reload database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if(!app()->environment('local'))
        {
            $this->info('Local environment not dictated');
            return false;
        }


        //clear compiled
        $this->line('');
        $this->comment('Running clear-compiled');
        $this->line('------------------');
        $this->call('clear-compiled');

        //clear cache
        $this->line('');
        $this->comment('Running cache:clear');
        $this->line('------------------');
        $this->call('cache:clear');

        //clear views
        $this->line('');
        $this->comment('Running view:clear');
        $this->line('------------------');
        $this->call('view:clear');

        //clear views
        $this->line('');
        $this->comment('Running route:clear');
        $this->line('------------------');
        $this->call('route:clear');

        //clear views
        $this->line('');
        $this->comment('Running config:clear');
        $this->line('------------------');
        $this->call('config:clear');

        //clear views
        $this->line('');
        $this->comment('Running php artisan optimize');
        $this->line('------------------');
        $this->call('optimize');

        $system_tables = implode(',', [
            'users',
            'user_roles',
        ]);

        $voyager_tables = implode(',',[
            'categories',
            'data_rows',
            'data_types',
            'input_types',
            'menu_items',
            'menus',
            'pages',
            'permission_role',
            'permissions',
            'posts',
            'roles',
            'settings',
            'translations'
        ]);

        $survey_tables = implode(',',[
            'answers',
            'input_types',
            'option_choices',
            'option_groups',
            'organizations',
            'question_options',
            'questions',
            'survey_comments',
            'survey_headers',
            'survey_sections',
            'unit_of_measures',
            'user_survey_sections',
        ]);

        //seed all data
        $this->line('');
        $this->comment('Running iseed for system tables');
        $this->line('------------------');
//        $this->call("iseed", ['tables' => $system_tables, '--force' => true]);

        //seed all data
        $this->line('');
        $this->comment('Running iseed for voyager tables');
        $this->line('------------------');
//        $this->call("iseed", ['tables' => $voyager_tables, '--force' => true]);

        //seed all data
        $this->line('');
        $this->comment('Running iseed for survey tables');
        $this->line('------------------');
//        $this->call("iseed", ['tables' => $survey_tables, '--force' => true]);

        //clear database and reseed
        $this->line('');
        $this->comment('Running migrate:fresh --seed');
        $this->line('------------------');
        $this->call('migrate:fresh', ['--seed'=> true]);

        $this->line('');
        $this->comment('Running Voyager dummy');
        $this->line('------------------');
        $this->call('voyager:install', ['--with-dummy'=> true]);



//        $this->line('');
//        $this->comment('Running queue:restart');
//        $this->line('------------------');
//        $this->call('queue:restart');

        //clear logs
        $this->line('');
        $this->comment('Clearing '.storage_path('logs'));
        $this->line('------------------');
        File::cleanDirectory(storage_path('logs'));


//        $this->line('');
//        $this->info('Dropping any existing Scout Index for Notices');
//        $this->line('------------------');
//        $this->call('scout:mysql-index', ['model' => 'App\\Notice', '--drop'=> true]);

//        $this->line('');
//        $this->info('Creating Scout Index for Notices');
//        $this->line('------------------');
//        $this->call('scout:mysql-index', ['model' => 'App\\Notice']);

        //saving map
        $this->line('');
        $this->info('App reset completed!');
        $this->line('------------------');
    }
}
