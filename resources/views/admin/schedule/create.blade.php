<h2>Расписание {{$params['club']->name}} {{$params['date']->format('d')}} {{\App\Helpers\CUtils::RusMonth($params['date']->format('m'))}} {{$params['date']->format('Y')}}</h2>
<form id="schedules-page_f_store" action="{{route('schedule.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="clubs_id" id="clubs_id" value="{{$params['club']->id}}"/>
    <input type="hidden" name="start_time" id="start_time" value="0"/>
    <input type="hidden" name="end_time" id="end_time" value="0"/>
    <input type="hidden" name="training_id" id="training_id" value="0"/>
    <input type="hidden" name="room_id" id="room_id" value="0"/>
    <input type="hidden" name="intensity_id" id="intensity_id" value="0"/>
    @include('include.input.dropdown', ['id' => 'training', 'data_id' => '0', 'list' => $params['list_trainings'], 'text' => 'Выберите занятие', 'slot' => 'Занятие'])
    @include('include.input.dropdown', ['id' => 'room', 'data_id' => '0', 'list' => $params['list_rooms'], 'text' => 'Выберите место', 'slot' => 'Место'])
    {{--@include('include.input.dropdown', ['id' => 'trainer', 'data_id' => '0', 'list' => $params['list_trainings'], 'text' => 'Выберите тренера', 'slot' => 'Тренер'])--}}
    <div class="input-group" id="group_time_sed">
    @include('include.input.time', ['name' => 'start_time_d', 'slot' => 'Время начала', 'style' => 'width:150px;height:40px;margin-right:30px;'])
    @include('include.input.number', ['name' => 'duration', 'slot' => 'Длительность', 'style' => 'width:150px;height:40px;margin-right:30px;', 'min' => '1'])
    @include('include.input.time', ['name' => 'end_time_d', 'slot' => 'Время окончания', 'style' => 'width:150px;height:40px;', 'disabled' => 1])
    </div>
    @include('include.input.checkbox', ['name' => 'pre_entry', 'id' => 'pre_entry', 'slot' => 'Преварительная запись'])
    @include('include.input.checkbox', ['name' => 'paid', 'id' => 'paid', 'slot' => 'Платная'])
    @include('include.input.dropdown', ['id' => 'intensity', 'data_id' => '0', 'list' => $params['list_intensities'], 'text' => 'Выберите интенсивность', 'slot' => 'Интенсивность', 'search' => 0])
    @include('include.input.select',['name' => 'age', 'slot' => 'Возраст', 'text' => 'Выберите возраст', 'list' => $params['list_years']])
    @include('include.input.checkbox', ['name' => 'show_age', 'id' => 'show_age', 'slot' => 'Показывать возраст'])
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="schedule-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function() {
        FTAdmin.me = {
        'training_id': 'Занятия',
        'room_id': 'Место',
        'intensity_id': 'Интенсивность',
        'start_time': 'Время начала',
        'duration': 'Длительность',
        'end_time': 'Время окончания',
        };

        FTAdmin.schedule_date.day = '{{$params['date']->format('d')}}';
        FTAdmin.schedule_date.month = '{{$params['date']->format('m') - 1}}';
        FTAdmin.schedule_date.year = '{{$params['date']->format('Y')}}';

        document.querySelector('#start_time_d').addEventListener('keydown', function(event){if(13 == event.keyCode){event.preventDefault(); document.querySelector('#duration').focus();}});
        document.querySelector('#duration').addEventListener('keydown', function(event){ if(13 == event.keyCode){ event.preventDefault(); document.querySelector('#start_time_d').focus()};});

//        document.querySelector('#end_time_d').addEventListener('keydown', function(event){ if(13 == event.keyCode) event.preventDefault(); });

        document.querySelector('#group_time_sed').addEventListener('change', function(event){
            event.stopPropagation();
            event.preventDefault();
            var st = document.querySelector('#start_time_d');
            var dt = document.querySelector('#duration');
            var etd = document.querySelector('#end_time_d');
            var date = new Date(FTAdmin.schedule_date.year, FTAdmin.schedule_date.month, FTAdmin.schedule_date.day, st.value.split(':')[0], st.value.split(':')[1], 0, 0);
            if(!!dt.value){
                date.setMinutes(date.getMinutes() + parseInt(dt.value));
                etd.value = String(date.getHours()).padStart(2,'0') + ':' + String(date.getMinutes()).padStart(2,'0');
            }
        });
        document.querySelector('#schedules-page_f_store').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            var st = document.querySelector('#start_time_d');
            var ds = new Date(FTAdmin.schedule_date.year, FTAdmin.schedule_date.month, FTAdmin.schedule_date.day, st.value.split(':')[0], st.value.split(':')[1], 0, 0);
            document.querySelector('#start_time').value = ds.getFullYear() + '-' + (1 + ds.getMonth()) + '-' + ds.getDate() + ' ' + ds.getHours() + ':' +  ds.getMinutes() + ':' + ds.getSeconds();
            var et = document.querySelector('#end_time_d');
            var de = new Date(FTAdmin.schedule_date.year, FTAdmin.schedule_date.month, FTAdmin.schedule_date.day, et.value.split(':')[0], et.value.split(':')[1], 0, 0);
            document.querySelector('#end_time').value = de.getFullYear() + '-' + (1 + de.getMonth()) + '-' + de.getDate() + ' ' + de.getHours() + ':' +  de.getMinutes() + ':' + de.getSeconds();
            //document.querySelector('#duration').value = document.querySelector('#duration_d').value;
            document.querySelector('#room_id').value = document.querySelector('#room').dataset.id;
            document.querySelector('#intensity_id').value = document.querySelector('#intensity').dataset.id;
            document.querySelector('#training_id').value = document.querySelector('#training').dataset.id;
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#schedule-page_b_canchel').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/schedule/' + FTAdmin.select_table.schedule_club + '_' + FTAdmin.schedule_date.year + '_' +
                FTAdmin.schedule_date.month + '_' + FTAdmin.schedule_date.day + '/', '', FTAdmin.res.content.el);
        });
    })();
</script>
