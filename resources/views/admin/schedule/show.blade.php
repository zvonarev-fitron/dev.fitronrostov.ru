<style>
    .images-name_page{
        display: inline-block;
    }
    .schedule-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
    .schedule-page_div_active {
        margin-top: -18px;
        margin-left: 16px;
    }
    div.my_form_group_select {
        margin: 0;
    }
    .schedule_admin_copy {
        display: flex;
        height: 50px;
        justify-content: space-between;
        align-items: flex-end;
        width: 100%;
        padding-bottom: 10px;
    }
    #schedule_admin_copy_form,
    #schedule_admin_erase_form {
        display: contents;
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="images-name_page"><a href="javascript:void(0)" id="schedule-page_b_calendar">Расписание</a> {{$params['club']->name}} {{$params['date']->format('d')}} {{\App\Helpers\CUtils::RusMonth($params['date']->format('m'))}} {{$params['date']->format('Y')}}</h2>
    <div class="schedule_admin_copy">
        <form action="" method="get" id="schedule_admin_copy_form">
            @csrf
            @include('include.input.oneselect', ['name' => 'schedule_admin_oneselect_copy', 'select' => '0', 'list' => $params['list_date'], 'text' => 'Выберите дату', 'slot' => ''])
            <button type="submit" id="schedule-admin_copy_add" class="btn" title="Скопировать тренировки" style="margin-left: 5px">Скопировать</button>
        </form>
        <form action="" method="get" id="schedule_admin_erase_form">
            @csrf
            <button type="submit" id="schedule-admin_copy_erase" class="btn" title="Очистить тренировки" style="margin-left: 5px">Очистить</button>
        </form>
        <button id="schedule-admin_to_calendar" class="btn" type="button" title="Перейти в календарь" style="margin-left: auto;">Календарь</button>
    </div>
    <table id="schedule-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>#</th>
            <th>Время</th>
            <th>Название</th>
            <th>Возраст</th>
            <th>Место</th>
            <th>Интенсивность</th>
            <th>Статус</th>
            <th>Запись</th>
            @can('admin')
            <th>Создан</th>
            <th>Изменен</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($params['schedules'] as $schedule)
            <tr>
                <td>{{$schedule->id}}</td>
                <td>{{(new \DateTime($schedule->start_time))->format('H:i')}} - {{(new \DateTime($schedule->end_time))->format('H:i')}}</td>
                <td>{{$params['trainings']->firstWhere('id', $schedule->trainings_id)->name}}</td>
                <td>
                    @foreach($schedule->years as $sch_year)
                       {{$sch_year->name}}&nbsp;
                    @endforeach
                </td>
                <td>{{ $params['rooms']->firstWhere('id', $schedule->rooms_id)->name }}</td>
                <td>{{ $schedule->intensity->name }}</td>
                <td>
                    @include('include.input.checkbox', [
                        'id' => $schedule->id,
                        'class' => 'cb_schedules',
                        'name' => 'active',
                        'checked' => $schedule->active,
                        'disabled' => 0,
                        'style' => 'margin-top: -16px; margin-left: 16px;'])
                </td>
                <td>
                    @if($schedule->pre_entry)
Пред. запись
                    @endif
                    @if($schedule->paid)
Платная
                    @endif
                </td>
                @can('admin')
                <td>{{$schedule->created_at}}</td>
                <td>{{$schedule->updated_at}}</td>
                @endcan
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="schedule-page_b_create" class="btn" title="Добавить тренировку">Добавить</button>
    <button type="button" id="schedule-page_b_edit" class="btn" title="Изменить тренировку">Изменить</button>
    <form action="" method="POST" id="schedule-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="schedule-page_b_delete" class="btn" title="Удалить тренировку">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.getElementById('schedule-admin_to_calendar').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/calendar/' + FTAdmin.select_table.schedule_club + '/', '', FTAdmin.res.content.el);
        });
        document.querySelectorAll('.cb_schedules').forEach(function(element){
            document.getElementById('label_active_' + element.dataset.id).addEventListener('click', function(event){
                event.preventDefault();
                var cb = document.getElementById(this.getAttribute('for'));
                var path = '/cb/schedules/active/';
                path += (!cb.checked ? '1/' : '0/');
                path += cb.dataset.id;
                // console.log(path);
                FTAdmin.AjaxCheckBox('POST', path , '{!! csrf_token() !!}', cb, true);
                event.preventDefault();
            });
        });
        document.getElementById('schedule_admin_erase_form').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            var data = new FormData(this);
            if(confirm('Вы уверены?')) {
                var data = new FormData(this);
                FTAdmin.AjaxSend('GET', '/admin/schedule/' + FTAdmin.select_table.schedule_club + '/{{$params['date']->format('d-m-Y')}}/erase', data, FTAdmin.res.content.el);
            }
        });
        document.getElementById('schedule_admin_copy_form').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            var select = document.getElementById('schedule_admin_oneselect_copy');
            if('0' != select.value) {
                if(confirm('Вы уверены?')) {
                    var data = new FormData(this);
                    FTAdmin.AjaxSend('GET', '/admin/schedule/' + FTAdmin.select_table.schedule_club + '/' + select.value + '/{{$params['date']->format('Y-m-d')}}/copy', data, FTAdmin.res.content.el);
                }
            }
        });
        document.querySelector('#schedule-page_b_calendar').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/calendar/' + FTAdmin.select_table.schedule_club + '/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#schedule-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/schedule/{{implode('_', $params['id'])}}/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#schedule-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.schedule) FTAdmin.AjaxSend('GET', '/admin/schedule/' + FTAdmin.select_table.schedule + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#schedule-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.schedule){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/schedule/' + FTAdmin.select_table.schedule, data, FTAdmin.res.content.el);
                FTAdmin.select_table.schedule = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#schedule-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.schedule = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.schedule) FTAdmin.AjaxSend('GET', '/admin/schedule/' + FTAdmin.select_table.schedule + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#schedule-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.schedule = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#schedule-page_t_index', 'schedule');
            }
        });
        FTAdmin.TableTrClearSelect('#schedule-page_t_index', 'schedule');
    })();
</script>
