<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <x-jet-application-mark class="w-25 mt-3"/>
        </a>

        {{--<a href="/" class="logo logo-light flex">--}}
        {{--<x-jet-application-mark class="block h-9 w-auto" />--}}
        {{--</a>--}}
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('reports.all')}}">
                        <i class="bx bx-receipt"></i>
                        <span>Новости</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Route('blogs.all') }}">
                        <i class="bx bx-edit-alt"></i>
                        <span>Блоги</span>
                    </a>
                </li>
                <li>
                    <a href="{{ Route('blocks.all') }}">
                        <i class="bx bx-list-ol"></i>
                        <span>Блоки</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('projects.all')}}">
                        <i class="bx bxs-collection"></i>
                        <span>Проекты</span>
                    </a>
                </li>
                <li>
                    <a href="/investors/all">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span>Инвесторы</span>
                    </a>
                </li>
                <li>
                    <a href="/partners/all">
                        <i class="bx bx-sitemap"></i>
                        <span>Партнеры</span>
                    </a>
                </li>
                <li>
                    <a href="/teams/all">
                        <i class="bx bx-group"></i>
                        <span>Команда</span>
                    </a>
                </li>
                <li>
                    <a href="/missions/all">
                        <i class="bx bx-trending-up"></i>
                        <span>Наша миссия</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('messages.all')}}">
                        <i class="bx bx-conversation"></i>
                        <span>Сообшении</span>
                    </a>
                </li>
                <li>
                    <a href="/galleries/all">
                        <i class="bx bx-image-alt"></i>
                        <span>Галерея</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('vacancy_categories.all')}}">
                        <i class="bx bx-align-left"></i>
                        <span>Категория ваканции</span>
                    </a>
                </li>
                <li>
                    <a href="/vacancy/all">
                        <i class="bx bx-bell-plus"></i>
                        <span>Ваканции</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
