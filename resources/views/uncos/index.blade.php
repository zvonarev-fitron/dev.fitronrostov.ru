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
        <div class="uk-grid uk-grid-width-1-1">
            <div class="uk-width-medium-3-10"></div>
            <div class="uk-width-medium-7-10">
                <div id="fitron-news" class="pagecontent uk-margin-large-top uk-margin-large-bottom">
                @foreach($params['uncos'] as $uncos)
                    <div class="newscont">
                        <p class="date">{{(new \DateTime($uncos->date))->format('d.m.Y')}}</p>
                        <p class="text">
                            <a href="{{route('uncos.code', ['code' => $uncos->code])}}/"><b>{{$uncos->title}}</b></a>
                            {!! $uncos->preview !!}
                        </p>
                    </div>
                @endforeach
                {{$params['uncos']->links('vendor.pagination.uncos')}}
                </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
@endsection

