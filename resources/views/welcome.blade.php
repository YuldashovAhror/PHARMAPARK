@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="preloader">
        <img class="preloader__logo" src="/img/logo.svg" alt="">
        <div class="preloader__load">
            <div class="preloader__percent">
                <span>0</span>%
            </div>
            <div class="preloader__loading"></div>
            <div class="preloader__load-grey"></div>
        </div>
    </div>

    <div class="wrapper">
        <section class="section__main">
            <video id="my-video" class="main__video" playsinline autoplay="" muted loop webkit-playsinline preload="auto" poster="/img/bg/1.png" >
                <source src="/img/main.webm" type="video/webm">
                <source src="/img/main.mp4" type="video/mp4">
            </video>
            <div class="general__container">
                <div class="main__container">
                    <div class="left">
                        <h1 class="general__title">Tashkent Pharma Park</h1>
                        <p class="general__subtitle">Инновационный научно-производственный фармацевтический кластер </p>
                    </div>
                    <div class="right">
                        <a href="/about">Подробнее</a>
                        <a href="/investors">Инвесторам</a>
                    </div>
                </div>
            </div>
            <img src="/img/icons/mouse.svg" alt="" class="mouse">
        </section>
        <section class="section__about">
            <div class="about__container">
                <div class="left" data-aos="fade-right">
                    <h2 class="general__title">Настоящие инвестиции в будущее</h2>
                    <a href="/about" class="general__btn">О кластере</a>
                </div>
                <div class="right" data-aos="fade-left">
                    <h2 class="general__title">О «TASHKENT <br> PHARMA PARK»</h2>
                    <p class="txt">Инновационный научно-производственный фармацевтический кластер </p>
                    <p class="general__subtitle">Кластер включает в себя техно парк промышленную зону. В состав техно парка войдут Фармацевтический технический университет научно-исследовательские центры и лаборатории, фармакопейный центр, учебно-научные лаборатории, виварий и другое. Среди основных задач кластера — развитие фармацевтической отрасли путем внедрения ноу-хау и высоких технологий с применением международного опыта.</p>
                </div>
            </div>
        </section>
        <section class="section__numbers">
            <div class="general__container">
                <h3 class="general__name" data-aos="fade-up">Проект в цифрах</h3>
                <div class="numbers__container">
                    <div class="box" data-aos="fade-left">
                        <h3>130 га</h3>
                        <p>площадь кластера</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <h3><50 млн. $</h3>
                        <p>Собственные средства</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <h3>188,7 млн. $</h3>
                        <p>Льготного финансирования</p>
                    </div>
                    <div class="box" data-aos="fade-left">
                        <h3>2022г.</h3>
                        <p>Открытие 1 лота</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__projects" data-aos="fade-right">
            <div class="projects__slider owl-carousel">
                @foreach(\App\Models\Block::get(['id','photo', $n]) as $value)
                    <div class="box" style="background-image: url({{ $value->photo }});">
                        <div class="box__content">
                            <h4>{{ $value->$n }}</h4>
                            <a href="{{ $value->id }}">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="projects__buttons">
                <button class="projects__prev">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.64625 15L12.055 22.7938L11.25 23.75L0 14.3488L11.25 5L12.0563 5.955L2.645 13.75H30V15H2.64625Z" fill="white"/>
                    </svg>
                </button>
                <button class="projects__next">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="#8C1429"/>
                    </svg>
                </button>
            </div>
        </section>
        <section class="section__percent">
            <div class="general__container">
                <h3 class="general__name" data-aos="fade-up">Налоговые преференции и льготы</h3>
                <div class="percent__container">
                    <div class="box" data-aos="fade-right">
                        <h4>0%</h4>
                        <p>Земельный налог</p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <h4>0%</h4>
                        <p>Налог на имущество</p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <h4>0%</h4>
                        <p>Налог за пользование водными ресурсами</p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <h4>0%</h4>
                        <p>Таможенные платежи за строительные материалы</p>
                    </div>
                    <div class="box" data-aos="fade-right">
                        <h4>0%</h4>
                        <p>Таможенные платежи при ввозе техн. оборудования</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section__innovation" style="background-image: url(/img/bg/innovation.png);" data-aos="fade-up">
            <div class="general__container">
                <div class="innovation">
                    <div class="innovation__top">
                        <h2 class="general__title">Здесь рождаются инновации</h2>
                        <div class="location">
                            <svg width="32" height="39" viewBox="0 0 32 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.6 0C7.02 0 0 7.02 0 15.6C0 28.47 15.6 39 15.6 39C15.6 39 31.2 28.47 31.2 15.6C31.2 7.02 24.18 0 15.6 0ZM15.6 27.3C9.165 27.3 3.9 22.035 3.9 15.6C3.9 9.165 9.165 3.9 15.6 3.9C22.035 3.9 27.3 9.165 27.3 15.6C27.3 22.035 22.035 27.3 15.6 27.3Z" fill="white"/>
                                <path d="M15.5969 23.4018C19.9047 23.4018 23.3969 19.9096 23.3969 15.6018C23.3969 11.2939 19.9047 7.80176 15.5969 7.80176C11.2891 7.80176 7.79688 11.2939 7.79688 15.6018C7.79688 19.9096 11.2891 23.4018 15.5969 23.4018Z" fill="white"/>
                            </svg>
                            <p>
                                <span>Узбекистан, Ташкентская область</span>
                                Зангиатинский район, массив Хонобод.
                            </p>
                        </div>
                    </div>
                    {{--<div class="innovation__container">--}}
                        {{--<div class="box">--}}
                            {{--<span>--}}
                                {{--<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path d="M19.4922 9H10.0977H0V10.0352H10.0977H19.4922V9Z" fill="black"/>--}}
{{--<path d="M10.0977 20.7031V9.84375V0H9.02344V9.84375V20.7031H10.0977Z" fill="black"/>--}}
{{--</svg>--}}
                            {{--</span>--}}
                            {{--<div class="box__info">Административный и лабораторный комплекс--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="box">--}}
                            {{--<span>--}}
                                {{--<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path d="M19.4922 9H10.0977H0V10.0352H10.0977H19.4922V9Z" fill="black"/>--}}
{{--<path d="M10.0977 20.7031V9.84375V0H9.02344V9.84375V20.7031H10.0977Z" fill="black"/>--}}
{{--</svg>--}}
                            {{--</span>--}}
                            {{--<div class="box__info">Лаборатории Блоков А и Б</div>--}}
                        {{--</div>--}}
                        {{--<div class="box">--}}
                            {{--<span>--}}
                                {{--<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path d="M19.4922 9H10.0977H0V10.0352H10.0977H19.4922V9Z" fill="black"/>--}}
{{--<path d="M10.0977 20.7031V9.84375V0H9.02344V9.84375V20.7031H10.0977Z" fill="black"/>--}}
{{--</svg>--}}
                            {{--</span>--}}
                            {{--<div class="box__info">Опытно-экспериментальное производство</div>--}}
                        {{--</div>--}}
                        {{--<div class="box">--}}
                            {{--<span>--}}
                                {{--<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--<path d="M19.4922 9H10.0977H0V10.0352H10.0977H19.4922V9Z" fill="black"/>--}}
{{--<path d="M10.0977 20.7031V9.84375V0H9.02344V9.84375V20.7031H10.0977Z" fill="black"/>--}}
{{--</svg>--}}
                            {{--</span>--}}
                            {{--<div class="box__info">Торговый центр</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <a href="/genplan" class="general__btn">Генплан проекта</a>
                </div>
            </div>
        </section>
        <section class="section__investors">
            <h3 class="general__name" data-aos="fade-up">инвесторам</h3>
            <div class="general__container">
                @foreach(\App\Models\Investor::get(['id','photo', $n])->take(3) as $value)
                <div class="box @if(($loop->index+1)%2==0) box__ff @endif">
                    <div class="info" data-aos="fade-right">
                        <h4 class="general__title">{{ $value->$n }}</h4>
                        <a href="/investors/{{ $value->id }}">Подробнее
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="#8C1429"/>
                            </svg>
                        </a>
                    </div>
                    <img src="{{ $value->photo }}" alt="" data-aos="fade-left">
                </div>
                @endforeach
            </div>
            <a href="/investors" class="general__btn" data-aos="fade-up">Все</a>
        </section>
        <section class="section__company">
            <div class="general__container">
                <h3 class="general__name" data-aos="fade-up">Компании участники</h3>
            </div>
            <div class="company owl-carousel" data-aos="fade-right">
                @foreach(\App\Models\Partner::all() as $value)
                    <div class="box"><img src="{{ $value->photo }}" alt=""></div>
                @endforeach
            </div>
        </section>
        <section class="section__feedback">
            <div class="left" data-aos="fade-right">
                <h2 class="general__title">Появились вопросы?<br>
                    Давайте обсудим их</h2>
                <form action="/messages" method="post" class="feedback__form">
                    @csrf
                    <input type="text" name="name" placeholder="Имя">
                    <input type="tel" name="phone" placeholder="Телефон">
                    <textarea placeholder="Комментарий" name="message" id=""  rows="1"></textarea>
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
            <img class="feedback__img" src="/img/bg/feedback.png" alt="" data-aos="fade-left">
        </section>
        <section class="section__news">
            <div class="general__container">
                <h3 class="general__name" data-aos="fade-up">НОВОСТИ</h3>
                <div class="news__container" data-aos="fade-right">
                    @foreach($reports as $value)
                    <div class="box">
                        <img src="{{ $value->photo }}" alt="">
                        <div class="box__content">
                            <span>{{ $value->created_at->format('d.m.Y') }}</span>
                            <h4>{{ $value->$n }}</h4>
                            <a href="/reports/{{ $value->id }}">
                                Подробнее
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="#8C1429"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="news__mobile owl-carousel">
                    @foreach($reports as $value)
                        <div class="box">
                            <img src="{{ $value->photo }}" alt="">
                            <div class="box__content">
                                <span>{{ $value->created_at->format('d.m.Y') }}</span>
                                <h4>{{ $value->$n }}</h4>
                                <a href="/reports/{{ $value->id }}">
                                    Подробнее
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="#8C1429"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="news__buttons">
                    <button class="news__prev">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.64625 15L12.055 22.7938L11.25 23.75L0 14.3488L11.25 5L12.0563 5.955L2.645 13.75H30V15H2.64625Z" fill="white"/>
                        </svg>
                    </button>
                    <button class="news__next">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="#8C1429"/>
                        </svg>
                    </button>
                </div>
                <a href="/reports" class="general__btn" data-aos="fade-up">Все</a>
            </div>
        </section>
        <section class="section__gallery" data-aos="fade-up">
            <img src="" alt="" class="gallery__img">
            <div class="gallery__title"></div>
            <div class="gallery owl-carousel">
                @foreach(\App\Models\Gallery::get(['photo', $n]) as $value)
                <div class="gallery__item">
                    <img class="owl-lazy" src="{{ $value->photo }}" alt="">
                    <h4 class="gallery__item-title">{{ $value->$n }}</h4>
                </div>
                @endforeach
            </div>
            <div class="gallery__buttons">
                <button class="gallery__prev">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.64625 15L12.055 22.7938L11.25 23.75L0 14.3488L11.25 5L12.0563 5.955L2.645 13.75H30V15H2.64625Z" fill="white"/>
                    </svg>
                </button>
                <button class="gallery__next">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </section>
        <section class="section__contact">
            <div class="general__container">
                <div class="contact__map" id="map" data-aos="fade-down">
                </div>
                <div class="contact__container" data-aos="fade-up">
                    <div class="box">
                    <span>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M23.7463 25C13.0825 25.015 4.98876 16.825 5.00001 6.25375C5.00001 5.5625 5.56001 5 6.25001 5H9.55001C10.1688 5 10.695 5.455 10.7863 6.0675C11.0039 7.53632 11.4312 8.96631 12.055 10.3138L12.1838 10.5912C12.2702 10.778 12.2889 10.9891 12.2364 11.188C12.1839 11.387 12.0636 11.5615 11.8963 11.6813C10.8738 12.4113 10.4838 13.88 11.28 15.025C12.2825 16.4667 13.5337 17.7183 14.975 18.7213C16.1213 19.5163 17.59 19.1263 18.3188 18.105C18.4384 17.9372 18.613 17.8164 18.8123 17.7637C19.0116 17.711 19.223 17.7296 19.41 17.8162L19.6863 17.9437C21.0338 18.5687 22.4638 18.9963 23.9325 19.2138C24.545 19.305 25 19.8313 25 20.4513V23.75C25 23.9143 24.9676 24.0769 24.9047 24.2286C24.8418 24.3804 24.7497 24.5182 24.6335 24.6343C24.5172 24.7504 24.3793 24.8425 24.2275 24.9052C24.0757 24.968 23.913 25.0002 23.7488 25H23.7463Z" fill="#8C1429"/>
</svg>
                    </span>
                        <div class="info">
                            <p>Телефон</p>
                            <a href="tel:+998712038181">+998 7I 203-81-81</a>
                            <p>(внутр. номера 220, 206)</p>
                        </div>
                    </div>
                    <div class="box">
                    <span>
<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.8088 16.3689L26.6177 7.48083V6.96465C26.6177 6.43194 26.1857 6 25.653 6H3.96465C3.43194 6 3 6.43194 3 6.96465V7.48083L14.8088 16.3689Z" fill="#8C1429"/>
<path d="M15.4399 18.5208C15.2531 18.6615 15.0308 18.7318 14.8088 18.7318C14.5868 18.7318 14.3646 18.6615 14.1777 18.5208L3 10.1074V22.1955C3 22.7282 3.43194 23.1601 3.96465 23.1601H25.653C26.1857 23.1601 26.6177 22.7282 26.6177 22.1955V10.1074L15.4399 18.5208Z" fill="#8C1429"/>
</svg>
                    </span>
                        <div class="info">
                            <p>Электронная почта</p>
                            <a href="mailto:pharmacluster@umail.uz">pharmacluster@umail.uz</a>
                        </div>
                    </div>
                    <div class="box">
                    <span>
<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 1.875C12.266 1.87824 9.64481 2.96578 7.71154 4.89904C5.77828 6.83231 4.69074 9.45345 4.6875 12.1875C4.6875 21.0114 14.0625 27.6764 14.4617 27.9556C14.6195 28.0659 14.8074 28.125 15 28.125C15.1926 28.125 15.3805 28.0659 15.5383 27.9556C15.9375 27.6764 25.3125 21.0114 25.3125 12.1875C25.3093 9.45345 24.2217 6.83231 22.2885 4.89904C20.3552 2.96578 17.734 1.87824 15 1.875ZM15.0007 8.43784C15.7424 8.43784 16.4674 8.65777 17.0841 9.06983C17.7008 9.48188 18.1814 10.0676 18.4652 10.7528C18.7491 11.438 18.8233 12.192 18.6786 12.9194C18.5339 13.6469 18.1768 14.315 17.6523 14.8395C17.1279 15.3639 16.4597 15.7211 15.7323 15.8658C15.0048 16.0105 14.2508 15.9362 13.5656 15.6524C12.8804 15.3686 12.2947 14.8879 11.8827 14.2712C11.4706 13.6545 11.2507 12.9295 11.2507 12.1878C11.2507 11.6954 11.3477 11.2077 11.5361 10.7528C11.7246 10.2978 12.0008 9.88438 12.349 9.53616C12.6972 9.18794 13.1106 8.91171 13.5656 8.72326C14.0206 8.53481 14.5082 8.43783 15.0007 8.43784Z" fill="#8C1429"/>
</svg>
                    </span>
                        <div class="info">
                            <p>Адрес</p>
                            <a href="">Узбекистан, Ташкентская область, Зангиатинский район, массив Хонобод.</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    @include('layouts.map-js')
    <script async src="/js/gsap.min.js"></script>
    <script>
        let owlProject = $('.projects__slider');
        owlProject.owlCarousel({
            center:true,
            margin:75,
            loop:true,
            autoWidth:true,
                responsive: {
                    0: {
                        items: 1,
                    },

                    700: {
                        items: 4,
                    },
                }
        },
            $('.projects__next').click(function () {
                owlProject.trigger('next.owl.carousel');
            }),
            $('.projects__prev').click(function () {
                owlProject.trigger('prev.owl.carousel', [300]);
            })
        );
        $(".innovation__container div").click(function () {
                $("div.innovation__container div").not(this).removeClass("active");
                $(this).addClass("active");
        });
        let owlCompany = $('.company');
        owlCompany.owlCarousel({
            center: true,
            items:5,
            loop:true,
            autoplay:true,
            autoWidth:true,
            autoplayTimeout:5000,
            autoplaySpeed:6000,
            autoplayHoverPause:false
        });

        let owlNews = $('.news__mobile');
        owlNews.owlCarousel({
                center:true,
                loop:true,
                autoWidth:true,
                items: 1
            },
            $('.news__next').click(function () {
                owlNews.trigger('next.owl.carousel');
            }),
            $('.news__prev').click(function () {
                owlNews.trigger('prev.owl.carousel', [300]);
            })
        );


        $(window).on('load', () => {
            setTimeout(()=>{
                let carouselLength = $('.gallery__item').length
                if(carouselLength <= 4) {
                    carouselLength = 2
                } else {
                    carouselLength = 3
                }

                let slideChange = event => {
                    if (!event.namespace) {
                        return;
                    }
                    let slides = event.relatedTarget;

                    $('.gallery__item').removeClass('gallery__item-active');
                    $('.gallery__item').eq(slides.current()).addClass('gallery__item-active');
                    let img = $('.gallery__item').eq(slides.current()).find('.owl-lazy').attr('src')
                    let title = $('.gallery__item').eq(slides.current()).find('.gallery__item-title').text()

                    $('.gallery__title').text(title)
                    let str = $(".gallery__title").text().split('');
                    $(".gallery__title").text('');
                    $.each(str, function(index) {
                        $(".gallery__title").append('<span>' + this + '</span>');
                        $('.gallery__title span').css('opacity', '0')
                        $('.gallery__title span').eq(index).css({"transition-delay": `${(index * 0.04)}s`});
                    });

                    setTimeout(() => {
                        $('.gallery__title span').css('opacity', '1')
                    }, 100)

                    $('.gallery__img').attr('src', img)

                }

                $('.gallery').owlCarousel({
                    dots: true,
                    nav: false,
                    mouseDrag: false,
                    smartSpeed: 700,
                    lazyLoad: true,
                    autoWidth: true,
                    onInitialized: slideChange,
                    onChanged: slideChange,
                    autoplay: true,
                    margin: 40,
                    autoplayTimeout: 3000,
                    loop: true,
                    responsiveBaseElement: 'body',
                    responsive: {
                        0: {
                            items: 2,
                        },

                        700: {
                            items: 4,
                        },
                    }

                })

                $('.gallery__prev').click(() => {
                    $('.gallery').trigger('prev.owl.carousel', [700]);
                    $('.gallery').trigger('stop.owl.autoplay')
                })

                $('.gallery__next').click(() => {
                    $('.gallery').trigger('next.owl.carousel', [700]);
                    $('.gallery').trigger('stop.owl.autoplay')
                })
            }, 500)

        })
    </script>
@endsection

