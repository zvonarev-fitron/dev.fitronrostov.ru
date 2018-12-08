@extends('layouts.layout')

@section('logo')
    <div id="topleftcont" class="uk-hidden-small">
        <div class="toplefttop"></div>
        <div id="topleftblock">
            <div class="bottomwhite"></div>
        </div>
        <div class="blueline"></div>
    </div>
@endsection

@section('pagehead')
    <div id="pagehead" style="background: url(/images/bg2.jpg) no-repeat center;background-size: cover;">
        <div class="container">
            <h1>{{$params['page']->menu}}</h1>
            <ul class="uk-breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['page']->menu}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">
        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-top">
            <div class="uk-width-medium-3-10">
                <div class="uk-visible-small pagenav-mobile"><span class="uk-navbar-toggle"></span> Разделы</div>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left">
                    <li><a href="{{route('mission')}}">Миссия</a></li>
                    <li class="uk-active"><a href="{{route('boss')}}">Руководство</a></li>
                    <li><a href="{{route('vacancies')}}">Вакансии</a></li>
                    <li><a href="{{route('press')}}">Пресса</a></li>
                    <li><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-large-bottom">
                    <div class="boss uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2">
                        <div class="boss-photo uk-margin-top">
                            <img src="/images/PMA.jpg" alt="Михаил Плужников">
                        </div>
                        <div class="uk-margin-top">
                            <p class="boss-name"><b>Михаил Плужников</b></p>
                            <hr>
                            <p class="boss-text">Управляющий партнер<br>Ростовской фитнес-группы FITRON</p>
                            <p class="boss-link"><span data-href="https://fitron.club/ajax-form/?id=7&amp;title=%D0%9D%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C+%D0%9C%D0%B8%D1%85%D0%B0%D0%B8%D0%BB%D1%83+%D0%9F%D0%BB%D1%83%D0%B6%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%D1%83" data-contact-ajax="" class="redbutton"><span>обратная связь</span></span></p>
                        </div>

                        <div class="boss-photo uk-margin-top">
                            <img src="/images/Lera_Zamanskaya.jpg" alt="Валерия Заманская">
                        </div>
                        <div class="uk-margin-top">
                            <p class="boss-name"><b>Валерия Заманская</b></p>
                            <hr>
                            <p class="boss-text">Исполнительный директор по продажам и сервису<br>Ростовской фитнес-группы FITRON</p>
                            <p class="boss-link"><span data-href="https://fitron.club/ajax-form/?id=9&amp;title=%D0%9D%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C+%D0%92%D0%B0%D0%BB%D0%B5%D1%80%D0%B8%D0%B8+%D0%97%D0%B0%D0%BC%D0%B0%D0%BD%D1%81%D0%BA%D0%BE%D0%B9" data-contact-ajax="" class="redbutton"><span>обратная связь</span></span></p>
                        </div>

                        <div class="boss-photo uk-margin-top">
                            <img src="/images/Mariya_Staseva.jpg" alt="Марина Стасева">
                        </div>
                        <div class="uk-margin-top">
                            <p class="boss-name"><b>Марина Стасева</b></p>
                            <hr>
                            <p class="boss-text">Исполнительный директор по фитнесу<br>Ростовской фитнес-группы FITRON</p>
                            <p class="boss-link"><span data-href="https://fitron.club/ajax-form/?id=10&amp;title=%D0%9D%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C+%D0%9C%D0%B0%D1%80%D0%B8%D0%BD%D0%B5+%D0%A1%D1%82%D0%B0%D1%81%D0%B5%D0%B2%D0%BE%D0%B9" data-contact-ajax="" class="redbutton"><span>обратная связь</span></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="redhr"></div>
@endsection

@section('script')
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
        }
    </script>
@endsection
