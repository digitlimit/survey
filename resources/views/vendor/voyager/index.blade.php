@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')

        <div class="analytics-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="padding: 15px;">
                            Overall Scores
                        </div>
                        <div class="panel-body">
                            @if($total)
                                {!! $total->container() !!}
                            @else
                                No station survey yet
                            @endif
                        </div>
                    </div>
                </div>

                @if($sections)
                    @foreach($sections as $station_name => $section)
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" style="padding: 15px;">
                                    {{$station_name}} score chart
                                </div>
                                <div class="panel-body">
                                     {!! $section->container() !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
@stop

@section('javascript')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

    @if($total)
        {!! $total->script() !!}
    @endif

    @if($sections)
        @foreach($sections as $chart => $section)
            {!! $section->script() !!}
        @endforeach
    @endif
@stop

@push('css')
    <style>
        .charts{
            border-radius:4px;
            padding:20px;
            background:#fff;
            margin:0;
            color:#999;
            text-align:center;
        }
    </style>
@endpush
