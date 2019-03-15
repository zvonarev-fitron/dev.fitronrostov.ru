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
                    {{--<li><a href="{{route('vacancies')}}">Вакансии</a></li>--}}
                    <li class="uk-active"><a href="{{route('press')}}">Пресса</a></li>
                    <li><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent vacancies-privilege">
                    <div class="vacancies-privilege uk-margin-top">
                        <ol class="uk-grid uk-grid-width-1-1">
                            <li><a href="http://cityreporter.ru/mihail-pluzhnikov-zapuskaet-sobstvennuyu-set-fitnes-klubov-fitron/" class="external-link" target="_blank" rel="nofollow"><b>cityreporter.ru/mihail-pluzhnikov-zapuskaet-sobstvennuyu-set-fitnes-klubov-fitron/</b></a><br>Михаил Плужников запускает собственную сеть фитнес-клубов Fitron — Городской репортер — новости Ростова-на-Дону</li>
                            <li><a href="http://rostov.dk.ru/news/fitnes-kluby-fitron-planiruetsya-otkryt-vo-vseh-rayonah-rostova-237042059" class="external-link" target="_blank" rel="nofollow"><b>rostov.dk.ru/news/fitnes-kluby-fitron-planiruetsya-otkryt-vo-vseh-rayonah-rostova-237042059</b></a><br>Фитнес-клубы Fitron планируется открыть во всех районах Ростова — Деловой квартал<br>24.08.2016</li>
                            <li><a href="http://дон.идпро.рф/obshhestvo/innovacionnij-fitnes-s-fitron.html" class="external-link" target="_blank" rel="nofollow"><b>дон.идпро.рф/obshhestvo/innovacionnij-fitnes-s-fitron.html</b></a><br>Инновационный фитнес с Fitron</li>
                            <li><a href="http://rnd.urpur.ru/statya/135703/" class="external-link" target="_blank" rel="nofollow"><b>rnd.urpur.ru/statya/135703/</b></a><br>Сеть инновационных фитнес-клубов FITRON открывается в Ростове<br>14.09.2016</li>
                            <li><a href="http://worldclass-rostov.ru/fitron.html" class="external-link" target="_blank" rel="nofollow"><b>worldclass-rostov.ru/fitron.html</b></a><br>Fitron</li>
                            <li><a href="http://nationmagazine.ru/places/krutoy-kak-world-class-dostupnyy-kak-fizkult/" class="external-link" target="_blank" rel="nofollow"><b>nationmagazine.ru/places/krutoy-kak-world-class-dostupnyy-kak-fizkult/</b></a><br>Крутой, как World Class, доступный, как «ФизКульт»<br>Михаил Плужников открывает в Ростове новую сеть фитнес-клубов Fitron.<br>автор Анастасия Шевцова<br>26.08.2016</li>
                            <li><a href="https://fitnessexpert.com/journal/v-rostove-na-donu-sostoyalas-press-konferenciya-rostovskoy-fitnes-gruppy-mihaila-pluzhnikova" class="external-link" target="_blank" rel="nofollow"><b>fitnessexpert.com/journal/v-rostove-na-donu-sostoyalas-press-konferenciya-rostovskoy-fitnes-gruppy-mihaila-pluzhnikova</b></a><br>В Ростове-на-Дону состоялась пресс-конференция "Ростовской фитнес-группы Михаила Плужникова", где был презентован новый бренд Fitron<br>27.08.2016</li>
                            <li><a href="http://koksovova.podfm.ru/delsreda/98/" class="external-link" target="_blank" rel="nofollow"><b>koksovova.podfm.ru/delsreda/98/</b></a><br>Деловая среда: интервью с Михаилом Плужниковым, управляющим партнером World Class, ФизКульт и Фитрон в Ростове<br>добавлен 17.08.16</li>
                        </ol>
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
