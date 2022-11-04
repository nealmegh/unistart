@extends('theme.base')
@section('head-customization')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/font-icons/fontawesome/css/regular.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/font-icons/fontawesome/css/fontawesome.css")}}>
    <link href="{{asset('css/2Frontend/vendor/telephone/intlTelInput.css')}}" rel="stylesheet">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <link href={{asset("css/theme/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/animate/animate.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("css/theme/plugins/sweetalerts/promise-polyfill.js")}}></script>
    <link href={{asset("css/theme/plugins/sweetalerts/sweetalert2.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/sweetalerts/sweetalert.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/components/custom-sweetalert.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/forms/switches.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/select2/select2.min.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/flatpickr/custom-flatpickr.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/flatpickr/flatpickr.css" )}} rel="stylesheet" type="text/css" />


    <style>
        .create-button{
            position: relative;
            width: fit-content;
        }
        .button-holder{
            padding-top: 1.5%;
            padding-bottom: 30px;
            margin-bottom: 2px;

        }
        .create-button-btn{
            position: absolute;
            right: 0% !important;
        }
        .custom-bipon-container{
            max-width: 80% !important;
            margin-left: 5% !important;
        }
        @media (max-width: 50px) {
            .sidenav {
                display: none !important;
            }
        }

    </style>
    <style>

        .iti__flag {background-image: url("/css/2Frontend/vendor/img/flags.png");}

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .iti__flag {background-image: url("/css/2Frontend/vendor/img/flags@2x.png");}
        }
        .btn-filled-green:active {
            background-color: #00CCC0;
            border: 1px #000000 solid;

        }
        .btn-filled-green {
            background-color: #4CAF50; /* Green */
            border: 1px #000000 solid;

        }
        .iti {
            display: flex !important;
        }

    </style>
    <style>
        .customNav{
            display: flex !important;
            width: 15% !important;
            border-left:0px !important;
            z-index: 99 !important;
        }
        @media only screen and (max-width: 900px) {
            .customNav {
                display: flex !important;
                width: 40% !important;
                border-left: 0px !important;
                z-index: 99;
            }
        }
    </style>

@endsection

@section('main-content')
    @if(Session::has('message'))
        <div class="alert alert-gradient mb-4" role="alert">
            <button  type="button" class="close" data-dismiss="alert" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  data-dismiss="alert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <strong>{{ Session::get('message') }}</strong>
        </div>
    @endif

    <div class="custom-bipon-container container " style="max-width: 80% !important;">

        <div class="container">

            <div class="row layout-top-spacing">
                <div id="flActionButtons" class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h2><small>create</small> Teacher </h2>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="" method="post" action="{{route('admin.teachers.store')}}">
                                @csrf
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">

                                    <label for="name">NAME<span class="required">*</span></label>
                                    <input id="name" name="name" {{old('name')}} type="text" class="form-control" placeholder="name ">

                                </div>
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <div class="form-group col-md-6">
                                        <label for="phone">PHONE</label>
                                        <input type="hidden" id="countryCode" name="countryCode" value="">
                                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">EMAIL<span class="required">*</span></label>
                                        <input id="email" name="email" type="text" value="{{old('email')}}" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <div class="form-group col-md-6">
                                        <label for="password">PASSWORD<span class="required">*</span></label>
                                        <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Confirm PASSWORD<span class="required">*</span></label>
                                        <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>


                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <div class="form-group col-md-6">
                                        <label for="education_subject">EDUCATION SUBJECT</label>
                                        <input id="education_subject" name="education_subject" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="training_subject">TRAINING SUBJECT</label>
                                        <input id="training_subject" name="training_subject" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <div class="form-group col-md-6">
                                        <label for="current_occupation">CURRENT OCCUPATION</label>
                                        <input id="current_occupation" name="current_occupation" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="hsc_year">HSC YEAR</label>
                                        <input id="hsc_year" name="hsc_year" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <a href="{{url()->previous()}}" class="btn btn-danger mt-3">Cancel</a>
                                <button id="send" type="submit" class="btn btn-success mt-3">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
    <script src={{asset("js/theme/plugins/select2/select2.min.js")}}></script>
    <script src={{asset("js/theme/plugins/flatpickr/flatpickr.js")}}></script>
    {{--    <script src={{asset("js/theme/plugins/flatpickr/custom-flatpickr.js")}}></script>--}}
    <script src="{{asset('js/2Frontend/vendor/telephone/intlTelInput.min.js')}}"></script>
    {{--    <script src={{asset("js/theme/plugins/select2/custom-select2.js")}}></script>--}}


    <!-- BEGIN THEME GLOBAL STYLE -->
    <script src={{asset("js/theme/js/scrollspyNav.js")}}></script>
    <script src={{asset("js/theme/plugins/sweetalerts/sweetalert2.min.js")}}></script>
    <script src={{asset("js/theme/plugins/sweetalerts/custom-sweetalert.js")}}></script>
    <!-- END THEME GLOBAL STYLE -->
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <script>
        $(".selectFrom").select2({
            tags: true,
            placeholder: "Select Pickup Point",
            allowClear: true
        });
        $(".selectTo").select2({
            tags: true,
            placeholder: "Select Drop Point",
            allowClear: true
        });
        $(".UserCustomer").select2({
            tags: true,
            placeholder: "Select Pickup Point",
            allowClear: true
        });

        var f1 = flatpickr(document.getElementById('journey_date'), {
            minDate: "today",
            dateFormat: "d-m-Y"
        });
        var f2 = flatpickr(document.getElementById('pickup_time'), {
            enableTime: true,
            noCalendar: true,
            time_24hr: true,
            disableMobile: true
        });
        var f3 = flatpickr(document.getElementById('return_date'), {
            minDate: "today",
            dateFormat: "d-m-Y"
        });
        var f4 = flatpickr(document.getElementById('return_time'), {
            enableTime: true,
            noCalendar: true,
            time_24hr: true,
            disableMobile: true
        });

    </script>



    <script>
        var input = document.querySelector("#phone");
        var iti = intlTelInput(input,({
            initialCountry:"bd",
            autoHideDialCode:true,
            nationalMode: false,
            separateDialCode: true,
            utilsScript: "/js/2Frontend/vendor/telephone/utils.js"

        }));
        // var countryData = iti.intlTelInputGlobals.getCountryData();
        var number = iti.getNumber();
        var countryData = iti.getSelectedCountryData();

        var t = Object.values(countryData);

        document.getElementById("countryCode").value = t[2];

        input.addEventListener("countrychange", function() {
            var countryData = iti.getSelectedCountryData();

            var t = Object.values(countryData);


            document.getElementById("countryCode").value = t[2];
        });
    </script>


@endsection

