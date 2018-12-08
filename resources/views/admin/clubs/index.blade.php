<style>
    .clubs-name_page{
        display: inline-block;
    }
    .club-tr_click__select {
        background-color: rgba(0,0,0,.075);
    }
</style>
<div style="margin-left: 10px; margin-right: 10px;">
    <h2 class="clubs-name_page">Клубы</h2>
    <table id="clubs-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Код</th>
            <th>Наименование</th>
            <th>Адрес</th>
            <th>Телефон</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['clubs'] as $club)
        <tr>
            <td>{{$club->id}}</td>
            <td>{{$club->code}}</td>
            <td>{{$club->name}}</td>
            <td>{{$club->address}}</td>
            <td>{{$club->phone}}</td>
            <td>{{$club->created_at}}</td>
            <td>{{$club->updated_at}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="club-page_b_create" class="btn" title="Добавить клуб">Добавить</button>
    <button type="button" id="club-page_b_edit" class="btn" title="Изменить клуб">Изменить</button>
    <form action="" method="POST" id="club-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
    <button type="submit" id="club-page_b_delete" class="btn" title="Удалить клуб">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#club-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/clubs/create', '', FTAdmin.res.content.el);
        });
        document.querySelector('#club-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.club) FTAdmin.AjaxSend('GET', '/admin/clubs/' + FTAdmin.select_table.club + '/edit/', '', FTAdmin.res.content.el);
        });

        document.querySelector('#club-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.club){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/clubs/' + FTAdmin.select_table.club, data, FTAdmin.res.content.el);
                FTAdmin.select_table.club = 0;
            }
            event.preventDefault();
            return false;
        });
        document.querySelector('#clubs-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.club = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.club) FTAdmin.AjaxSend('GET', '/admin/clubs/' + FTAdmin.select_table.club + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#clubs-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.club = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#clubs-page_t_index', 'club');
            }
        });
        FTAdmin.TableTrClearSelect('#clubs-page_t_index', 'club');
    })();
</script>
