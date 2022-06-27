<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Gippokamp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    @yield('style')
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">
<div class="account-pages my-5  pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6 col-xl-5">
                <div>
                    <a href="/" class="mb-5 d-block auth-logo">
                        <img src="{{ asset('img/logo.svg') }}" alt="" height="50" class="logo logo-dark">
                        <img src="{{ asset('img/logo.svg') }}" alt="" height="50" class="logo logo-light">
                    </a>
                    <div class="card">

                        @yield('content')

                    </div>
                    <div class="mt-5 text-center">
                        <p>© <script>document.write(new Date().getFullYear())</script> Gippokamp. Created by
                            <a href="http://novastudio.uz"><svg width="139" height="22" viewBox="0 0 139 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M34.3836 20.7456L47.9312 7.31147C49.6081 5.63887 49.6081 2.92705 47.9312 1.25445C46.2543 -0.418148 43.5354 -0.418144 41.8585 1.25445L31.374 11.7292L20.7214 1.25445C19.0445 -0.418148 16.3257 -0.418144 14.6487 1.25445L1.58973 14.2797C-0.0872014 15.9523 -0.0872013 18.6642 1.58973 20.3368C3.26666 22.0094 5.9855 22.0094 7.66244 20.3368L17.7713 10.254L28.3109 20.7456C29.9878 22.4181 32.7066 22.4181 34.3836 20.7456Z" fill="#FFCC16"/>
                                    <path class="wh" d="M73.9791 19.9906V6.98928H70.9499V15.0281L64.418 6.98928H61.8242V19.9906H64.8345V11.9518L71.3853 19.9906H73.9791Z" fill="#1E2326"/>
                                    <path class="wh" d="M98.4339 19.9906H101.141L106.651 6.98928H103.338L99.7781 15.6507L96.1998 6.98928H92.9244L98.4339 19.9906Z" fill="#1E2326"/>
                                    <path class="wh" d="M108.021 19.9906H104.878L110.633 6.98928H113.36L119.115 19.9906H115.972L113.681 14.7168L111.996 10.8164L110.292 14.7168L109.213 17.2438L108.021 19.9906Z" fill="#1E2326"/>
                                    <path class="wh" d="M126.089 20.2103C128.891 20.2103 130.898 18.5623 130.898 16.2001C130.916 14.2407 129.648 12.9955 127.698 12.318L126.751 11.9884C125.312 11.494 124.669 11.201 124.669 10.4868C124.669 9.80927 125.483 9.49798 126.297 9.49798C127.149 9.49798 128.001 9.8459 128.626 10.5784L130.595 8.56408C129.326 7.24564 127.906 6.76953 126.259 6.76953C123.589 6.76953 121.62 8.25278 121.62 10.7798C121.62 12.556 122.813 13.8195 125.009 14.5337L125.956 14.845C127.319 15.2845 127.83 15.7423 127.83 16.4015C127.83 17.0424 127.206 17.4819 126.202 17.4819C125.218 17.4819 124.082 16.9325 123.419 15.9986L121.109 17.8847C122.169 19.3497 123.949 20.2103 126.089 20.2103Z" fill="#1E2326"/>
                                    <path class="wh" d="M80.4731 13.5876C80.4731 15.6934 82.196 17.488 84.3922 17.488C84.8002 17.488 85.1923 17.425 85.5601 17.3087L87.7767 19.4525C86.7739 19.997 85.6191 20.308 84.3922 20.308C80.5488 20.308 77.4438 17.2866 77.4438 13.5876C77.4438 9.88863 80.5488 6.8672 84.3922 6.8672C88.2166 6.8672 91.3405 9.88863 91.3405 13.5876C91.3405 14.9985 90.886 16.3109 90.1115 17.3946L87.9086 15.264C88.1549 14.7523 88.2923 14.1824 88.2923 13.5876C88.2923 11.4817 86.5695 9.6872 84.3922 9.6872C82.196 9.6872 80.4731 11.4817 80.4731 13.5876Z" fill="#1E2326"/>
                                    <ellipse cx="135.953" cy="17.7689" rx="2.52708" ry="2.53846" fill="#FFCC16"/>
                                </svg></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

@yield('script')

<script src="assets/js/pages/form-advanced.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>
</html>
