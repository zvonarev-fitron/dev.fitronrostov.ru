@extends('layouts.layout')
{{--@section('logo')--}}
    {{--<div id="topleftcont" class="uk-hidden-small">--}}
        {{--<div class="toplefttop"></div>--}}
        {{--<div id="topleftblock">--}}
            {{--<div class="bottomwhite"></div>--}}
        {{--</div>--}}
        {{--<div class="blueline"></div>--}}
    {{--</div>--}}
{{--@endsection--}}
@section('head')
    <div class="bottomright uk-hidden-small">
        <div class="bottomright-inner">
            <div class="select-club-cont" id="schedule_select_club">
                <div class="title-label">Выберите клуб</div>
                <div class="select-club">
                    <div class="select">
                        <span class="label" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
                    </div>
                    <div class="another-clubs">
                        @foreach($params['clubs'] as $club)
                            <div class="another-club" data-id="{{$club->id}}" data-code="{{$club->code}}">{{$club->name}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('slider')
    <div id="main-slider">
        <main-carrousel v-bind:items="{{ $params['main_slider'] }}"></main-carrousel>
    {{--<div class="wrapper">--}}
        {{--<ul id="sb-slider" class="sb-slider">--}}
            {{--@foreach($params['images'] as $image)--}}
                {{--<li>--}}
                    {{--<a href="{{ route('uncos') }}">--}}
                        {{--<img src="{{$image->image}}" alt="{{$image->title}}"/></a>--}}
                    {{--<div class="sb-description">--}}
                        {{--<div class="slider-text">--}}
                            {{--<a href="{{$image->url}}" rel="nofollow">--}}
                                {{--<b>{{$image->title}}</b>--}}
                            {{--</a>--}}
                            {{--<br>{{$image->text}}<br><br>--}}
                            {{--<a href="{{$image->url}}" class="more">узнать больше</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        {{--<div id="shadow" class="shadow"></div>--}}
        {{--<div id="nav-arrows" class="nav-arrows">--}}
            {{--<a href="#">Next</a>--}}
            {{--<a href="#">Previous</a>--}}
        {{--</div>--}}
    {{--</div><!-- /wrapper -->--}}
</div>
@endsection
@section('schedule')
    <div id="main-events-schedule">
    {{--<div id="main-events">--}}
        {{--<div class="main-events-cont">--}}
            {{--<div class="events-top">--}}
                {{--<div class="uk-slidenav-position" data-uk-slider="{infinite: false}">--}}
                    {{--<iframe src="/wowslider/1/1/" scrolling="no" style="width:1000px;height:654px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
        <div id="main-events">
            {{--<iframe src="/wowslider/1/1/" scrolling="no" style="width:1000px;height:654px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>--}}
            <main-db-carrousel v-bind:width="500" v-bind:items="{{ $params['main-events'] }}"></main-db-carrousel>
        </div>
    <div id="main-schedule" style="position: relative;">
        <p class="caption"><b>Расписание</b></p>
        <div id="index_schedule">
            <div class="select-club">
                <div class="select">
                    <span class="label" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
                </div>
                <div class="another-clubs">
                    @foreach($params['clubs'] as $club)
                        <div class="another-club" data-id="{{$club->id}}" data-code="{{$club->code}}">{{$club->name}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="schedule-cont active" id="shedule-cont-{{$params['select_club']->code}}">
            <ul style="margin-top: 0px;">
                @foreach($params['schedules'] as $sch)
                    @if($sch->clubs_id == $params['select_club']->id)
                        <li class="{{0 < $params['todate']->getTimestamp() - (new \DateTime($sch->start_time))->getTimestamp() ? 'schedule-past' : '' }}"><span class="time">{{(new \DateTime($sch->start_time))->format('H:i')}}</span> <div class="text">
                            <a class="name" target="_blank" href="{{url('fitnes-uslugi/'. $params['categories']->firstWhere('id', $params['trainings']->firstWhere('id', $sch->trainings_id)->category_id)->url . '/'
                             . $params['trainings']->firstWhere('id', $sch->trainings_id)->url)}}">{{$params['trainings']->firstWhere('id', $sch->trainings_id)->name}}</a><br>{{$params['rooms']->firstWhere('id', $sch->rooms_id)->name}}</div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
        @foreach($params['clubs'] as $club)
            <div class="schedule-cont uk-hidden" id="shedule-cont-{{$club->code}}">
                <ul style="margin-top: 0px;">
            @foreach($params['schedules'] as $sch)
                @if($sch->clubs_id == $club->id)
                <li><span class="time">{{(new \DateTime($sch->start_time))->format('H:i')}}</span> <div class="text">
                    <a class="name" target="_blank" href="{{url($params['trainings']->firstWhere('id', $sch->trainings_id)->url)}}">{{$params['trainings']->firstWhere('id', $sch->trainings_id)->name}}</a><br>{{$params['rooms']->firstWhere('id', $sch->rooms_id)->name}}</div>
                </li>
                @endif
            @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    <div class="uk-clearfix"></div>
    <div class="schedule-buttons">
        <a href="#" class="button-up" style="z-index: 1000;"><b></b></a>
        <a href="#" class="button-down" style="z-index: 1000;"><b></b></a>
        <a href="{{route('schedule')}}" class="button-all">расписание на неделю</a>
    </div>
</div>
@endsection
@section('main')
    <div id="main-advantages">
        <div class="container">
            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2">
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-1.svg" alt="Пространство" width="140">
                                <img src="/images/advantages-icon-1-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Пространство" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Пространство</p><p>
                                </p><p>Самые большие и оснащённые тренажёрные залы - 1200 м<sup>2</sup>, и залы групповых программ - 300 м<sup>2</sup>.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-8.svg" alt="Уровень" width="140">
                                <img src="/images/advantages-icon-8-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Уровень" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Уровень</p><p>
                                </p><p>Высочайший уровень и технологии фитнеса от команды Ростовской Фитнес Группы FITRON</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-3.svg" alt="Инновации" width="140">
                                <img src="/images/advantages-icon-3-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Инновации" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Инновации</p><p>
                                </p><div class="uk-margin">
                                    <ul style="padding-left: 15px;">
                                        <li>Открытые свободные планировки фитнес-зон;</li>
                                        <li>Самые передовые системы очистки воздуха и воды;</li>
                                        <li>Последние разработки фитнес-оборудования от мировых лидеров Precor, Techno Gym, Hoist, Foreman: впервые в России!</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-7.svg" alt="Фитнес сеть" width="140">
                                <img src="/images/advantages-icon-7-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Фитнес сеть" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Фитнес сеть</p><p>
                                </p><div class="uk-margin">
                                    4 больших фитнес клуба и 2 бассейна, доступных по единой мульти-карте:
                                    <ul style="padding-left: 15px;">
                                        <li>FITRON Миллениум на Соборном,</li>
                                        <li>FITRON Орбита на Северном,</li>
                                        <li>FITRON Газетный,</li>
                                        <li>FITRON Горизонт.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-2.svg" alt="Удобство" width="140">
                                <img src="/images/advantages-icon-2-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Удобство" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Удобство</p><p>
                                </p><p>Самые просторные раздевалки с полно-ростовыми (эргономичными) шкафчиками, с возможностью выбора свободного шкафчика.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-5.svg" alt="Мировые стандарты" width="140">
                                <img src="/images/advantages-icon-5-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Мировые стандарты" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Мировые стандарты</p><p>
                                </p><p>Высокие мировые стандарты сервиса от FITRON</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-6.svg" alt="Безопасность" width="140">
                                <img src="/images/advantages-icon-6-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Безопасность" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Безопасность</p><p>
                                </p><p>Новые технологии безопасности – система доступа в клуб по отпечаткам пальцев!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-top">
                    <div class="uk-grid uk-overlay-hover uk-animation-fade uk-flex-middle">
                        <div class="uk-width-1-4">
                            <div class="uk-overlay">
                                <img src="/images/advantages-icon-4.svg" alt="Дизайн" width="140">
                                <img src="/images/advantages-icon-4-color.svg" class=" uk-overlay-panel uk-overlay-image uk-overlay-fade" alt="Дизайн" width="140">
                            </div>
                        </div>
                        <div class="uk-width-3-4">
                            <div class="uk-panel">
                                <p class="head">Дизайн</p><p>
                                </p><p>Ультрасовременный концептуальный дизайн, передающий атмосферу космической станции.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/sliders/mainslider.js"></script>
    {{--<script type="text/javascript" src="/js/slider/modernizr.custom.46884.js"></script>--}}
    {{--<script type="text/javascript" src="/js/slider/jquery.slicebox.js"></script>--}}
<script>
    var onloadCaptcha = function(){
        window.feedback_modal_form_captcha = feedback_modal_form();
//        window.vacancies_modal_form_captcha = vacancies_modal_form();
    }
    document.addEventListener('DOMContentLoaded', function(){
        document.querySelector('.schedule-buttons .button-up').addEventListener('click', function(event){
            event.preventDefault();
            var $activeCont = document.querySelector('.schedule-cont.active');
            var $activeContUL = $activeCont.querySelector('ul');
            var contMarginTop = parseInt($activeContUL.style.marginTop);
            if(contMarginTop < 0){
                var contMarginTopNew = contMarginTop + $activeContUL.querySelector('li').offsetHeight;
                if(contMarginTopNew > 0) contMarginTopNew = 0;
                var pos = contMarginTop;
                var id = setInterval(frame, 5);
                function frame(){
                    if(pos <= contMarginTopNew){
                        $activeContUL.style.marginTop = pos + 'px';
                        pos++;
                    }
                    else{
                        clearInterval(id);
                    }
                }
            }
        });
        document.querySelector('.schedule-buttons .button-down').addEventListener('click', function(event) {
            event.preventDefault();
            var $activeCont = document.querySelector('.schedule-cont.active');
            var $activeContUL = $activeCont.querySelector('ul');
            var maxtopmargin = $activeCont.offsetHeight - $activeContUL.offsetHeight;
            var contMarginTop = parseInt($activeContUL.style.marginTop);
            if (contMarginTop > maxtopmargin){
                var contMarginTopNew = contMarginTop - $activeCont.querySelector('li').offsetHeight;
                if (contMarginTopNew < maxtopmargin) contMarginTopNew = maxtopmargin;
                var pos = contMarginTop;
                var id = setInterval(frame, 5);
                function frame(){
                    if(pos >= contMarginTopNew){
                        $activeContUL.style.marginTop = pos + 'px';
                        pos--;
                    }
                    else{
                        clearInterval(id);
                    }
                }
            }
        });
    });
</script>
@endsection

{{--@push('script-slider')--}}
    {{--<script type="text/javascript">--}}
        {{--$(function() {--}}
            {{--var Page = (function() {--}}
                {{--var $navArrows = $( '#nav-arrows' ).hide(),--}}
                    {{--$shadow = $( '#shadow' ).hide(),--}}
                    {{--slicebox = $( '#sb-slider' ).slicebox( {--}}
                        {{--onReady : function() {--}}
                            {{--$navArrows.show();--}}
                            {{--$shadow.show();--}}
                        {{--},--}}
                        {{--interval: 7000,--}}
                        {{--autoplay : true,--}}
                        {{--cuboidsRandom : true,--}}
                        {{--cuboidsCount : 10,--}}
                        {{--perspective : 1200,--}}
                        {{--orientation : 'r',--}}
                        {{--cuboidsRandom : true,--}}
                        {{--disperseFactor : 30--}}
                    {{--} ),--}}
                    {{--init = function() {--}}
                        {{--initEvents();--}}
                    {{--},--}}
                    {{--initEvents = function() {--}}
                        {{--// add navigation events--}}
                        {{--$navArrows.children( ':first' ).on( 'click', function() {--}}
                            {{--slicebox.next();--}}
                            {{--return false;--}}
                        {{--} );--}}
                        {{--$navArrows.children( ':last' ).on( 'click', function() {--}}
                            {{--slicebox.previous();--}}
                            {{--return false;--}}
                        {{--} );--}}
                    {{--};--}}
                {{--return { init : init };--}}
            {{--})();--}}
            {{--Page.init();--}}
        {{--});--}}
    {{--</script>--}}
{{--@endpush--}}
