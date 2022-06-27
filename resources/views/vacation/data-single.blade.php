@extends('layouts.project')

@section('content')
    <!-- СИНГЛ ПРОДУКТА-->
    <div class="main-content">
        <section>
            <div class="container mt-30 mb-30 pt-30 pb-30">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="blog-posts single-post">
                            <article class="post clearfix mb-0">
                                <div class="entry-header">
                                    <div class="post-thumb thumb"> <img src="{{ $data->photo }}" alt="" class="img-responsive img-fullwidth"> </div>
                                </div>
                                <style>
                                    .entry-content img{
                                        width: 100% !important;
                                        height: auto !important;
                                    }
                                </style>
                                <div class="entry-content">
                                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                <li class="font-16 text-white font-weight-600">{{ $data->created_at->format('d') }}</li>
                                                <li class="font-12 text-white text-uppercase">{{ $data->created_at->format('M') }}</li>
                                            </ul>
                                        </div>
                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h3 class="entry-title text-uppercase pt-0 mt-0">{{ $data->$n }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    {!! $data->$d !!}
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
