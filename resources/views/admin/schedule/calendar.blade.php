<div class="main-calendar">
    <h2>Расписание {{$params['club']->name}}</h2>
    <div class="title">
        <div class="arrow-left" id="arrow-left_calendar">
            <svg height="15" width="15" viewBox="0 0 75 100" fill="rgba(0,0,0,0.5)">
                <polyline points="0,50 75,0 75,100"></polyline>
            </svg>
        </div>
        <div class="title-month_year">{{\App\Helpers\CUtils::RusMonth($params['date']->format('m'))}}, {{$params['date']->format('Y')}}</div>
        <div class="arrow-right" id="arrow-right_calendar">
            <svg height="15" width="15" viewBox="0 0 75 100" fill="rgba(0,0,0,0.5)">
                <polyline points="0,0 75,50 0,100"></polyline>
            </svg>
        </div>
    </div>
    <table>
        <tr>
            <th>Пн</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пт</th>
            <th>Сб</th>
            <th>Вс</th>
        </tr>
        @foreach($params['calendar'] as $key=>$calendar)
            @if(0 == $key % 7)
                <tr>
            @endif
            @if($calendar['to_month'])
                @if(0 < $calendar['count'])
                <td class="current-month calendar_ro-month"><span>{{$calendar['day']}}</span><p>{{$calendar['count']}} {{\App\Helpers\CUtils::Declension($calendar['count'], 'трениров', 'ки', 'ка', 'ок')}}</p></td>
                @else
                    <td class="calendar_ro-month"><span>{{$calendar['day']}}</span></td>
                @endif
            @else
                <td class="another-month"><span>{{$calendar['day']}}</span></td>
            @endif
            @if(6 == $key % 7)
                </tr>
            @endif
        @endforeach
    </table>
</div>
<script>
    FTAdmin.schedule_date.day = '{{$params['date']->format('d')}}';
    FTAdmin.schedule_date.month = '{{$params['date']->format('m')}}';
    FTAdmin.schedule_date.year = '{{$params['date']->format('Y')}}';
    document.querySelector('#arrow-left_calendar').addEventListener('click', function(event){
        event.stopPropagation();
        FTAdmin.AjaxSend('GET', '/admin/calendar/' + FTAdmin.select_table.schedule_club + '_' + '{{$params['prev_date']->format('m')}}' + '_' + '{{$params['prev_date']->format('Y')}}' + '/', '', FTAdmin.res.content.el);
    });
    document.querySelector('#arrow-right_calendar').addEventListener('click', function(event){
        event.stopPropagation();
        FTAdmin.AjaxSend('GET', '/admin/calendar/' + FTAdmin.select_table.schedule_club + '_' + '{{$params['next_date']->format('m')}}' + '_' + '{{$params['next_date']->format('Y')}}' + '/', '', FTAdmin.res.content.el);
    });
    document.querySelectorAll('.calendar_ro-month').forEach(function(element){
        element.addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.schedule_date.day = event.currentTarget.querySelector('span').innerText;
            FTAdmin.AjaxSend('GET', '/admin/schedule/' + FTAdmin.select_table.schedule_club + '_' + FTAdmin.schedule_date.year + '_' +
                FTAdmin.schedule_date.month + '_' + FTAdmin.schedule_date.day + '/', '', FTAdmin.res.content.el);
        });
    });
</script>