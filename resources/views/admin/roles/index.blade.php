<style>
    .images-name_page{
        display: inline-block;
    }
    .user-tr_click__select {
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
    <h2 class="images-name_page">Роли</h2>
    <table id="roles-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Код</th>
            <th>Наименование</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['roles'] as $role)
            <tr>
                <td>{{$role->id}}</td>
                <td>{{$role->title}}</td>
                <td>{{$role->name}}</td>
                <td>
                    <div class="custom-control custom-checkbox images-page_div_active">
                        <input type="checkbox" class="custom-control-input" id="images-page_checkbox_active_{{$role->id}}" {{$role->active ? 'checked' : ''}} disabled>
                        <label class="custom-control-label" for="images-page_checkbox_active_{{$role->id}}"></label>
                    </div>
                </td>
                <td>{{$role->created_at}}</td>
                <td>{{$role->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="role-page_b_create" class="btn" title="Добавить пользователя">Добавить</button>
    <button type="button" id="role-page_b_edit" class="btn" title="Изменить пользователя">Изменить</button>
    <form action="" method="POST" id="role-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="role-page_b_delete" class="btn" title="Удалить пользователя">Удалить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#roles-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.role = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#roles-page_t_index', 'role');
            }
        });
        FTAdmin.TableTrClearSelect('#roles-page_t_index', 'role');
        document.querySelector('#role-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '{{route('roles.create')}}', '', FTAdmin.res.content.el);
        });
        document.querySelector('#roles-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.role = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.role) FTAdmin.AjaxSend('GET', '/admin/roles/' + FTAdmin.select_table.role + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#role-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.role) FTAdmin.AjaxSend('GET', '/admin/roles/' + FTAdmin.select_table.role + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#role-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.role){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/roles/' + FTAdmin.select_table.role, data, FTAdmin.res.content.el);
                FTAdmin.select_table.role = 0;
            }
            return false;
        });
    })();
</script>