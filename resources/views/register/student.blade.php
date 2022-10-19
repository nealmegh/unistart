<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Exam</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
    <link href={{ asset("css/theme/plugins.css") }} rel="stylesheet" type="text/css" />
    <link href={{ asset("css/theme/authentication/form-2.css") }} rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href={{ asset("css/theme/forms/theme-checkbox-radio.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("css/theme/forms/switches.css") }}>
</head>
<body class="form">


<div class="form-container outer">
    <div class="form-form">
        <div class="form-form-wrap">
            <div class="form-container">
                <div class="form-content">

                    <h1 class="">Student Registration</h1>
                    <p class="signup-link register">Already have an account? <a href="/login">Log in</a></p>
                    <form class="text-left" method="POST" action="{{route('student.register.store')}}">
                        @csrf
                        <div class="form">

                            <div id="username-field" class="field-wrapper input">
                                <label for="name">NAME</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="name" name="name" type="text" class="form-control" placeholder="name ">
                            </div>

                            <div id="email-field" class="field-wrapper input">
                                <label for="email">EMAIL</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                <input id="email" name="email" type="text" value="" class="form-control" placeholder="Email">
                            </div>

                            <div id="password-field" class="field-wrapper input mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="password">PASSWORD</label>
                                    <a href="{{ route('password.request') }}" class="forgot-pass-link">Forgot Password?</a>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="phone">PHONE</label>
                                <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone ">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="father_name">FATHER'S NAME</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="father_name" name="father_name" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="mother_name">MOTHER'S NAME</label>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <input id="mother_name" name="mother_name" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="ssc_result">SSC RESULT</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="ssc_result" name="ssc_result" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="ssc_year">SSC YEAR</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="ssc_year" name="ssc_year" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="ssc_board">SSC BOARD</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="ssc_board" name="ssc_board" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="hsc_result">HSC RESULT</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="hsc_result" name="hsc_result" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="hsc_year">HSC YEAR</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="hsc_year" name="hsc_year" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="hsc_board">HSC BOARD</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="hsc_board" name="hsc_board" type="text" class="form-control" placeholder="">
                            </div>

                            <div id="username-field" class="field-wrapper input">
                                <label for="present_address">PRESENT ADDRESS</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="present_address" name="present_address" type="text" class="form-control" placeholder="">
                            </div>
                            <div id="username-field" class="field-wrapper input">
                                <label for="permanent_address">PERMANENT ADDRESS</label>
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>--}}
                                <input id="permanent_address" name="permanent_address" type="text" class="form-control" placeholder="">
                            </div>
                            <div class="field-wrapper terms_condition">
                                <div class="n-chk">
                                    <label class="new-control new-checkbox checkbox-primary">
                                        <input type="checkbox" id="policy" name="policy" class="new-control-input">
                                        <span class="new-control-indicator"></span><span>I agree to the <a href="" target="_blank">  terms and conditions </a></span>
                                    </label>
                                </div>
                            </div>

                            <div class="d-sm-flex justify-content-between">
                                <div class="field-wrapper">
                                    <button id="register_save" type="submit" class="btn btn-primary" value="" disabled>Get Started!</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src= {{ asset("js/theme/js/libs/jquery-3.1.1.min.js") }}></script>
<script src= {{ asset("js/app.js") }}></script>
<script src= {{ asset("js/theme/js/app.js") }}></script>

<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src={{ asset("js/theme/js/authentication/form-2.js") }}></script>
<script>
    $('#policy').on('click', function() {
        console.log('hello');
        if(document.getElementById('register_save').disabled){

            $("#register_save").prop('disabled', false);

        }
        else {
            $("#register_save").prop('disabled', true);

        }
    });
</script>

</body>
</html>
