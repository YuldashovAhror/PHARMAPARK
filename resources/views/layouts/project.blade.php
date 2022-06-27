<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Учись умнее, а не усерднее. Sayyid Mobiles - это революционная платформа медицинского обучения, призванная помочь будущим врачам успешно сдать экзамены USMLE." name="description" />
    <meta content="Sayyid Mobiles" name="author" />
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">
    @include('layouts.simple.css')
    @yield('style')
    @trixassets
    @livewireStyles
    @stack('styles')
</head>
<body>

<?php
    if (auth()->check() && auth()->user()->stock_id){
        if (!session()->get('stock')){
            Session::put('stock', auth()->user()->stock_id);
        }
    }else{
        Session::put('stock', 0);
    }
?>

<div id="preloader">
    <div id="status">
        <div class="spinner">
            <i class="uil-shutter-alt spin-icon"></i>
        </div>
    </div>
</div>

<div id="layout-wrapper">
    @include('layouts.simple.header')
    @include('layouts.simple.sidebar')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @if(session()->get('error'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        {{ isset($slot) ? $slot : ''}}
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.simple.footer')
    </div>
</div>
<div class="rightbar-overlay"></div>
@include('layouts.simple.script')
@yield('scripts')
@livewireScripts

@stack('scripts')
</body>
</html>
