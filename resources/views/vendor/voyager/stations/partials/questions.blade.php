@foreach($questions as $question)
    <?php //dd($question)  ?>
    <?php //dd($question->option_group->option_choices)  ?>
    <?php //dd($question->input_type)  ?>


    <div class="question">
        <div class="form-group">
            <label>
                {{$loop->index + 1}}. {{$question->question_name}}

                @if(!$question->question_subtext)
                    <a role="button" data-toggle="tooltip"
                       data-placement="right"
                       title="{{$question->question_subtext}}">
                        <i class="fa fa-info-circle"></i>
                    </a>
                @endif
            </label>

            @include("vendor.voyager.stations.input-type.{$question->input_type->slug}", [
                'options' => $question->option_group->option_choices,
                'id' => "question_{$question->id}"
            ])
        </div>
    </div>
@endforeach


{{--"id" => 1--}}
{{--"parent_id" => null--}}
{{--"survey_section_id" => 1--}}
{{--"input_type_id" => 3--}}
{{--"question_name" => "Political"--}}
{{--"question_subtext" => null--}}
{{--"question_required_yn" => 1--}}
{{--"answer_required_yn" => 1--}}
{{--"option_group_id" => 1--}}
{{--"allow_mutiple_option_answers_yn" => 0--}}
{{--"dependent_question_id" => null--}}
{{--"dependent_question_option_id" => null--}}
{{--"dependent_answer_id" => null--}}
{{--"created_at" => null--}}
{{--"updated_at" => null--}}