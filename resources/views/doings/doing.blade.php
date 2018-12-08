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
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a href="{{route('doing_index')}}" itemprop="url"><span itemprop="name">{{$params['page']->menu}}</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['doing']->name}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">
        <div class="event-page fitnes-programs uk-grid uk-grid-width-1-1 uk-margin-top">
            <div class="uk-width-medium-3-10">
                <p class="programs-head event-date uk-margin-top">
                    <span style="font-size: 30px;">{{$params['doing']->subtitle}}</span>
                    {{--<span style="font-size: 16px">июля</span>--}}
                </p>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top uk-margin-large-bottom">
                    <p><img src="{{$params['doing']->image}}" alt="{{$params['doing']->name}}" class="uk-width-1-1"></p>
                    {!!$params['doing']->preview!!}
                </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
@endsection
