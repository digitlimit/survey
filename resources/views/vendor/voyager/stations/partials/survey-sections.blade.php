@foreach($survey->survey_sections as $section)

    @php
        $subsections = $section->sections;
        $parent_index = $loop->index + 1;
    @endphp

    @if(count($subsections))
        <div class="panel panel-default survey-sections">
            <div class="panel-heading">
                <span class="badge badge-success">{{$parent_index}}</span>
                {{strtoupper($section->section_title)}} <br>
{{--                <p>{{$section->section_subheading}}</p>--}}
            </div>
            <div class="panel-body">

                @foreach($subsections as $subsection)
                    <div class="panel panel-default survey-subsections">
                        <div class="panel-heading">
                            <span class="badge">{{$loop->index + 1}}</span> {{$subsection->section_title}} <br>
{{--                            <p>{{$subsection->section_subheading}}</p>--}}
                        </div>
                        <div class="panel-body">
                            @include('vendor.voyager.stations.partials.questions', [
                               'questions' => $subsection->questions,
                               'alpha_numbering' => true
                            ])
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @elseif(!$section->survey_section_id)
        <div class="panel panel-default survey-sections">
            <div class="panel-heading">
                <span class="badge badge-success">
                    {{$parent_index}}
                </span> {{strtoupper($section->section_title)}} <br>
{{--                <p>{{$section->section_subheading}}</p>--}}
            </div>
            <div class="panel-body">
                @include('vendor.voyager.stations.partials.questions', [
                    'questions' => $section->questions,
                  'alpha_numbering' => false
                ])
            </div>
        </div>
    @endif
@endforeach

