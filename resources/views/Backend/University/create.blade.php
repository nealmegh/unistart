@extends('theme.base')
@section('head-customization')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
{{--    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/table/datatable/datatables.css")}}>--}}
{{--    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/table/datatable/custom_dt_html5.css")}}>--}}
{{--    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/table/datatable/dt-global_style.css")}}>--}}
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/font-icons/fontawesome/css/regular.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("css/theme/plugins/font-icons/fontawesome/css/fontawesome.css")}}>
    <!-- END PAGE LEVEL CUSTOM STYLES -->
    <link href={{asset("css/theme/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/animate/animate.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("css/theme/plugins/sweetalerts/promise-polyfill.js")}}></script>
    <link href={{asset("css/theme/plugins/sweetalerts/sweetalert2.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/plugins/sweetalerts/sweetalert.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/components/custom-sweetalert.css" )}} rel="stylesheet" type="text/css" />
    <link href={{asset("css/theme/forms/switches.css" )}} rel="stylesheet" type="text/css" />
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
    </style>

@endsection

@section('main-content')
<div class="container">
    <div class="container">
            <div class="row layout-top-spacing">
                <div id="flActionButtons" class="col-lg-12">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h2><small>create</small> Univeristy </h2>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <form class="" method="post" action="{{route('admin.universities.store')}}">
                                @csrf
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <label for="name">NAME<span class="required">*</span></label>
                                    <input id="name" name="name" {{old('name')}} type="text" class="form-control" placeholder="name ">
                                </div>
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <label for="uri">URL<span class="required">*</span></label>
                                    <input id="uri" name="uri" {{old('uri')}} type="text" class="form-control" placeholder="URL ">
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
                                    <label for="address">Address</label>
                                    <input id="address" name="address" {{old('address')}} type="text" class="form-control" placeholder="Address ">
                                </div>
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="status">Active<span class="required">*</span></label> <br>
                                        <label class="switch s-icons s-outline s-outline-success mr-2">
                                            <input id="status" name="status" type="checkbox" value="1" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label" for="api_availability">API Available<span class="required">*</span></label> <br>
                                        <label class="switch s-icons s-outline s-outline-success mr-2">
                                            <input id="api_availability" name="api_availability" type="checkbox" value="0">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
{{--                                <div class="form-group mb-4">--}}
{{--                                    --}}
{{--                                </div>--}}
                                <div class="form-row mb-4" style="margin-bottom: 0px !important;">
                                    <div class="form-group col-md-6">
                                        <label for="api_user">API USER</label>
                                        <input id="api_user" name="api_user" type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="api_secret">API SECRET</label>
                                        <input id="api_secret" name="api_secret" type="text" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <a href="{{url()->previous()}}" class="btn btn-danger ml-3 mt-3">Cancel</a>
                                <button id="send" type="submit" class="btn btn-success ml-3 mt-3">Submit</button>
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

        <!-- BEGIN THEME GLOBAL STYLE -->
        <script src={{asset("js/theme/js/scrollspyNav.js")}}></script>
        <script src={{asset("js/theme/plugins/sweetalerts/sweetalert2.min.js")}}></script>
        <script src={{asset("js/theme/plugins/sweetalerts/custom-sweetalert.js")}}></script>
        <!-- END THEME GLOBAL STYLE -->
        <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <script>
        $(document).on("click", "#status", function(){
            if(document.getElementById('status').value === '1')
            {
                document.getElementById('status').value= '0';
            }
            else {
                document.getElementById('status').value='1';
            }

        });
        $(document).on("click", "#api_availability", function(){
            if(document.getElementById('api_availability').value === '1')
            {
                document.getElementById('api_availability').value= '0';
            }
            else {
                document.getElementById('api_availability').value='1';
            }
        });
    </script>

@endsection
