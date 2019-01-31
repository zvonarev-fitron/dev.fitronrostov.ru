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
        <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-top uk-margin-large-bottom">
            <div class="uk-width-medium-3-10">
                <div class="uk-visible-small pagenav-mobile"><span class="uk-navbar-toggle"></span> Разделы</div>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left">
                    <li><a href="{{route('mission')}}">Миссия</a></li>
                    {{--<li><a href="{{route('boss')}}">Руководство</a></li>--}}
                    <li><a href="{{route('vacancies')}}">Вакансии</a></li>
                    <li><a href="{{route('press')}}">Пресса</a></li>
                    <li class="uk-active"><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent franchise uk-margin-top uk-margin-large-bottom">
                    <p class="pageh2">Наши франчайзи:</p>
                    <table>
                        <tbody>
                        <tr>
                            <td><b>FITRON Миллениум</b></td>
                            <td>г.Ростов-на-Дону, пер. Соборный 94г<br><a href="https://fitron.club/franchise/millenium-requisites/">ИП Заманская В.Г.</a><br><a href="https://fitron.club/franchise/millenium-rates/">прайс-лист клуба</a></td>
                            <td class="uk-hidden-small"><a href="https://goo.gl/maps/M5wm5G7bA5U2" target="_blank" rel="nofollow"><img src="/images/millenium-map.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <td><b>FITRON Орбита</b></td>
                            <td>г.Ростов-на-Дону, пр. Королёва 10/4<br><a href="https://fitron.club/franchise/orbita-requisites/">ИП Стасева М.С.</a><br><a href="https://fitron.club/franchise/orbita-rates/">прайс-лист клуба</a></td>
                            <td class="uk-hidden-small"><a href="https://goo.gl/maps/YKxj7vnJrH62" target="_blank" rel="nofollow"><img src="/images/orbita-map.png" alt=""></a></td>
                        </tr>
                        <tr>
                            <td><b>FITRON Газетный</b></td>
                            <td>г.Ростов-на-Дону, ул. Красноармейская 170<br><a href="https://fitron.club/franchise/gazetnyi-requisites/">ИП Руденко Н.В.</a><br><a href="https://fitron.club/franchise/gazetnyi-rates/">прайс-лист клуба</a></td>
                            <td class="uk-hidden-small"><a href="https://goo.gl/maps/rsoFhohhkEB2" target="_blank" rel="nofollow"><img src="/images/gazetnyi-map.png" alt=""></a></td>
                        </tr>
                        </tbody>
                    </table>
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
