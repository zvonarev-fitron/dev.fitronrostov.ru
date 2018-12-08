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
        <div class="fitron-news-back uk-grid uk-grid-width-1-1 uk-margin-top">
            <div class="uk-width-medium-3-10">
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent">
                    <a href="{{route('uncos')}}"><img src="/images/arrow-grey-left.svg" alt="" class="backpict">все новости</a>
                </div>
            </div>
        </div>
        <div id="fitron-blog" class="uk-grid uk-grid-width-1-1 uk-margin-top">
            <div class="uk-width-medium-3-10 news-post-left">
                <p><b class="date">{{(new DateTime($params['uncos']->date))->format('d.m.Y')}}</b></p>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="blog-post pagecontent uk-margin-large-bottom">{!! $params['uncos']->description !!}</div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
@endsection

