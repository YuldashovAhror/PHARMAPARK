@extends('layouts.project')

@section('content')

    <div class="main-content">

        <section>
            <div class="container">
                <div class="row multi-row-clearfix">
                    <div class="blog-posts">
                        @foreach($data as $datum)
                            <div class="col-md-4">
                                <article class="post clearfix mb-30 bg-lighter">
                                    <div class="entry-header">
                                        <div class="post-thumb thumb">
                                            <img src="{{ $datum->photo }}" alt="" class="img-responsive img-fullwidth">
                                        </div>
                                    </div>
                                    <div class="entry-content border-1px p-20 pr-10">
                                        <div class="entry-meta media mt-0 no-bg no-border">
                                            <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                <ul>
                                                    <li class="font-16 text-white font-weight-600">{{ $datum->created_at->format('d') }}</li>
                                                    <li class="font-12 text-white text-uppercase">{{ $datum->created_at->format('M') }}</li>
                                                </ul>
                                            </div>
                                            <div class="media-body pl-15">
                                                <div class="event-content pull-left flip">
                                                    <h4 class="entry-title text-white text-uppercase m-0 mt-5">
                                                        <a href="/reports/{{ $datum->id }}">{{ $datum->$n }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                        <div class="col-md-12">
                            <nav>
                                {{ $data->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
