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
            <h1>{{$params['training']->name}}</h1>
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/"><span>Главная</span></a>
                </li>
                <li>
                    <a href="{{route('fitnes-index')}}"><span>{{$params['page']->title}}</span></a>
                </li>
                <li>
                    <a href="{{route('uslugi', ['code' => $params['code']])}}"><span>{{$params['category']->short}}</span></a>
                </li>
                <li class="uk-active">
                    <span>{{$params['training']->name}}</span>
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
                <ul class="uk-nav uk-nav-side uk-hidden-small pagenav-left"><li><a href="{{route('fitnes-index')}}">Показать все</a></li>
                    @foreach($params['categories'] as $category)
                        <li {!!$params['code'] == $category->url ? 'class="uk-active"' : ''!!}><a href="{{route('uslugi', ['code' => $category->url])}}">{{$category->short}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="pagecontent uk-margin-top">
                    <div class="programs-breadcrumbs"><a href="{{route('fitnes-index')}}" class="firstlink">Все</a> / <a href="{{route('uslugi', ['code' => $params['code']])}}">{{$params['category']->short}}</a> / {{$params['training']->name}}</div>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-3 uk-margin-top">
                            <img src="{{$params['training']->image}}" alt="{{$params['training']->name}}">
                        </div>
                        <div class="uk-width-medium-2-3 uk-margin-top">
                            <p class="uk-text-uppercase"><b>{{$params['training']->name}}</b></p>
                            <p><b>Продолжительность:</b> {{$params['training']->min_time}} мин</p>
                            {!!$params['training']->description!!}
                            <div class="uk-text-center uk-margin-large-top">
                                <span class="redbutton">
                                    <label for="modal_training">Узнать о тренировке</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="redhr"></div>
@endsection

@push('modal')
@includeIf('include.modal.training')
@endpush

@section('script')
    <script>
        var onloadCaptcha = function(){
            window.feedback_modal_form_captcha = feedback_modal_form();
            window.training_modal_form_captcha = training_modal_form();
        }
    </script>
@endsection
