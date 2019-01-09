<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Фитнес клуб FITRON - низкие цены на абонементы на занятия в тренажерном зале в Ростове-на-Дону</title>

    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/css/slider/slicebox.css" />
    <link rel="stylesheet" type="text/css" href="/css/slider/custom.css" />

    <!-- Styles -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ftsite.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_delta.css') }}" rel="stylesheet">
    <link href="{{ asset('css/new.css') }}" rel="stylesheet">


@stack('style')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    {!! NoCaptcha::renderJs('ru', true, 'onloadCaptcha') !!}

</head>
<body>

<div id="maincont">

    <input type="checkbox" id="modal_menu" style="display: none;">
    <i id="modal_background_delta_0"></i>
    <i id="modal_background_delta_1"></i>
    <i id="modal_background_delta_2"></i>
    <i id="modal_background_delta_3"></i>
    <i id="modal_background_delta_4"></i>
    <i id="modal_background_delta_5"></i>
    <i id="modal_background_delta_6"></i>
    <i id="modal_background_delta_7"></i>
    <i id="modal_background_delta_8"></i>
    <i id="modal_background_delta_9"></i>
    <label for="modal_menu" id="modal_close_delta_all"><i class="fas fa-times"></i></label>
    <div class="menu-container">
        <ul class="menu" style="visibility: visible; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            @foreach($params['pages'] as $page)
                <li {!!($params['main_page_id'] == $page['id'] ? 'class="active"' : '')!!}>
                    <a href="{{0 < strlen($page->trek) ? $page->trek : url($page->code)}}"><span>{{$page->menu}}</span></a>
                </li>
            @endforeach
            <li><a href="javascript:;" style="color: #ff0033;">Перезвоните мне</a></li>
            <li><a href="tel:+78633109571" class="phone comagic_phone2">+7 (863) 310-9571</a></li>
        </ul>
    </div>

    <div class="header">
        <div class="header_top_fon">
            <div class="header_top">
                <div class="header_top_block">
                    <a href="/" class="header_top_block_a">
                    <div class="header_top_block_div_image">
                        <img src="/images/fitron-logo-mobile.svg" alt="fitron" class="header_top_block_logo">
                    </div>
                    <div class="header_top_block_div_text">
                        <span class="header_top_block_div_text_span">Сеть фитнес-клубов</span>
                    </div>
                    </a>
                </div>
                <div class="header_top_block" id="select_club">
                    <div class="header_top_block_select_label">Выберите клуб</div>
                    <div class="header_top_block_select_club select-club">
                        <div class="select">
                            <span class="label" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
                        </div>
                        <div class="another-clubs">
                            @foreach($params['clubs'] as $club)
                                <div class="another-club" data-id="{{$club->id}}" data-code="{{$club->code}}">{{$club->name}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <label for="modal_menu" class="menu-trigger uk-hidden-medium uk-hidden-large header_menu_trigger_label">
                    <i class="menu-trigger-bar top"></i>
                    <i class="menu-trigger-bar middle"></i>
                    <i class="menu-trigger-bar bottom"></i>
                </label>
                <div class="header_top_block">
                    @auth
                        <div class="cabinet_user">
                            <div class="cabinet_user_img">
                                <i class="far fa-angry" style="font-size: 80px;"></i>
                                {{--<img src="###" alt="">--}}
                            </div>
                            <div class="cabinet_user_fio">
                                <div>Иван Иванов</div>
                                <div>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button>Выйти</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="header_top_block_phone"><a href="tel:+78633109571">+7&nbsp;(8&nbsp;6&nbsp;3)&nbsp;3&nbsp;1&nbsp;0&nbsp;-&nbsp;9&nbsp;5&nbsp;-&nbsp;7&nbsp;1</a></div>
                        <div class="header_top_block_add"><a href="{{ route('join') }}"><span>Вступить в FITRON</span></a></div>
                    @endauth
                </div>
            </div>
        </div>

        <div class="header_nav_fon" id="header_nav_menu">
            <div class="header_nav">
                <ul class="header_nav_ul">
                @foreach($params['pages'] as $page)
                    <li {!!($params['main_page_id'] == $page['id'] ? 'class="header_nav_ul_li active"' : 'class="header_nav_ul_li"')!!}>
                        <a href="{{0 < strlen($page->trek) ? $page->trek : url($page->code)}}" class="header_nav_ul_li_a"><span>{{$page->menu}}</span></a>
                    </li>
                @endforeach
                    {{--<li class="header_nav_ul_li header_nav_cabinet">--}}
                        {{--<a href="{{ route('admin') }}" class="header_nav_ul_li_a header_nav_cabinet_a"><span>Личный кабинет</span></a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
    <div class="redhr header_redhr"></div>
    <div class="uk-sticky-placeholder" style="height: 41px; margin: 0px; display: none;">
        <div id="top-panel" data-uk-sticky="{media: '(max-width:767px) and (orientation: portrait), (min-width:768px)'}" style="position: fixed; top: 0px; width: 100%;" class="uk-sticky-init uk-active">
            <div class="container">
                <a href="/" class="logo-mobile-link">
                    <img src="/images/fitron-logo-mobile.svg" alt="" class="logo-mobile uk-visible-small">
                </a>
                <span class="title-label">Выберите клуб:</span>
                <div class="select-club newsbor">
                    <div class="select newsbor">
                        <span class="label newsbor" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
                    </div>
                    <span class="select-club-span newsbor">/</span>
                    <div class="another-clubs newsbor">
                        @foreach($params['clubs'] as $club)
                            <div class="another-club newsbor" data-id="{{$club->id}}" data-code="{{$club->code}}">{{$club->name}}</div>
                        @endforeach
                    </div>
                </div>
                <a href="{{route('schedule')}}" class="open-schedule">
                    <i class="fas fa-calendar-alt" style="font-size: 20px;"></i>
                    {{--<i class="uk-icon-calendar"></i>--}}
                    <span>открыть расписание</span>
                </a>
                <label for="modal_menu" span class="menu-trigger uk-hidden-medium uk-hidden-large">
                  <i class="menu-trigger-bar top"></i>
                  <i class="menu-trigger-bar middle"></i>
                  <i class="menu-trigger-bar bottom"></i>
                </label>
                {{--@if(Route::has('login'))--}}
                    {{--<div style="float: right;position: relative; display: inline-block;">--}}
                        {{--@auth--}}
                            {{--<a href="{{ url('/admin') }}" style="color: white;">Личный кабинет</a>--}}
                        {{--@else--}}
                            {{--<a href="{{ route('login') }}" style="color: white;">Авторизоваться</a>--}}
                        {{--@endauth--}}
                    {{--</div>--}}
                {{--@endif--}}
                <div class="uk-clearfix"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="uk-sticky-placeholder" style="display: none;/*height: 78px; margin: 0px;*/">
            <header data-uk-sticky="{top:-40,media: '(min-width:768px)'}" style="margin: 0px;" class="">
                <nav id="topnav" class="uk-hidden-small nomainpagenav">
                    <div class="navtitle">
                    @if(11 == $params['main_page_id'])
                    <div></div>
                    @else
                    <a href="/"></a>
                    @endif
                    </div>
                    <div class="clubnamecont"></div>
                    <ul>
                        @foreach($params['pages'] as $page)
                        <li {!!($params['main_page_id'] == $page['id'] ? 'class="active"' : '')!!}>
                            <a href="{{0 < strlen($page->trek) ? $page->trek : url($page->code)}}"><span>{{$page->menu}}</span></a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="topphone">
                        <a class="phone comagic_phone2" href="tel:+78633109571">{{$params['select_club']->phone}}</a>
                        <br>
                        <label style="cursor: pointer;" class="callme" for="modal_feedback">перезвоните мне</label>
                    </div>
                    <div class="uk-clearfix"></div>
                </nav>
                <!--<a href="#offcanvas" class="uk-navbar-flip uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>-->
                <div class="uk-clearfix"></div>
            </header>
        </div>
@yield('logo')
@yield('head')
@yield('slider')
@yield('schedule')
    </div>
@yield('pagehead')
@yield('main')
<footer>
        <div class="container">
            <div class="footer-left">
                <div class="footer-left-top">
                    <b class="footer-header">Контакты</b>
                    <hr>

                    <div id="footer_select_club">
                        <div class="select-club">
                            <div class="select">
                                <span class="label" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
                            </div>
                            <div class="another-clubs">
                                @foreach($params['clubs'] as $club)
                                    <div class="another-club" data-id="{{$club->id}}" data-code="{{$club->code}}">{{$club->name}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <p id="footer-contact-set-{{$params['select_club']->code}}" class="club-contacts uk-active">{{$params['select_club']->address}}
                        <br><a class="phone comagic_phone2" href="tel:+78633109571">{{$params['select_club']->phone}}</a>
                        <span class="showmap"><br><a href="https://goo.gl/maps/YKxj7vnJrH62" target="_blank">показать на карте</a></span>
                    </p>
                @foreach($params['clubs'] as $club)
                    <p id="footer-contact-set-{{$club->code}}" class="club-contacts">{{$club->address}}
                        <br><a class="phone comagic_phone2" href="tel:+78633109571">{{$club->phone}}</a>
                        <span class="showmap"><br><a href="https://goo.gl/maps/YKxj7vnJrH62" target="_blank">показать на карте</a></span>
                    </p>
                @endforeach
                    <div class="socials">
                        <a href="https://www.instagram.com/fitron.club/" class="instalink" target="blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/fitronrostov" class="fblink" target="blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://vk.com/fitronrostov" class="vklink" target="blank">
                            <i class="fab fa-vk"></i>
                        </a>
                    </div>
                    <a href="https://play.google.com/store/apps/details?id=com.itrack.fitron378516" target="_blank">
                        <img style="width: 120px;margin-left: -8px;margin-bottom: 5px;" alt="Доступно в Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/ru_badge_web_generic.png">
                    </a>
                    <a href="https://itunes.apple.com/us/app/fitron/id862699219?mt=8" target="_blank">
                        <img style="width: 104px;" alt="Доступно в App Store" src="/images/app-store-button.png">
                    </a>
                </div>
            </div>

            <div class="footer-map">
                <div id="googlemap" style="position: relative; overflow: hidden;">

                </div>
            </div>


            <div class="footer-right">
                <div class="uk-grid uk-grid-width-1-2">
                    <div>
                        <b class="footer-header">О компании</b>
                        <hr>
                        <a href="{{route('mission')}}">Миссия</a>
                        <br><a href="{{route('boss')}}">Руководство</a>
                        <br><a href="{{route('vacancies')}}">Вакансии</a>
                        <br><a href="{{route('press')}}">Пресса</a>
                        <br><a href="{{route('uncos')}}">Новости</a>
                        <br><a href="{{route('gallery')}}">Галерея</a>
                    </div>
                    <div>
                        <b class="footer-header">Дополнение</b>
                        <hr>
                        {{--<i class="notactivehref">Партнёры</i><br>--}}
                        <a href="{{route('franchise')}}">Франчайзинг</a>
                        <br><a href="/FTUploads/pdf/Indoor-поверхности.pdf" target="_blank">Рекламодателям</a>
                        {{--<br><i class="notactivehref">Рекламодателям</i>--}}
                        <br><a href="{{route('corporate')}}">Корпоративным клиентам</a>
                        <br><a href="{{route('payment')}}">Способы оплаты</a>
                    </div>
                    <div class="uk-width-1-1">
                        <div class="socialscont">
                            <a href="https://www.instagram.com/fitron.club/" class="instalink" target="_blank">@fitron.club</a>
                            <img src="/images/paykeeper.png" alt="" style="height: 30px;float: right;margin-top: -5px;">
                        </div>
                        <div class="instacont">
                            <div class="uk-grid uk-grid-small uk-grid-width-1-5">
                                <div><a href="https://www.instagram.com/p/BmSaLV_BfPG" target="_blank" rel="nofollow" style="height: 75px;width: 75px;background: url(https://instagram.fhrk1-1.fna.fbcdn.net/vp/47b3ea6399dc1765703d22364572f591/5B6FB211/t51.2885-15/e35/38954587_896015010598209_2355587659738382336_n.jpg) no-repeat center;background-size: cover;"></a></div>
                                <div><a href="https://www.instagram.com/p/BmP1IMfBJqZ" target="_blank" rel="nofollow" style="height: 75px;width: 75px;background: url(https://instagram.fhrk1-1.fna.fbcdn.net/vp/ebc7d4e64f5ed1f929a3a44110763ef6/5BFF001E/t51.2885-15/e35/38286493_888681714667928_7011366637060227072_n.jpg) no-repeat center;background-size: cover;"></a></div>
                                <div><a href="https://www.instagram.com/p/BmOilVXhx0R" target="_blank" rel="nofollow" style="height: 75px;width: 75px;background: url(https://instagram.fhrk1-1.fna.fbcdn.net/vp/d03eb43a9385d6d55496414ddf660b4e/5BF3A875/t51.2885-15/e35/37928775_238373920146958_2885592980616380416_n.jpg) no-repeat center;background-size: cover;"></a></div>
                                <div><a href="https://www.instagram.com/p/BmNlFZnhBwf" target="_blank" rel="nofollow" style="height: 75px;width: 75px;background: url(https://instagram.fhrk1-1.fna.fbcdn.net/vp/9cbb08db40ed3c21c4dab82370e2e8f1/5B700FA1/t51.2885-15/e35/37845900_430795280759735_6497040085706342400_n.jpg) no-repeat center;background-size: cover;"></a></div>
                                <div><a href="https://www.instagram.com/p/BmNYvGLhSfm" target="_blank" rel="nofollow" style="height: 75px;width: 75px;background: url(https://instagram.fhrk1-1.fna.fbcdn.net/vp/f317e530c9781b4b0c7ef2d2ee514993/5C0B4DDF/t51.2885-15/e35/38027913_2081832495162145_6468559856918855680_n.jpg) no-repeat center;background-size: cover;"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<p class="madeby">--}}
                    {{--<a href="#" id="switchdesign">Space design</a>--}}
                    {{--<a href="http://vismaya.ru/" class="madeby-link" target="_blank">Made by FITRON</a>--}}
                {{--</p>--}}
            </div>
            <div class="uk-clearfix"></div>
            <div class="copyright">(C) 2018 FITRON
                <br><a href="{{route('policy')}}">Политика конфиденциальности</a>
            </div>
        </div>
    </footer>
</div>

<div class="uk-sticky-placeholder">
    <div id="stickymenu" data-uk-sticky-bottom="{media: '(max-width: 1023px)}" style="bottom: 0px; width: 1263px; position: fixed;" class="uk-sticky-init uk-active">
        <ul>
            <li class="has-sub">
                <a href="{{ route('special_index') }}">
                    <i class="fas fa-ruble-sign" style="font-size: 150%;"></i>
                    <span class="mobile-text"><br>Акции</span>
                </a>
                <ul>
                    <li class="last">
                        <a href="{{ route('special_index') }}">Акции</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{route('vacancies')}}">
                    {{--<i class="fas fa-briefcase" style="font-size: 150%;"></i>--}}
                    <span style="margin-left: -6px;">JOB</span>
                    <span class="mobile-text"><br>Вакансии</span>
                </a>
                <ul>
                    <li class="last">
                        <a href="{{route('vacancies')}}">Вакансии</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:void(0)" data-href="https://fitron.club/ajax-form/?id=4&amp;title=%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81+%D1%82%D1%80%D0%B5%D0%BD%D0%B5%D1%80%D1%83" data-contact-ajax="">
                    <i class="fas fa-question" style="font-size: 150%;"></i>
                    <span class="mobile-text"><br>Спросить</span>
                </a>
                <ul>
                    <li class="last">
                        <label style="cursor: pointer;" class="callme" for="modal_query_trainer">Вопрос тренеру</label>
                        {{--<a href="javascript:;" data-href="https://fitron.club/ajax-form/?id=4&amp;title=%D0%92%D0%BE%D0%BF%D1%80%D0%BE%D1%81+%D1%82%D1%80%D0%B5%D0%BD%D0%B5%D1%80%D1%83" data-contact-ajax="">Вопрос тренеру</a>--}}
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <label style="cursor: pointer;" class="callme_a" for="modal_feedback"><i class="fas fa-phone-volume" style="font-size: 150%;"></i></label>

                {{--<a href="javascript:;" data-href="https://fitron.club/ajax-form/?id=24&amp;title=%D0%9E%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D1%8B%D0%B9+%D0%B7%D0%B2%D0%BE%D0%BD%D0%BE%D0%BA" data-contact-ajax="">--}}
                    {{--<i class="fas fa-phone-volume" style="font-size: 150%;"></i>--}}
                    {{--<span style="margin-left: -12px; margin-top: -11px; display: block">ОБР.<br>звонок</span>--}}
                    {{--<span class="mobile-text"><br>Звонок</span>--}}
                {{--</a>--}}
                <ul>
                    <li class="last">
                        <label style="cursor: pointer;" class="callme" for="modal_feedback">Обратный звонок</label>
                        {{--<a href="javascript:;" data-href="https://fitron.club/ajax-form/?id=24&amp;title=%D0%9E%D0%B1%D1%80%D0%B0%D1%82%D0%BD%D1%8B%D0%B9+%D0%B7%D0%B2%D0%BE%D0%BD%D0%BE%D0%BA" data-contact-ajax="">Обратный звонок</a>--}}
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="https://fitron.club/cards/">
                    <i class="fas fa-user" style="font-size: 150%;"></i>
                    {{--<span style="margin-left: -4px; display: block">БЛОГ</span>--}}
                    <span class="mobile-text"><br>Карта</span>
                </a>
                <ul>
                    <li class="last">
                        <a href="/">БЛОГ</a>
                    </li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="{{route('cards')}}">
                    <i class="far fa-credit-card" style="font-size: 150%;"></i>
                    {{--<span style="margin-left: -12px; margin-top: -11px; display: block">купить<br>кл. карту</span>--}}
                    <span class="mobile-text"><br>Карта</span>
                </a>
                <ul>
                    <li class="last">
                        <a href="{{route('cards')}}">Купить клубную карту</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
@include('include.modal.feedback') {{--modal_feedback--}}
{{--@include('include.modal.query_trainer') --}}{{--modal_query_trainer--}}

@stack('modal')

<!-- Scripts -->
{{--<script src="{{ asset('js/all.js') }}" defer></script>--}}

<script type="text/javascript" src="/js/slider/modernizr.custom.46884.js"></script>
<script type="text/javascript" src="/js/slider/jquery.slicebox.js"></script>
<script type="text/javascript">
    $(function() {
        var Page = (function() {
            var $navArrows = $( '#nav-arrows' ).hide(),
                $shadow = $( '#shadow' ).hide(),
                slicebox = $( '#sb-slider' ).slicebox( {
                    onReady : function() {
                        $navArrows.show();
                        $shadow.show();
                    },
                    interval: 7000,
                    autoplay : true,
                    cuboidsRandom : true,
                    cuboidsCount : 10,
                    perspective : 1200,
                    orientation : 'r',
                    cuboidsRandom : true,
                    disperseFactor : 30
                } ),
                init = function() {
                    initEvents();
                },
                initEvents = function() {
                    // add navigation events
                    $navArrows.children( ':first' ).on( 'click', function() {
                        slicebox.next();
                        return false;
                    } );
                    $navArrows.children( ':last' ).on( 'click', function() {
                        slicebox.previous();
                        return false;
                    } );
                };
            return { init : init };
        })();
        Page.init();
    });
</script>

@if(17 != $params['main_page_id'])
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD26YUuv-fjY4NmUXuFK88na-ZGQVe5Ddk&amp;callback=initialize"></script>
<script type="text/javascript">
    function initialize(){
        var mapstyles = [
            {"featureType":"all","elementType":"labels","stylers":[{"visibility":"off"}]},
            {"featureType":"administrative","elementType":"all","stylers":[{"lightness":"-100"},{"saturation":"100"},{"gamma":"10.00"},{"visibility":"simplified"},{"weight":"0.56"},{"color":"#a4a4a4"}]},
            {"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"lightness":"11"},{"saturation":"-3"}]},
            {"featureType":"landscape","elementType":"all","stylers":[{"lightness":"22"},{"weight":"0.01"},{"gamma":"1.39"},{"saturation":"-100"},{"visibility":"on"}]},
            {"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"on"}]},
            {"featureType":"landscape.natural","elementType":"all","stylers":[{"visibility":"off"},{"lightness":"-53"},{"saturation":"49"}]},
            {"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},
            {"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"}]},
            {"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"on"},{"hue":"#ff0000"},{"lightness":"8"},{"saturation":"30"},{"gamma":"0.00"},{"weight":"1.23"}]},
            {"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},
            {"featureType":"poi.government","elementType":"labels.text","stylers":[{"visibility":"on"}]},
            {"featureType":"poi.medical","elementType":"all","stylers":[{"visibility":"off"}]},
            {"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#aadd55"}]},
            {"featureType":"poi.place_of_worship","elementType":"all","stylers":[{"visibility":"on"}]},
            {"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"on"}]},
            {"featureType":"poi.sports_complex","elementType":"all","stylers":[{"visibility":"off"}]},
            {"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ff0000"}]},
            {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#e7e7e7"}]},
            {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#c3c3c3"}]},
            {"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"on"}]},
            {"featureType":"road.highway","elementType":"labels.text","stylers":[{"color":"#8b8b8b"},{"visibility":"simplified"}]},
            {"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"},{"color":"#ffffff"}]},
            {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#dcdcdc"}]},
            {"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"on"}]},
            {"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"on"}]},
            {"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ffffff"}]},
            {"featureType":"water","elementType":"geometry","stylers":[{"saturation":"27"}]},
            {"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#034694"}]}];
        var point = {};
@foreach($params['clubs'] as $club)
    point['{{$club->code}}'] = new google.maps.LatLng("{{$club->map_x}}","{{$club->map_y}}");
@endforeach
    point['{{$params['select_club']->code}}'] = new google.maps.LatLng("{{$params['select_club']->map_x}}","{{$params['select_club']->map_y}}");
    var map = new google.maps.Map(
        document.getElementById("googlemap"),{
            center: point['{{$params['select_club']->code}}'],
            zoom: 17,
            controls: false,
            //scrollwheel: false,
            //draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: mapstyles
        });
@foreach($params['clubs'] as $club)
    var image{{$club->code}} = {
        url: '{{$club->market_image}}',
        scaledSize: new google.maps.Size(91, 65),
        anchor: new google.maps.Point(45, 11)
    };
    var marker{{$club->code}} = new google.maps.Marker({
        position: point['{{$club->code}}'],
        map:map,
        icon:image{{$club->code}},
        title:"{{$club->address}}"
    });
@endforeach
    var image{{$params['select_club']->code}} = {
            url: '{{$params['select_club']->market_image}}',
            scaledSize: new google.maps.Size(91, 65),
            anchor: new google.maps.Point(45, 11)
        };
    var marker{{$club->code}} = new google.maps.Marker({
        position: point['{{$params['select_club']->code}}'],
        map:map,
        icon:image{{$params['select_club']->code}},
        title:"{{$params['select_club']->address}}"
    });
        (function(){
            var time;
            var centerpoint = point['{{$params['select_club']->code}}'];
            $(window).resize(function() {
                if (time)
                    clearTimeout(time);
                time = setTimeout(function(){
                    google.maps.event.trigger(map, 'resize');
                    map.setCenter(centerpoint);
                },600);
            });
            $('body').on('clubchange', function(){
                var phone = [];
            @foreach($params['clubs'] as $club)
                phone['{{$club->code}}'] = '{{$club->phone}}';
            @endforeach
                phone['{{$params['select_club']->code}}'] = '{{$params['select_club']->phone}}';
                var select_club = document.querySelector('#top-panel .select-club .label');
                document.querySelector('#topnav .topphone a').innerText = phone[select_club.dataset.code];
                document.cookie = 'select_club_id=' + select_club.dataset.id + ';path=/';
//                console.log(location.pathname);
                if(location.pathname == '/schedule') location.reload();
                var centerpoint = point[select_club.dataset.code];
                map.setCenter(centerpoint);
            });
        })();
    }
</script>
@endif

<script src="{{ asset('js/main.js') }}" defer></script>

{{--<script src="{{ asset('js/sticky-bottom.js') }}" defer></script>--}}
{{--<script src="{{ asset('js/mobile-menu.js') }}" defer></script>--}}

<script src="{{ asset('js/site.js') }}" defer></script>
@yield('script')
</body>
</html>
