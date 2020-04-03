<?php namespace App\Helpers;

use App\Charts\RatingChartjsChart;
use App\Models\StationSurveyAnswer;
use App\Helpers\Color;

class Chartjs
{
    public static function query()
    {
        return StationSurveyAnswer::query()
            ->join('stations AS s', 'station_survey_answers.station_id', '=', 's.id')
            ->join('survey_headers AS sh', 'station_survey_answers.survey_header_id', '=', 'sh.id')
            ->join('users AS u', 'station_survey_answers.user_id', '=', 'u.id')
            ->join('roles AS r', 'u.role_id', '=', 'r.id')
            ->join('option_choices AS oc', 'station_survey_answers.option_choice_id', '=', 'oc.id')
            ->join('questions AS q', 'station_survey_answers.question_id', '=', 'q.id')
            ->join('survey_sections AS ss', 'q.survey_section_id', '=', 'ss.id')
            ->join('countries AS c', 's.country_id', '=', 'c.id')
            ->join('states AS st', 's.country_id', '=', 'st.id')
            ->selectRaw("
                s.id AS station_id, s.name AS station_name, s.address AS station_address,
                s.email AS station_email, s.phone AS station_phone, st.name As station_state, c.name AS station_country,
                
                sh.id AS survey_header_id, sh.survey_name AS survey_name, sh.instructions AS survey_instructions,
                
                u.name AS user_name, u.email AS user_email, r.name AS user_role,
                
                oc.option_choice_name AS answer, oc.weight AS answer_weight, 
               
                ss.section_name, ss.section_title, ss.survey_section_id, ss.weight AS section_weight,
                
                q.question_name AS question
            ");
    }

    public static function bar()
    {
        $stations = self::query()
            ->get()
            ->groupBy('station_id');

        if(count($stations)){

            $sections = [];
            $total = new RatingChartjsChart;

            foreach($stations as $answers)
            {
                //station name
                $station_name = $answers[0]->station_name;

                //station breakdown chart
                $sections[$station_name] = new RatingChartjsChart;

                //section weights
                $section_weights = [];

                foreach($answers->groupBy('section_name') as $section_name => $ans) {

                    //section weight for this answer section
                    $section_weight = $ans[0]->section_weight;
                    $total_weight = $ans->sum('answer_weight') + $section_weight;

                    $sections[$station_name]->dataset($section_name, 'bar', [$total_weight])
                        ->backgroundcolor(Color::random())
                        ->payload($ans->toArray());

                    $section_weights[] = $section_weight;
                }

                $total->dataset($station_name, 'bar', [
                    $answers->sum('answer_weight') + array_sum($section_weights)
                ])
                    ->backgroundcolor(Color::random())
                    ->payload($answers->toArray());

            }

            return compact('total', 'sections');
        }

        return [
            'total' => null,
            'sections' => null
        ];
    }
}