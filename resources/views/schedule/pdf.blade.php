<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>Фитнес клуб FITRON - низкие цены на абонементы на занятия в тренажерном зале в Ростове-на-Дону</title>
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">--}}
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">--}}
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/base/fa-brands.woff.css.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/base/fa-regular-400.woff.css.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('css/base/fa-solid-900.woff.css.css') }}" rel="stylesheet">--}}
<style>
    /*html {*/
        /*font-family: DejaVuSans;*/
        /*font-style:normal;*/
        /*font-weight:400;*/
    /*}*/

    body {
        font-family: DejaVu Sans, sans-serif;
    }

    .headtable {
        width: 720px;
    }
    .head_div {
        width: 100%;
        background-color: blue;
        color: white;
    }
    .head_div .left{
        width: 30%;
        display: inline-block;
        padding-top: 15px;
    }
    .head_div .right{
        width: 69%;
        display: inline-block;
        padding-bottom: 15px;
        padding-top: 15px;
        vertical-align: top;
        text-align: right;
    }
    .dayhead {
        width: 10%;
    }
    .dayhead div {
        font-size: 10px;
        text-align: center;
    }
    .head_table {
        width: 100%;
        border-collapse: collapse;
    }
    .head_table th{
        background-color: #fafafa;
        border:1px solid grey;
    }
    .head_table th div{
        color: blue;
    }
    #schedules_table {
        width: 100%;
        border-collapse: collapse;
    }
    #schedules_table td {
        width: 10%;
        border:1px solid grey;
        vertical-align: top;
    }
    .event {
        font-size: 10px;
    }
    .event .time {
        color: blue;
    }
    .event .name {
        color: red;
    }
    .event .place {
        color: black;
    }
    .icon-paid {
        display: inline-block;
    }
    @page{
        size: A4 portrait;
        margin-top: 140px;
    }
    .teacherPage {
        page: teacher;
        page-break-after: always;
    }
    header {
        position: fixed;
        top: -94px;
        left: 0px;
        right: 0px;
        height: 90px;
    }
    footer {
        position: fixed;
        bottom: 0px;
        left: 0px;
        right: 0px;
        height: 50px;
        background-color: #03a9f4;
        color: white;
        text-align: center;
        line-height: 35px;
    }
    .crearfix{
        height: 100px;
    }
    .clearfix::after {
        display: block;
        content: "";
        clear: both;
    }



</style>
</head>
<body>
<header>
    <div class="head_div">
        <div class="left">
            <img src="{{url('/images/fitron-logo-mobile.svg')}}" width="80px" height="45px"/>
        </div>
        <div class="right">
            Расписание {{$params['select_club']->name}}
        </div>
    </div>
    <table class="head_table">
        <thead>
        <tr>
            @foreach($params['week_date'] as $date)
                <th class="{{$params['todate']->getTimestamp() == $date->getTimestamp() ? 'dayhead curday' : 'dayhead'}}">
                    <div>{{$date->format('d')}} {{\App\Helpers\CUtils::RusMonth($date->format('m'))}}<br>
                        <span class="weekday">{{\App\Helpers\CUtils::RusWeek($date->format('w'))}}</span>
                    </div>
                </th>
            @endforeach
        </tr>
        </thead>
    </table>
</header>
<footer>Copyright &copy; FITRON</footer>
<main>
    @isset($params['tr'])
        <table id="schedules_table">
            @foreach($params['tr'] as $key=>$tr)
                <tr>
                    @foreach($tr as $td)
                        @if(!empty($td))
                            <td>
                                @foreach($td as $sch)
                                    <div class="event">
                                        <div class="time">
                                            <span class="time-from">{{date('H:i', $sch->StartDate()->getTimestamp())}}</span>
                                            - {{date('H:i', $sch->EndDate()->getTimestamp())}}
                                            @if($sch->paid)
                                                {{--<i class="fa"><span>&#xf158;</span></i>--}}
                                                {{--<i class="fas fa-ruble-sign"></i>--}}
                                                {{--<i class="icon-paid" title="Платная"></i>--}}
                                                <img src="{{url('/images/money.svg')}}" width="13px" hgeight="10px" class="icon-paid"/>
                                            @endif
                                        </div>
                                        <div class="name">
                                            <span>{{$params['trainings']->firstWhere('id', $sch->trainings_id)->name}}</span>
                                        </div>
                                        <div class="place">{{$params['rooms']->firstWhere('id', $sch->rooms_id)->name}}</div>
                                    </div>
                                @endforeach
                            </td>
                        @else
                            <td><div class="event"></div></td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    @endisset
</main>
</body>
</html>
