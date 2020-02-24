@foreach($survey->survey_sections as $section)

    @php $subsections = $section->sections @endphp

    @if(count($subsections))
        <div class="panel panel-default survey-sections">
            <div class="panel-heading">
                {{strtoupper($section->section_title)}} <br>
{{--                <p>{{$section->section_subheading}}</p>--}}
            </div>
            <div class="panel-body">

                @foreach($subsections as $subsection)
                    <div class="panel panel-default survey-subsections">
                        <div class="panel-heading">
                            {{$subsection->section_title}} <br>
{{--                            <p>{{$subsection->section_subheading}}</p>--}}
                        </div>
                        <div class="panel-body">
                            Questions
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    @else
        <div class="panel panel-default survey-sections">
            <div class="panel-heading">
                {{strtoupper($section->section_title)}} <br>
{{--                <p>{{$section->section_subheading}}</p>--}}
            </div>
            <div class="panel-body">
                Questions
            </div>
        </div>
    @endif
@endforeach

