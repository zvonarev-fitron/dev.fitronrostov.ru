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
            <h1>Прайс-лист {{ $params['club']->name }}</h1>
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/"><span>Главная</span></a>
                </li>
                <li>
                    <a href="{{ route('franchise') }}"><span>Франчайзинг</span></a>
                </li>
                <li class="uk-active">
                    <span>Прайс-лист {{ $params['club']->name }}</span>
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
                <div class="pagecontent">
                    <div class="rates uk-margin-top">
                        <p class="pageh2">Прайс-лист {{ $params['club']->name }}</p>
                        <div class="uk-grid uk-grid-medium">
                            @foreach($params['price'] as $key=>$price)
                                <div class="uk-width-medium-6-10 {{ $key%2 ? '' : 'odd' }}">
                                    <div>{!! $price->name !!}
                                    @if(1 == $price->level_ps)
                                        {{ __(' *') }}
                                    @elseif(2 == $price->level_ps)
                                        {{ __(' **') }}
                                    @elseif(3 == $price->level_ps)
                                        {{ __(' ***') }}
                                    @elseif(4 == $price->level_ps)
                                        {{ __(' ****') }}
                                    @elseif(5 == $price->level_ps)
                                        {{ __(' *****') }}
                                    @elseif(6 == $price->level_ps)
                                        {{ __(' ******') }}
                                    @elseif(7 == $price->level_ps)
                                        {{ __(' *******') }}
                                    @endif
                                    </div>
                                </div>
                                <div class="uk-width-medium-4-10 {{ $key%2 ? '' : 'odd' }}">
                                    <div><b><span>{{ number_format($price->price, 0, '', ' ') }}</span> руб.</b></div>
                                </div>
                            @endforeach
                        </div>
                        <p class="notes">
                            @foreach($params['price'] as $price)
                                @if(1 == $price->level_ps)
                                    {{ __('* ') }}{{ $price->ps }}<br>
                                @elseif(2 == $price->level_ps)
                                    {{ __('** ') }}{{ $price->ps }}<br>
                                @elseif(3 == $price->level_ps)
                                    {{ __('*** ') }}{{ $price->ps }}<br>
                                @elseif(4 == $price->level_ps)
                                    {{ __('**** ') }}{{ $price->ps }}<br>
                                @elseif(5 == $price->level_ps)
                                    {{ __('***** ') }}{{ $price->ps }}<br>
                                @elseif(6 == $price->level_ps)
                                    {{ __('****** ') }}{{ $price->ps }}<br>
                                @elseif(7 == $price->level_ps)
                                    {{ __('******* ') }}{{ $price->ps }}<br>
                                @endif
                            @endforeach
                        </p>
                        <p><a href="{{route('payment')}}" style="color: #ff0033">Способы оплаты</a></p>
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
