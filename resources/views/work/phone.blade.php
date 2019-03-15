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
            <h1>{{ __('aaaaaaaaaaaaaa') }}</h1>
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/"><span itemprop="name">Главная</span></a>
                </li>
                <li class="uk-active">
                    <span itemprop="name">{{ __('aaaaaaaaaaaaaa') }}</span>
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
                    {{--<li class="uk-active"><a href="{{route('boss')}}">Руководство</a></li>--}}
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

                        {{--<div id="phone_send">--}}
                            {{--<phone-send></phone-send>--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="redhr"></div>
@endsection

@section('script')
    <script src="{{ asset('/js/work/phonesend.js') }}" defer></script>
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
        }
    </script>
@endsection
