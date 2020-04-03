<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MenusTableSeeder::class);

        $this->call(SurveyCommentsTableSeeder::class);
        $this->call(SurveyHeadersTableSeeder::class);
        $this->call(SurveySectionsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UnitOfMeasuresTableSeeder::class);
        $this->call(UserSurveySectionsTableSeeder::class);
        $this->call(OptionGroupsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(StationsTableSeeder::class);

        $this->call(PostsTableSeeder::class);
        $this->call(QuestionOptionsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(InputTypesTableSeeder::class);
        $this->call(OptionChoicesTableSeeder::class);
        //$this->call(StationSurveyAnswersTableSeeder::class);

        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
