@extends('voyager::master')

@section('content')
    <div class="page-content">
        @include('voyager::alerts')

        @if(auth()->user()->is_cmo)
            <div class="analytics-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="padding: 15px;">
                            Overall Scores
                        </div>
                        <div class="panel-body">
                            @if($total)
                                @php
                                    $total->options([
                                        'tooltip' => [
                                            'show' => true // or false, depending on what you want.
                                        ]
                                    ]);
                                @endphp
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
        @endif
    </div>

    <div class="modal modal-default fade" tabindex="-1" id="bar-detail-modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="voyager-list"></i> <span id="bar-detail-modal-title">Hook</span>
                    </h4>
                </div>
                <div class="modal-body" id="bar-detail-modal-body">
                    <div class="bar-details">
{{--                        <div class="detail">--}}
{{--                            <div class="title">Visibility</div>--}}
{{--                            <div class="value">3</div>--}}
{{--                            <div class="value">3</div>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">
                        {{ __('voyager::generic.cancel') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.7/c3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="{{asset('assets/js/Chartjs/Chart.BarFunnel.js')}}" charset="utf-8"></script>
    <script>
        buildPayload = (payload) => {
            let  details = '';
            if(typeof payload == 'object')
            {
                payload.forEach((data, index) => {
                    details +=
                        '<div class="detail">' +
                        '<div class="title">'+data.question+'</div>' +
                        '<div class="value">'+data.answer+'</div>' +
                        '<div class="value">'+data.answer_weight+'</div>' +
                        '</div>';
                });
            }

            return details;
        };

        barOnClick = (evt) => {
            let chart = window.{{$section->id}}.getElementAtEvent(evt)[0];
            let bar = window.{{$section->id}}.data.datasets[chart._datasetIndex];
            let value = window.{{$section->id}}.data.datasets[chart._datasetIndex].data[chart._index];
            console.log(bar);

            if(typeof bar.payload == 'object')
            {
                let  details = '<div class="detail" style="font-weight: bold;">' +
                    '<div class="title">Question</div>' +
                    '<div class="value">Answer</div>' +
                    '<div class="value">Weight</div>' +
                    '</div>';

                details += buildPayload(bar.payload);

                details += '<div class="detail" style="font-weight: bold;">' +
                    '<div class="title">Total Score</div>' +
                    '<div class="value"></div>' +
                    '<div class="value">'+value+'</div>' +
                    '</div>';

                $('#bar-detail-modal').find('#bar-detail-modal-title').text(
                    bar.label + ' for '+ bar.payload[0].station_name
                );

                $('#bar-detail-modal').find('#bar-detail-modal-body .bar-details').html(details);

                $('#bar-detail-modal').modal('show');
            }


            {{--var value = window.{{$section->id}}.data.datasets[clickedBar._datasetIndex].data[clickedBar._index];--}}
            // console.log(clickedBar._chart.data)
            {{--console.log(window.{{$section->id}}.toBase64Image())--}}

            {{--if (firstPoint) {--}}
            {{--    var label = window.{{$section->id}}.data.labels[firstPoint._index];--}}
            {{--    var value = window.{{$section->id}}.data.datasets[firstPoint._datasetIndex].data[firstPoint._index];--}}

            {{--    console.log(value);--}}
            {{--}--}}
        };
    </script>

    @if($total)
        {!! $total->script() !!}
        <script>
            $(document).ready(function(){
                document.getElementById('{{$total->id}}').onclick = (evt) => {
                    let totalChart = window.{{$total->id}}.getElementAtEvent(evt)[0];
                    let totalBar = window.{{$total->id}}.data.datasets[totalChart._datasetIndex];
                    let totalValue = 0;

                    console.log(totalBar);

                    let  details = '<div class="detail" style="font-weight: bold;">' +
                        '<div class="title">Question</div>' +
                        '<div class="value">Answer</div>' +
                        '<div class="value">Weight</div>' +
                        '</div>';

                    if(typeof totalBar.payload == 'object') {
                        let sections = [];

                        totalBar.payload.forEach((data, index) => {
                            //console.log(data.section_name)

                            totalValue += data.answer_weight;

                            if(typeof sections[data.section_name] == 'undefined'){
                                sections[data.section_name] = data.section_name;
                                details +=
                                    '<div class="section">' +
                                        '<div class="title">' + data.section_name + '</div>' +
                                    '</div>';
                            }

                            details +=
                                '<div class="detail">' +
                                '<div class="title">' + data.question + '</div>' +
                                '<div class="value">' + data.answer + '</div>' +
                                '<div class="value">' + data.answer_weight + '</div>' +
                                '</div>';
                        });
                    }

                    details += '<div class="section" style="font-weight: bold;">' +
                        '<div class="title">Total Score</div>' +
                        '<div class="value"></div>' +
                        '<div class="value">'+totalValue+'</div>' +
                        '</div>';

                    $('#bar-detail-modal').find('#bar-detail-modal-title').text(
                        totalBar.label + ' for '+ totalBar.payload[0].station_name
                    );

                    $('#bar-detail-modal').find('#bar-detail-modal-body .bar-details').html(details);

                    $('#bar-detail-modal').modal('show');
                }
            });
        </script>
    @endif

    @if($sections && auth()->user()->is_cmo)
        @foreach($sections as $chart => $section)
            {!! $section->script() !!}

            <script>
                $(document).ready(function(){
                    document.getElementById('{{$section->id}}').onclick = (evt) => {
                        barOnClick(evt);
                    }
                });
            </script>
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

        .bar-details{

        }
        .bar-details .detail{
            display: flex;
        }
        .bar-details .detail .title{
            flex: 0 0 65%;
            color: #538225;
            /*background-color: red;*/
        }
        .bar-details .detail .value{
            flex: 1;
            /*background-color: green;*/
            padding-left: 5px;
        }

        .bar-details .section .title{
            flex: 0 0 100%;
            color: #181082;
            /*background-color: red;*/
            padding-top: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dotted #ccc;
            margin-bottom: 10px;
            margin-top: 15px;
        }
    </style>
@endpush
