<?php namespace App\Http\Composers;
use App\Models\Station;
use App\Models\StationSurvey;
use App\Models\StationSurveyAnswer;
use App\Models\SurveyHeader;
use Illuminate\View\View;
use App\Charts\Rating as RateChart;
use App\Models\Answer;

class DashboardComposer {

    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $stations = StationSurveyAnswer::query()
            ->join('stations AS s', 'station_survey_answers.station_id', '=', 's.id')
            ->join('survey_headers AS sh', 'station_survey_answers.survey_header_id', '=', 'sh.id')
            ->join('users AS u', 'station_survey_answers.user_id', '=', 'u.id')
            ->join('roles AS r', 'u.role_id', '=', 'r.id')
            ->join('option_choices AS oc', 'station_survey_answers.option_choice_id', '=', 'oc.id')
            ->join('questions AS q', 'station_survey_answers.question_id', '=', 'q.id')
            ->join('survey_sections AS ss', 'q.survey_section_id', '=', 'ss.id')

            ->selectRaw("
                s.id AS station_id, s.name AS station_name, s.address AS station_address,
                s.email AS station_email, s.phone AS station_phone,
                
                sh.id AS survey_header_id, sh.survey_name AS survey_name, sh.instructions AS survey_instructions,
                
                u.name AS user_name, u.email AS user_email, r.name AS user_role,
                
                oc.option_choice_name AS answer, oc.weight AS answer_weight,
                
                ss.section_name, ss.section_title, ss.survey_section_id
            ")
            ->get()
            ->groupBy('station_id');

        if(count($stations)){

            $sections = [];
            $count = 0;
            $total = new RateChart;

            foreach($stations as $answers)
            {
                //station name
                $station_name = $answers[0]->station_name;

                //station breakdown chart
                $sections[$station_name] = new RateChart;

                foreach($answers->groupBy('section_name') as $section_name => $ans) {
                    $sections[$station_name]->dataset($section_name, 'bar', [$ans->sum('answer_weight')]);
                }

                $total->dataset($station_name, 'pie', [$answers->sum('answer_weight')]);
            }

            $view->with('total', $total)
                ->with('sections', $sections);
        }else{
            $view->with('total', null)
                ->with('sections', null);
        }
    }
}