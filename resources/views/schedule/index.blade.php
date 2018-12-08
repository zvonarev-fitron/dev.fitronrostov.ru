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
            <h1>Расписание</h1>
            <ul class="uk-breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a href="/" itemprop="url"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="uk-active">
                    <span itemprop="name">Расписание</span>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('main')
    <div class="container">
        <div id="p0" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="1000">
            <div id="schedulecont" class="pagecontent uk-margin-large-bottom">
                <div class="schedule-filters">
                    <div class="uk-grid uk-grid-width-1-1">
                        <div class="uk-width-medium-8-10">
                            <div class="uk-grid uk-grid-width-1-1 uk-grid-width-large-1-2" style="padding-top: 10px;">
                                <div class="ages">
                                @isset($params['group_sy'])
                                    <b class="filter-name">Возраст:</b>
                                    <a class="active" href="{{route('schedule')}}">все</a>
                                    @foreach($params['group_sy'] as $key=>$coll)
                                        <a class="schedule_a_age" href="{{route('schedule.age',['id' => $key, 'club_id' => $params['select_club']->id])}}">{{$params['years']->firstWhere('id', $key)->name}}</a>
                                    @endforeach
                                @endisset
                                </div>
                                <div>
                                    <div class="select-club">
                                        <div class="select">
                                            <span id="schedule_chung_span" class="label" data-id="{{$params['select_club']->id}}" data-code="{{$params['select_club']->code}}">{{$params['select_club']->name}}</span>
                                        </div>
                                        <div class="another-clubs" id="schedule_another_club">
                                            @foreach($params['clubs'] as $club)
                                            <a href="javascript:void(0);" data-id="{{$club->id}}" data-code="{{$club->code}}" class="another-club" data-pjax="0">{{$club->name}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-medium-2-10">
                            <a target="_blank" href="#" class="redbutton"><span>Получить бесплатный гостевой визит</span></a>
                            {{--<a target="_blank" href="{{route('schedule.pdf')}}" class="redbutton"><span>скачать расписание</span></a>--}}
                        </div>
                    </div>
                </div>
                <div class="schedule-table">
                    <div class="table-viewport">
                        <div class="uk-sticky-placeholder" style="height: 62px; margin: 0px;"><div class="headtablecont" data-uk-sticky="{boundary:true,top:87,media: '(max-width:767px) and (orientation: portrait), (min-width:768px)'}" style="margin: 0px;">
                                <div class="headtable-viewport">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="leftcol"></th>
                                            @foreach($params['week_date'] as $date)
                                            <th class="{{$params['todate']->getTimestamp() == $date->getTimestamp() ? 'dayhead curday' : 'dayhead'}}">
                                                <div>{{$date->format('d')}} {{\App\Helpers\CUtils::RusMonth($date->format('m'))}}<br>
                                                    <span class="weekday">{{\App\Helpers\CUtils::RusWeek($date->format('w'))}}</span>
                                                </div>
                                            </th>
                                            @endforeach
                                            <th class="rightcol"></th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <a href="" class="schedule-right"><b></b></a>
                                <a href="" class="schedule-left"><b></b></a>
                            </div>
                        </div>
                        @isset($params['tr'])
                        <table id="schedules_table">
                            @foreach($params['tr'] as $key=>$tr)
                                <tr>
                                    @if(1 <= date('H', $key) - $params['col'])
                                        <td class="leftcol">{{date('H', $key)}}:00</td>
                                    @else
                                        <td class="leftcol"></td>
                                    @endif
                                    @foreach($tr as $td)
                                        @if(!empty($td))
                                            <td>
                                            @foreach($td as $sch)
                                            <div class="event">
                                                <div class="time">
                                                    <span class="time-from">{{date('H:i', $sch->StartDate()->getTimestamp())}}</span>
                                                    - {{date('H:i', $sch->EndDate()->getTimestamp())}}
                                                    @if($sch->paid)
                                                        {{--<i class="fas fa-ruble-sign"></i>--}}
                                                        <i class="icon-paid" title="Платная"></i>
                                                    @endif
                                                </div>
                                                <div class="name"><a class="name" target="_blank" href="{{url('fitnes-uslugi/'. $params['categories']->firstWhere('id', $params['trainings']->firstWhere('id', $sch->trainings_id)->category_id)->url . '/'
. $params['trainings']->firstWhere('id', $sch->trainings_id)->url)}}">{{$params['trainings']->firstWhere('id', $sch->trainings_id)->name}}</a>
                                                </div>
                                                <div class="intensity">Инт.: <span class="middle">{{$params['intensities']->firstWhere('id', $sch->intensities_id)->name}}</span></div>
                                                <div class="place">Место. {{$params['rooms']->firstWhere('id', $sch->rooms_id)->name}}</div>
                                                @if($sch->pre_entry)
                                                <div class="pre_entry">по записи</div>
                                                @endif
                                            </div>
                                            @endforeach
                                            </td>
                                        @else
                                            <td><div class="event"></div></td>
                                        @endif
                                    @endforeach
                                    @if(1 <= date('H', $key) - $params['col'])
                                        <td class="rightcol">{{date('H', $key)}}:00</td>
                                        @php
                                            $params['col'] = date('H', $key);
                                        @endphp
                                    @else
                                        <td class="rightcol"></td>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                        @endisset
                    </div>
                    <div class="schedule_download_btn">
                        <a target="_blank" href="{{route('schedule.pdf')}}" class="schedule_download_btn_a">
                            <span class="schedule_download_btn_a_span">скачать расписание</span>
                        </a>
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
    };
    $(".table-viewport").on("scroll",function(){
        $(".headtablecont table").css("left","-"+$(this).scrollLeft()+"px");
    });
    $(".schedule-right").on("click",function(e){
        e.preventDefault();
        $(".table-viewport").animate({scrollLeft: "+="+$("th.dayhead").outerWidth()}, 800);
    });
    $(".schedule-left").on("click",function(e){
        e.preventDefault();
        $(".table-viewport").animate({scrollLeft: "-="+$("th.dayhead").outerWidth()}, 800);
    });
    (function(){
        document.querySelectorAll('.schedule_a_age').forEach(function(element){
            element.addEventListener('click', function(event){
                event.preventDefault();
                var xhr = new XMLHttpRequest();
                xhr.open('post', event.target.href, true);
                xhr.setRequestHeader('X-REQUEST-WITH', 'XMLHttpRequest');
                xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
                xhr.onload = function(){
                   if(xhr.readyState == 4 && xhr.status == 200){
                       document.querySelector('#schedules_table').innerHTML = xhr.responseText;
                   }
                };
                xhr.onerror = function(){
                    console.log('Ошибка');
                };
                xhr.send();
                document.querySelectorAll('#schedulecont .schedule-filters .ages a').forEach(function(element){
                    element.classList.remove('active');
                    element.classList.add('schedule_a_age');
                });
                event.target.classList.remove('schedule_a_age');
                event.target.classList.add('active');
            });
        });
    })();
</script>
@endsection
