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
              <rect width="10" height="10" fill="white" />
              <rect x="5" y="5" width="10" height="10" fill="#8C1429" />
            </svg>
            Новости
          </h1>
        </div>
      </div>
      <button class="general__btn">Заказать звонок</button>
    </section>
    <section class="section__news">
      <div class="general__container">
        <h3 class="general__name" data-aos="fade-up">НОВОСТИ</h3>
        <div class="news__container" data-aos="fade-right">
          <div class="box">
            <img src="/img/news/1.png" alt="">
            <div class="box__content">
              <span>14.04.2022</span>
              <h4>Налоговые льготы на аренду земли.</h4>
              <a href="">
                Подробнее
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z"
                    fill="#8C1429" />
                </svg>
              </a>
            </div>
          </div>
          <div class="box">
            <img src="/img/news/2.png" alt="">
            <div class="box__content">
              <span>14.04.2022</span>
              <h4>Срок сдачи 1 фазы 2022 г.</h4>
              <a href="">
                Подробнее
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z"
                    fill="#8C1429" />
                </svg>
              </a>
            </div>
          </div>
          <div class="box">
            <img src="/img/news/3.png" alt="">
            <div class="box__content">
              <span>14.04.2022</span>
              <h4>Налоговые льготы на аренду земли.</h4>
              <a href="">
                Подробнее
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M27.3537 15L17.945 22.7938L18.75 23.75L30 14.3488L18.75 5L17.9437 5.955L27.355 13.75H0V15H27.3537Z"
                    fill="#8C1429" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <a href="" class="general__btn" data-aos="fade-up">Загрузить ещё</a>
      </div>
    </section>
    @include('components.contact-section')
  </div>
@endsection

@section('script')
  <script async src="/js/gsap.min.js"></script>
  <script></script>
@endsection
