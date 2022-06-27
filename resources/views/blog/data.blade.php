@extends('layouts.main')

@section('style')
@endsection

@section('content')
    <div class="wrapper wrapper__second">
        <section class="section__banner">
            <div class="general__container">
                <div class="banner">
                    <h1 class="general__title">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="10" height="10" fill="white"/>
                            <rect x="5" y="5" width="10" height="10" fill="#8C1429"/>
                        </svg>
                        Блог
                    </h1>
                </div>
            </div>
            <button class="general__btn">Заказать звонок</button>
        </section>
        <section class="section__news">
            <div class="general__container">
                <h3 class="general__name" data-aos="fade-up">БЛОГ</h3>
                <div class="news__container" data-aos="fade-right">
                    @foreach($data as $value)
                        <div class="box">
                            <img src="{{ $value->photo }}" alt="">
                            <div class="box__content">
                                <span>{{ $value->created_at->format('d.m.Y') }}</span>
                                <h4>{{ $value->$n }}</h4>
                                <a href="/reports/{{ $value->slug }}">
                                    Подробнее
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z" fill="#8C1429"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="" class="general__btn" data-aos="fade-up">Загрузить ещё</a>
            </div>
        </section>
        <section class="section__contact">
            <div class="general__container">
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
    <script async src="/js/gsap.min.js"></script>
    <script>


    </script>
@endsection

