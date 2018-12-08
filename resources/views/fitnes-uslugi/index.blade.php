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
            <h1>{{$params['page']->title}}</h1>
            <ul class="uk-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['page']->title}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">
        <div class="schedule_download_btn_fitnes">
            <a href="javascript:void(0)" class="schedule_download_btn_a">
                <span class="schedule_download_btn_a_span">Получить бесплатный гостевой визит</span>
            </a>
        </div>
        <div class="fitnes-programs uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-large-top">
            <div class="uk-width-medium-3-10">
                <p class="programs-head"><b>Фитнес-программы</b></p>
                <div class="uk-visible-small pagenav-mobile"><span class="uk-navbar-toggle"></span> Разделы</div>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left">
                    <li class="uk-active"><a href="{{route('fitnes-index')}}">Показать все</a></li>
                    @foreach($params['categories'] as $category)
                        <li><a href="{{route('uslugi', ['code' => $category->url])}}">{{$category->short}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top uk-margin-large-bottom">
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-small uk-margin-top-remove programs-cats">
                        @foreach($params['categories'] as $category)
                            <div class="uk-margin-top">
                                <a href="{{route('uslugi', ['code' => $category->url])}}" class="program-cat-photo">
                                    <img src="{{$category->image}}" alt="{{$category->name}}">
                                    <div class="overlay"></div>
                                    <p>{{$category->short}}</p>
                                </a>
                            </div>
                        @endforeach
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
