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
                    <li class="uk-active"><a href="{{route('mission')}}">Миссия</a></li>
                    <li><a href="{{route('boss')}}">Руководство</a></li>
                    <li><a href="{{route('vacancies')}}">Вакансии</a></li>
                    <li><a href="{{route('press')}}">Пресса</a></li>
                    <li><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top">
                    <p><img src="/images/mission.jpg" alt="Миссия" class="uk-width-1-1"></p>
                    <p class="pageh2">МИССИЯ КОМПАНИИ:<br><b>ПРЕВОСХОДИТЬ В ДВИЖЕНИИ!</b></p>
                    <p>Движение - основа жизни, здоровья и бизнеса,
                        <br>Движение - главное в фитнесе и веллнесе,
                        <br>Движение - основа успеха.
                    </p>
                    <p>Превосходя в движении, мы превосходим во всем:
                        <br>в успехе, в уровне, в отношении.
                    </p>
                    <p>Превосходить - значит быть самым активным.
                        <br>Превосходить - значит двигаться вверх.
                        <br>Превосходить - значит делать больше и быстрее.
                        <br>Превосходить - значит двигаться первым.
                        <br>Превосходить - значит все время повышать уровень.
                        <br>Превосходить - значит развиваться внутри и вовне.
                    </p>
                    <p>Рост – это Движение!
                        <br>(Пре)-ВОСХОДЯ в движении, мы все время восходим на растущую вершину лидерства.
                    </p>
                    <p>Поэтому:
                        <br><b>Мы - компания-лидер для активных клиентов-лидеров.</b>
                        <br>Наши сотрудники превосходят других. Благодаря энергии движения.
                        <br>Наши клиенты превосходят многих. Благодаря энергии  движения.
                        <br>Мы едины с нашими клиентами - в движении!</p>
                    <p>Мы первые открыли премиальный фитнес-клуб в Ростове..
                        <br>Мы первые открыли ФизКульт в России.
                        <br>Мы первые открыли спа-центр мирового уровня.
                        <br>Мы первыми стали предоставлять сервис мирового класса.
                        <br>Мы первые создали премиальную сеть фитнес-клубов World Class в Ростове.
                        <br>Мы первыми открываем космическую инновационную сеть FITRON.
                        <br>Мы первыми... сделаем еще очень многое.</p>

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
