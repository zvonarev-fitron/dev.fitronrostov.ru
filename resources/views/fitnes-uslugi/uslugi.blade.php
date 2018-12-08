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
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="{{route('fitnes-index')}}" itemprop="url"><span itemprop="name">{{$params['page']->title}}</span></a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">{{$params['category']->short}}</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">
        <div class="fitnes-programs uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-10 uk-margin-large-top uk-margin-large-bottom">
            <div class="uk-width-medium-3-10">
                <p class="programs-head"><b>Фитнес-программы</b></p>
                <div class="uk-visible-small pagenav-mobile"><span class="uk-navbar-toggle"></span> Разделы</div>
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left">
                    <li><a href="{{route('fitnes-index')}}">Показать все</a></li>
                @foreach($params['categories'] as $category)
                    <li {!!$params['code'] == $category->url ? 'class="uk-active"' : ''!!}><a href="{{route('uslugi', ['code' => $category->url])}}">{{$category->short}}</a></li>
                @endforeach
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top">
                    <div class="programs-breadcrumbs"><a href="{{route('fitnes-index')}}" class="firstlink">Все</a> / {{$params['category']->short}}</div>
                    <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-grid-small programs">
                        @foreach($params['trainings'] as $training)
                        <div>
                            <div class="program-block">
                                <a href="{{route('training', ['code' => $params['category']->url, 'url' => $training->url])}}" class="program-photo">
                                    <img src="{{$training->image ? $training->image : '/images/tren1.jpg'}}" alt="{{$training->name}}">
                                    <div class="overlay"></div>
                                    <p>{{$training->name}}</p>
                                </a>
                                <div class="program-text">
                                    <p class="program-name"><a href="{{route('training', ['code' => $params['category']->url, 'url' => $training->url])}}"><b>{{$training->name}}</b></a></p>
                                    {!!$training->preview!!}
                                </div>
                                <div class="program-bottom">
                                    <div class="program-time">{{$training->min_time}}</div>
                                    <a href="{{route('training', ['code' => $params['category']->url, 'url' => $training->url])}}" class="more"></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <p class="uk-text-uppercase uk-margin-large-top"><b>{{$params['category']->name}}</b></p>
                    {!!$params['category']->description!!}
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
};
jQuery(function($){
    $(".pagenav-mobile").on("click", function(){ $(this).parent("div").find(".uk-nav").toggleClass("uk-hidden-small");});
    $('.fitnes-programs .programs .program-bottom .more').on('click', function(e){e.preventDefault(); $(this).closest('.program-block').find('.program-text').toggleClass('active');});
});
</script>
@endsection