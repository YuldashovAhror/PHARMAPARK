@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper">
        <section class="section__general general">
            <div class="general-carousel" id="#example">
                <div id="container">
                        <div class="slide">
                            <div class="general-img">
                                <img src="/img/genplan/1.jpg" alt="pharma">
                                <svg viewBox="0 0 1920 969" preserveAspectRatio="none">
                                    @foreach(\App\Models\Project::all() as $value)
                                        <a href="#" style="cursor: pointer"
                                        onclick='clickPath(
                                            "{{ $value->$n }}",
                                            "{{ $value->price }} млн. долл. США",
                                            "{{ $value->date }} годы",
                                            "1650 студентов в год по востребованным специальностям.",
                                            "<p>1650 студентов в год по востребованным специальностям.</p><p>Бакалавриат:<br />Фармацевтической науки;<br />Биофармацевтической науки;<br />Косметической науки;<br />Магистратура<br />Фармации;<br />Фармацевтической биотехнологии<br />Фармацевтического качества по дизайну;<br />Качества по дизайну для фармацевтической промышленности;<br />Косметической науки.</p>")'>
                                            <path onmouseleave="Leave()" onmouseenter="Enter('Торговый центр')" opacity="0.5" d="M719.485 566.716L727.639 561.61L872.867 479.398C885.504 471.227 899.874 472.589 905.479 474.291L972.233 489.61C984.055 492.061 984.633 498.461 983.444 501.355L982.424 567.737C978.756 569.78 974.441 573.695 972.743 575.397C978.042 583.975 997.032 591.907 1005.86 594.801V588.673L1010.96 584.077L1018.6 586.12V591.737L1029.81 594.801L1030.32 601.95L1047.14 606.035C1055.7 608.077 1060.9 611.311 1062.43 612.673L1086.38 629.524C1097.38 636.06 1096.74 643.141 1095.04 645.864L1094.02 668.843L1093 669.353V671.906C1097.49 679.668 1089.77 686.374 1085.36 688.757L941.659 734.714C924.537 742.476 901.912 737.948 892.74 734.714L688.912 666.289C670.567 661.387 669.378 649.949 671.077 644.843L667 606.545L715.409 575.397L719.485 576.929C715.409 572.435 717.787 568.248 719.485 566.716Z" fill="#CA182E"/>
                                        </a>
                                        @endforeach
                                </svg>
                            </div>
                        </div>
{{--                        <div class="slide">--}}
{{--                            <div class="general-img">--}}
{{--                                <img src="/img/genplan/1.jpg" alt="pharma">--}}
{{--                                <svg viewBox="0 0 1920 969" preserveAspectRatio="none">--}}
{{--                                        <a href="" style="cursor: pointer">--}}
{{--                                            <path onmouseleave="Leave()" onmouseenter="Enter('Торговый центр')" opacity="0.5" d="M719.485 566.716L727.639 561.61L872.867 479.398C885.504 471.227 899.874 472.589 905.479 474.291L972.233 489.61C984.055 492.061 984.633 498.461 983.444 501.355L982.424 567.737C978.756 569.78 974.441 573.695 972.743 575.397C978.042 583.975 997.032 591.907 1005.86 594.801V588.673L1010.96 584.077L1018.6 586.12V591.737L1029.81 594.801L1030.32 601.95L1047.14 606.035C1055.7 608.077 1060.9 611.311 1062.43 612.673L1086.38 629.524C1097.38 636.06 1096.74 643.141 1095.04 645.864L1094.02 668.843L1093 669.353V671.906C1097.49 679.668 1089.77 686.374 1085.36 688.757L941.659 734.714C924.537 742.476 901.912 737.948 892.74 734.714L688.912 666.289C670.567 661.387 669.378 649.949 671.077 644.843L667 606.545L715.409 575.397L719.485 576.929C715.409 572.435 717.787 568.248 719.485 566.716Z" fill="#CA182E"/>--}}
{{--                                        </a>--}}
{{--                                </svg>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                </div>



                <div class="general-nav nav">
                    <button class="nav__prev reverse" id="prev">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.64625 15L12.055 22.7938L11.25 23.75L0 14.3488L11.25 5L12.0563 5.955L2.645 13.75H30V15H2.64625Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="nav__next" id="next">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="white"/>
                        </svg>
                    </button>
                </div>

                <div class="general-popup" >
                    <h3 id="structure" class="general-popup__title">
                    </h3>
                </div>

                <div class="general__prompt">
                    <svg width="39" height="35" viewBox="0 0 39 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.4" cx="12.5" cy="12.5" r="12.5" fill="white" fill-opacity="0.5"/>
                        <path d="M12.6083 13.8476L19.6292 32.5701C19.6985 32.7548 19.8227 32.9138 19.9851 33.0257C20.1475 33.1376 20.3403 33.1971 20.5375 33.1961C20.7347 33.1952 20.9269 33.1338 21.0882 33.0202C21.2494 32.9066 21.372 32.7464 21.4394 32.561L24.2521 24.8262C24.3003 24.6937 24.3769 24.5734 24.4766 24.4737C24.5763 24.374 24.6966 24.2973 24.8291 24.2492L32.564 21.4365C32.7493 21.3691 32.9096 21.2465 33.0231 21.0852C33.1367 20.924 33.1981 20.7318 33.1991 20.5346C33.2 20.3373 33.1406 20.1445 33.0286 19.9821C32.9167 19.8198 32.7577 19.6956 32.573 19.6263L13.8505 12.6054C13.677 12.5403 13.4885 12.5266 13.3075 12.5658C13.1264 12.605 12.9605 12.6955 12.8295 12.8265C12.6985 12.9575 12.608 13.1235 12.5687 13.3045C12.5295 13.4856 12.5433 13.6741 12.6083 13.8476Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M24.4727 24.4727L33.0856 33.0856" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <p>Наведите на объект, что бы узнать больше информации</p>
                </div>

            </div>

            <div class="popup__genplan">
                <div class="popup__genplan-btn">
                    <span class="popup__genplan-feedback btn__feedback">Оформить заявку</span>
                    <span class="popup__genplan-close">
            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.0755 10.31L22.2995 0.085965L23.3601 1.14663L13.1361 11.3706L23.2024 21.4369L22.0333 22.606L11.9671 12.5397L2.14694 22.3598L1.08628 21.2992L10.9064 11.479L0.82014 1.39275L1.9892 0.223686L12.0755 10.31Z" fill="#8C1429"/>
</svg>
        </span>
                </div>
                <div class="popup__genplan-container">
                    <img src="/img/bg/vacancy.png" alt="">
                    <h4 id="name"></h4>
                    <div class="block">
                        <div class="block__info">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.25 15H21.7738C20.7938 15 20 15.7938 20 16.7738V18.2263C20 19.2063 20.7938 20 21.7738 20H26.25" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.75 26.25H6.25C4.86875 26.25 3.75 25.1313 3.75 23.75V11.25C3.75 9.86875 4.86875 8.75 6.25 8.75H23.75C25.1313 8.75 26.25 9.86875 26.25 11.25V23.75C26.25 25.1313 25.1313 26.25 23.75 26.25Z" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.5 8.75039L13.3838 4.63414C12.895 4.14539 12.1037 4.14539 11.6162 4.63414L7.5 8.75039" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 6.25039L16.6162 4.63414C17.105 4.14539 17.8963 4.14539 18.3838 4.63414L22.5 8.75039" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p id="number"></p>
                        </div>
                        <div class="block__info">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.625 16.2512H20.0018" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.625 16.2512H21.2523" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <rect x="3.74219" y="3.74609" width="22.5094" height="22.5094" rx="3" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M26.2516 9.99831H3.74219" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.74635 2.49512V4.99616" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.2503 2.49512V4.99616" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.74609 15.9083L9.89532 16.9437L12.2088 14.8604" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.625 21.2532H21.2523" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.74609 20.9102L9.89532 21.9457L12.21 19.8623" stroke="#8C1429" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p id="date"></p>
                        </div>
                    </div>
                    <p id="count"></p>
                    <div id="txt"></div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" integrity="sha512-1dalHDkG9EtcOmCnoCjiwQ/HEB5SDNqw8d4G2MKoNwjiwMNeBAkudsBCmSlMnXdsH8Bm0mOd3tl/6nL5y0bMaQ==" crossorigin="anonymous"></script>
    <script src="/js/cube.js"></script>
    <script>
        $('.header').addClass('bg')
        $('.footer').hide();

        clickPath = (name, number, date, count, txt)  => {
            $('.popup__genplan').addClass('on');
            $('.svgPulse .general-img path').css({'opacity' : 0.5, 'animation': 'none'});
            $('#name').html(name);
            $('#number').html(number);
            $('#date').html(date);
            $('#count').html(count);
            $('#txt').html(txt);
        }
        $('.popup__genplan-close').click(function () {
            $('.popup__genplan').removeClass('on');
            $('.svgPulse .general-img path').css({'animation': 'pulse 2s infinite'});
            $('#name').html('');
            $('#number').html('');
            $('#date').html('');
            $('#count').html('');
            $('#txt').html('');
        })


        function init() {
            if (document.layers) document.captureEvents(Event.MOUSEMOVE);
            document.onmousemove = mousemove;
        }

        function mousemove(event) {
            var mouse_x = mouse_y = 0;
            if (document.attachEvent != null) {
                mouse_x = window.event.clientX;
                mouse_y = window.event.clientY;
            } else if (!document.attachEvent && document.addEventListener) {
                mouse_x = event.clientX;
                mouse_y = event.clientY;
            }

            $('.general-popup').css('top', mouse_y+'px');
            $('.general-popup').css('left', mouse_x+'px');
        }

        init();

        let Enter = (structure) => {
            $('.general-popup').fadeIn(0)
            $('#structure').html(structure);
        }

        let Leave = () => {
            $('.general-popup').fadeOut(0)
            $('#structure').html('');
        }
        if($(window).width() < 768) {
            $('.section__general').scrollLeft($(document).height()/1.7)
        }

    </script>
@endsection
