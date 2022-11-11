@extends('theme.base')
@section('head-customization')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/table/datatable/datatables.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/table/datatable/custom_dt_html5.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/table/datatable/dt-global_style.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/font-icons/fontawesome/css/regular.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/font-icons/fontawesome/css/fontawesome.css")}}>
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <link href={{asset("css/theme/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/animate/animate.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("css/theme/plugins/sweetalerts/promise-polyfill.js")}}></script>
    <link href={{asset("css/theme/plugins/sweetalerts/sweetalert2.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/sweetalerts/sweetalert.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/components/custom-sweetalert.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/apex/apexcharts.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/dashboard/dash_1.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/dashboard/dash_2.css" )}} rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
        @foreach($universities as $university)
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-two">
                <div class="widget-content">

                    <div class="media">
                        <div class="w-img">
                            <img src="https://seeklogo.com/images/U/UNI-logo-02E25F0C84-seeklogo.com.png" alt="logo">
                        </div>
                        <div class="media-body">
                            <h6>{{$university->name}}</h6>
                            <p class="meta-date-time">{{$university->address}}</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <h5>Contact Details</h5>
                        <div class="img-group">
                            <p>
                                Phone: {{$university->phone}}<br>
                                Email: {{$university->email}}
                            </p>
                        </div>
                        @if($university->api_availability == 1)
                            <a href="{{route('student.admission.apply', [Auth::user()->student->id, $university->id])}}" class="btn">Apply</a>
                        @else
                            <a href="{{$university->uri}}" class="btn">Apply</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>

@endsection

@section('js-customization')
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src= {{ asset("js/theme/plugins/perfect-scrollbar/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("js/theme/plugins/table/datatable/datatables.js") }}></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src={{asset("js/theme/plugins/table/datatable/button-ext/dataTables.buttons.min.js")}}></script>
    <script src={{asset("js/theme/plugins/table/datatable/button-ext/jszip.min.js")}}></script>
    <script src={{asset("js/theme/plugins/table/datatable/button-ext/buttons.html5.min.js")}}></script>
    <script src={{asset("js/theme/plugins/table/datatable/button-ext/buttons.print.min.js")}}></script>
    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src={{asset("js/theme/js/scrollspyNav.js")}}></script>
    <script src={{asset("js/theme/plugins/sweetalerts/sweetalert2.min.js")}}></script>
    <script src={{asset("js/theme/plugins/sweetalerts/custom-sweetalert.js")}}></script>
    <!-- END THEME GLOBAL STYLE -->
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src={{asset("js/theme/plugins/apex/apexcharts.min.js")}}></script>
    <script src={{asset("js/theme/js/dashboard/dash_1.js")}}></script>
    <script src={{asset("js/theme/js/dashboard/dash_2.js")}}></script>

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection


