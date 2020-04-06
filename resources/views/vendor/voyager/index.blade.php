@extends('voyager::master')

@section('page_title', 'Dashboard')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="fa fa-dashboard"></i> Dashboard
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        @if(auth()->user()->is_cmo)
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="q" name="q" placeholder="Search..." type="text" class="form-control">
                                    <input id="url" type="hidden" name="url" value="{{route('voyager.stations.generateAnalysis')}}">
                                </div>
{{--                                <button class="btn btn-sm btn-success">--}}
{{--                                    <i class="fa fa-filter"></i> Filter--}}
{{--                                </button>--}}
                                <button id="btn-all-export"
                                        data-url="{{route('voyager.stations.generate.analysis.download')}}"
                                        class="btn btn-sm btn-info">
                                    <i class="fa fa-download"></i> Export
                                </button>
                                <button id="btn-all-chart"
                                        class="btn btn-sm btn-warning">
                                    <i class="fa fa-bar-chart"></i> Charts
                                </button>
                                <button id="btn-all-table"
                                        class="btn btn-sm btn-default">
                                    <i class="fa fa-table"></i> Tables
                                </button>
                            </div>
                            <div class="col-md-6"></div>

                            <div id="result" class="col-md-12 result">


{{--                                <div id="charts">--}}
{{--                                    <div class="panel panel-default">--}}
{{--                                        <div class="panel-heading" style="padding: 15px;">--}}
{{--                                            Overall Scores--}}
{{--                                            <button class="btn btn-sm btn-success pull-right">--}}
{{--                                                <i class="fa fa-download"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="btn btn-sm btn-warning pull-right">--}}
{{--                                                <i class="fa fa-bar-chart"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="btn btn-sm btn-info pull-right">--}}
{{--                                                <i class="fa fa-pie-chart"></i>--}}
{{--                                            </button>--}}
{{--                                        </div>--}}

{{--                                        <div class="panel-body" style="padding: 0">--}}
{{--                                            <div class="table-responsive">--}}
{{--                                                <table id="dataTable" class="table">--}}
{{--                                                    <thead>--}}
{{--                                                    <tr>--}}
{{--                                                        <th>Criteria</th>--}}
{{--                                                        <th>Score</th>--}}
{{--                                                    </tr>--}}
{{--                                                    </thead>--}}
{{--                                                    <tbody>--}}
{{--                                                        <tr>--}}
{{--                                                            <th>Competition</th>--}}
{{--                                                            <th>20</th>--}}
{{--                                                        </tr>--}}
{{--                                                        <tr>--}}
{{--                                                            <th>Traffic</th>--}}
{{--                                                            <th>40</th>--}}
{{--                                                        </tr>--}}
{{--                                                        <tr>--}}
{{--                                                            <th style="font-weight: bold">Bonus</th>--}}
{{--                                                            <th>0</th>--}}
{{--                                                        </tr>--}}
{{--                                                        <tr>--}}
{{--                                                            <th style="font-weight: bold">Total</th>--}}
{{--                                                            <th>40</th>--}}
{{--                                                        </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="tables"></div>--}}
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    @if(auth()->user()->is_cmo)
        <script src="{{asset("assets/vendors/c3/d3.min.js")}}"></script>
        <script src="{{asset("assets/vendors/c3/c3.min.js")}}"></script>
        <script src="{{asset("assets/vendors/chartjs/chart.min.js")}}"></script>
        <script src="{{asset("assets/js/chart.js")}}"></script>
    @endif
@stop

@push('css')
    <link href="{{asset('assets/vendors/c3/c3.min.css')}}" rel="stylesheet">
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

        .result .panel{
            border-radius: 0 !important;
        }
        .result .panel-heading{
            background-color: #fff !important;
            border-bottom: 1px solid #f1f1f1 !important;
        }
        .result .panel-heading .btn{
            padding: 2px 7px;
            margin: 0 0 0 5px;
        }

        .result table thead tr th:first-child{
            padding-left: 15px;
        }
        .result table thead tr th{
            font-weight: bold;
        }

        .result table tbody tr th:first-child{
            padding-left: 15px;
        }
        .result table tbody tr th{

        }
    </style>
@endpush
