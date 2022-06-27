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
    <section class="section__single">
      <div class="general__container">
        <div class="single">
          <div class="info">
            <img src="{{ $data->photo }}" alt="" class="info__banner">
            <h2 class="general__title">{{ $data->$n }}</h2>
            {!! $data->$d !!}
          </div>
          <div class="other">
            @foreach (\App\Models\Report::where('slug', '!=', $data->slug)->take(5)->get([$n, 'slug'])
      as $value)
              <div class="box">
                <h5>{{ $value->$n }}</h5>
                <a href="{{ $value->slug }}">Читать</a>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    @include('components.contact-section')
  </div>
@endsection

@section('script')
  <script async src="/js/gsap.min.js"></script>
  <script>
    let owlCompany = $('.company');
    owlCompany.owlCarousel({
      center: true,
      items: 5,
      loop: true,
      margin: 75,
      autoplay: true,
      autoWidth: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 6000,
      autoplayHoverPause: false
    });
  </script>
@endsection
