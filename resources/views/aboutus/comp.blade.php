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
            <h1>Реквизиты {{ $params['club']->name }}</h1>
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/"><span>Главная</span></a>
                </li>
                <li>
                    <a href="{{ route('franchise') }}"><span>Франчайзинг</span></a>
                </li>
                <li class="uk-active">
                    <span>Реквизиты {{ $params['club']->name }}</span>
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
                    <li><a href="{{route('press')}}">Пресса</a></li>
                    <li><a href="{{route('franchise')}}">Франчайзинг</a></li>
                    <li><a href="{{route('corporate')}}">Корпоративным клиентам</a></li>
                    <li><a href="{{route('payment')}}">Способы оплаты</a></li>
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent franchise-requisites uk-margin-top uk-margin-large-bottom">
                    <p class="pageh2">Реквизиты {{ $params['club']->name }}</p>
                    <table class="comp_club_t">
                        <tbody>
                        <tr><td style="white-space: nowrap;">Наименование компании</td><td>{{ $params['comp']->name }}</td></tr>
                        <tr><td>ОГРН</td><td>{{ $params['comp']->ogrnip }}</td></tr>
                        <tr><td>ИНН</td><td>{{ $params['comp']->inn }}</td></tr>
                        <tr><td>Телефон</td><td><b>{{ $params['comp']->phone }}</b></td></tr>
                        <tr><td>Факс</td><td><b>{{ $params['comp']->fax }}</b></td></tr>
                        <tr><td>Режим работы:</td><td>{{ $params['comp']->work }}</td></tr>
                        <tr><td>Физический адрес:</td><td>{{ $params['comp']->fact_addr }}</td></tr>
                        <tr><td>Юридический адрес:</td><td>{{ $params['comp']->legal_addr }}</td></tr>
                        <tr><td>e-mail:</td><td><b>{{ $params['comp']->email }}</b></td></tr>
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

