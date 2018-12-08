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
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="images-name_page"><a href="javascript:void(0)" id="schedule-page_b_calendar">Расписание</a> {{$params['club']->name}} {{$params['date']->format('d')}} {{\App\Helpers\CUtils::RusMonth($params['date']->format('m'))}} {{$params['date']->format('Y')}}</h2>
    <table id="schedule-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Время</th>
            <th>Название</th>
            <th>Возраст</th>
            <th>Место</th>
            <th>Сортировка</th>
            <th>Статус</th>
            <th> </th>
            <th>Создан</th>
            <th>Изменен</th>
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
                <td>{{$params['rooms']->firstWhere('id', $schedule->rooms_id)->name}}</td>
                <td>{{$schedule->sort}}</td>
                <td>
                    <div class="custom-control custom-checkbox schedule-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="images-page_checkbox_active_{{$schedule->id}}" <?=($schedule->active ? 'checked' : '');?> disabled>
                        <label class="custom-control-label" for="images-page_checkbox_active_{{$schedule->id}}"></label>
                    </div>
                </td>
                <td>
                    @if($schedule->pre_entry)
Пред. запись
                    @endif
                    @if($schedule->paid)
Платная
                    @endif
                </td>
                <td>
                    {{$schedule->created_at}}
                </td>
                <td>{{$schedule->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="schedule-page_b_create" class="btn" title="Добавить тренировку">Добавить</button>
    <button type="button" id="schedule-page_b_edit" class="btn" title="Изменить тренировку">Изменить</button>
    <form action="" method="POST" id="image-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="schedule-page_b_delete" class="btn" title="Удалить тренировку">Удалить</button>
    </form>
</div>
<script>
    (function(){
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
        document.querySelector('#schedule-page_b_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.image){
                var data = new FormData(this);
//                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/images/' + FTAdmin.select_table.image, data, FTAdmin.res.content.el);
                FTAdmin.select_table.image = 0;
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
