<!doctype html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>Tashkent Pharma Park</title>
    <meta name="description" content="">
    <meta name="keywords" content="Novas"/>
    <meta name="author" content="Novas"/>
    <meta name="google-site-verification" content=""/>
    <!--=======css Links======-->
    <!--    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">-->
    <!--    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">-->
    <!--    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">-->
    <!--    <link rel="icon" type="image/ico" sizes="16x16" href="img/favicon/favicon.ico">-->
    <!--    <link rel="manifest" href="img/favicon/site.webmanifest">-->

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/fancybox.css">
    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
    @yield('style')
</head>
<div id="top"></div>
<body>

@include('layouts.header')

@yield('content')

@include('layouts.footer')

<div class="popup__feedback">
    <div class="left">
        <span class="feedback__close">
            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect y="28.2852" width="40" height="1" transform="rotate(-45 0 28.2852)" fill="white"/>
<rect width="40" height="1" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 28.9922 28.2852)" fill="white"/>
</svg>
        </span>
        <h2 class="general__title">Решили стать инвестором?</h2>
        <form action="/messages" method="post" class="feedback__form">
            @csrf
            <input type="text" name="name" placeholder="Имя">
            <input type="tel" name="phone" placeholder="Телефон">
            <div class="box">
                <a href="" download="">
                    Скачать форму заявки
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1134 2.8125C19.2609 2.8125 20.3651 3.23331 21.2196 3.98946L21.4279 4.18544L24.5646 7.32209C25.376 8.13354 25.8592 9.21187 25.9288 10.3508L25.9375 10.6366V22.5C25.9375 25.0053 23.972 27.0516 21.4989 27.181L21.25 27.1875H16.25C15.7322 27.1875 15.3125 26.7678 15.3125 26.25C15.3125 25.7754 15.6652 25.3831 16.1228 25.3211L16.25 25.3125H21.25C22.7386 25.3125 23.9571 24.156 24.056 22.6926L24.0625 22.5V10.6366C24.0625 9.9736 23.8284 9.33471 23.4059 8.83047L23.2387 8.64791L20.1021 5.51126C19.6332 5.04242 19.0159 4.7562 18.3607 4.69839L18.1134 4.6875H8.75C7.26142 4.6875 6.04294 5.84395 5.94399 7.30744L5.9375 7.5V16.25C5.9375 16.7678 5.51777 17.1875 5 17.1875C4.52538 17.1875 4.13314 16.8348 4.07106 16.3772L4.0625 16.25V7.5C4.0625 4.99468 6.02795 2.94841 8.50105 2.819L8.75 2.8125H18.1134Z" fill="white"/>
                        <path d="M18.125 2.8125C18.5996 2.8125 18.9919 3.16519 19.0539 3.62279L19.0625 3.75V8.125C19.0625 8.93401 19.6773 9.59942 20.4652 9.67943L20.625 9.6875H25C25.5178 9.6875 25.9375 10.1072 25.9375 10.625C25.9375 11.0996 25.5848 11.4919 25.1272 11.5539L25 11.5625H20.625C18.7968 11.5625 17.302 10.1354 17.1938 8.3344L17.1875 8.125V3.75C17.1875 3.23223 17.6072 2.8125 18.125 2.8125Z" fill="white"/>
                        <path d="M8.75 19.0625C9.22462 19.0625 9.61686 19.4152 9.67894 19.8728L9.6875 20V26.25C9.6875 26.7678 9.26777 27.1875 8.75 27.1875C8.27538 27.1875 7.88314 26.8348 7.82106 26.3772L7.8125 26.25V20C7.8125 19.4822 8.23223 19.0625 8.75 19.0625Z" fill="white"/>
                        <path d="M10.5871 23.0871C10.9532 22.721 11.5468 22.721 11.9129 23.0871C12.2457 23.4199 12.276 23.9408 12.0037 24.3078L11.9129 24.4129L9.41291 26.9129C9.0468 27.279 8.4532 27.279 8.08709 26.9129C7.75425 26.5801 7.724 26.0592 7.99631 25.6922L8.08709 25.5871L10.5871 23.0871Z" fill="white"/>
                        <path d="M5.58709 23.0871C5.91992 22.7543 6.44075 22.724 6.80776 22.9963L6.91291 23.0871L9.41291 25.5871C9.77903 25.9532 9.77903 26.5468 9.41291 26.9129C9.08008 27.2457 8.55925 27.276 8.19224 27.0037L8.08709 26.9129L5.58709 24.4129C5.22097 24.0468 5.22097 23.4532 5.58709 23.0871Z" fill="white"/>
                    </svg>
                </a>
                <label for="send">
                    <p>Прикрепить файл</p>
                    <input id="send" type="file" name="file">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.905 11.335C4.85625 11.7512 2.5 14.3375 2.5 17.5C2.5 20.9512 5.29875 23.75 8.75 23.75H22.5C25.2613 23.75 27.5 21.5113 27.5 18.75C27.5 15.9887 25.2613 13.75 22.5 13.75C22.5 9.6075 19.1425 6.25 15 6.25C11.7037 6.25 8.91125 8.37875 7.905 11.335Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.293 15.8338L15.0017 13.125L17.7105 15.8338" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 19.375V13.125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </label>
            </div>
            <div class="feedback__form-content">
                <p>Нажимая на кнопку, вы соглашаетесь с
                    условиями
                    обработки персональных данных</p>
                <button type="submit">
                    <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 10L17.945 17.7938L18.75 18.75L30 9.34875L18.75 0L17.9437 0.955L27.355 8.75H0V10H27.3537Z" fill="#8C1429"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>

<!--Begin scripts-->
@livewireScripts
<script src="/js/jquery-3.5.1.min.js"></script>
{{--<script src="/js/bootstrap.min.js"></script>--}}
<script src="/js/owl.carousel.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/fancybox.umd.js"></script>
<script src="/js/main.js"></script>
<!--End scripts-->
@yield('script')
</body>
</html>
