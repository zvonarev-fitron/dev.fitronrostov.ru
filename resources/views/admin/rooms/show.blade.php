<style>
    .infrastructures-name_page{
        display: inline-block;
    }
    .room-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
    .images-page_img_show {
        width: 100px;
    }
    .images-page_div_active {
        margin-top: -16px;
        margin-left: 16px;
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="infrastructures-name_page">{{$params['club']->name}}</h2>
    <table id="rooms-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Наименование</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['rooms'] as $room)
            <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->name}}</td>
                <td>
                    <div class="custom-control custom-checkbox images-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="rooms-page_checkbox_active_{{$room->id}}" {{($room->active ? 'checked' : '')}} disabled>
                        <label class="custom-control-label" for="images-page_checkbox_active_{{$room->id}}"></label>
                    </div>
                </td>
                <td>{{$room->created_at}}</td>
                <td>{{$room->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="rooms-page_b_create" class="btn" title="Добавить место">Добавить</button>
    <button type="button" id="rooms-page_b_edit" class="btn" title="Изменить место">Изменить</button>
    <form action="" method="POST" id="rooms-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="rooms-page_b_delete" class="btn" title="Удалить место">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#rooms-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/rooms/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#rooms-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.room) FTAdmin.AjaxSend('GET', '/admin/rooms/' + FTAdmin.select_table.room + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#rooms-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.room){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/rooms/' + FTAdmin.select_table.room, data, FTAdmin.res.content.el);
                FTAdmin.select_table.room_club = 0;
            }
            return false;
        });
        document.querySelector('#rooms-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.room = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.room) FTAdmin.AjaxSend('GET', '/admin/rooms/' + FTAdmin.select_table.room + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#rooms-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName){
                FTAdmin.select_table.room = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#rooms-page_t_index', 'room');
            }
        });
        FTAdmin.select_table.room = 0;
        FTAdmin.TableTrClearSelect('#rooms-page_t_index', 'room');
    })();
</script>