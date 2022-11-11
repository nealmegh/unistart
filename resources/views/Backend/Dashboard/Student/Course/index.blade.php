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
            @foreach($courses as $course)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-card-two">
                        <div class="widget-content">

                            <div class="media">
                                <div class="w-img">
                                    <img src="https://seeklogo.com/images/U/UNI-logo-02E25F0C84-seeklogo.com.png" alt="logo">
                                </div>
                                <div class="media-body">
                                    <h6>{{$course->title}}</h6>
                                    <p class="meta-date-time">{{$course->amount}}</p>
                                </div>
                            </div>

                            <div class="card-bottom-section">
{{--                                <h5>Contact Details</h5>--}}
{{--                                <div class="img-group">--}}
{{--                                    <p>--}}
{{--                                        Phone: {{$university->phone}}<br>--}}
{{--                                        Email: {{$university->email}}--}}
{{--                                    </p>--}}
{{--                                </div>--}}
                                    <a href="{{route('student.courses.modules',  $course->id)}}" class="btn">View Modules</a>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
