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
    <h2 class="images-name_page">Пользователи</h2>
    <table id="users-page_t_index" class="table table-hover header-fixed" title="Двойной клик перейти на редактирование">
        <thead>
        <tr>
            <th>id</th>
            <th>Логин</th>
            <th>Почта</th>
            <th>Телефон</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Статус</th>
            <th>Создан</th>
            <th>Изменен</th>
        </tr>
        </thead>
        <tbody>
        @foreach($params['users'] as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->login}}</td>
                <td>{{$user->email}}</td>
                <td>{{ $user->phone }}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->lastname}}</td>
                <td>
                    @include('include.input.checkbox', [
                        'id' => $user->id,
                        'class' =>
                        'cb_users',
                        'name' => 'active',
                        'checked' => $user->active,
                        'disabled' => 0,
                        'style' => 'margin-top: -16px; margin-left: 16px;'])
                </td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" id="user-page_b_create" class="btn" title="Добавить пользователя">Добавить</button>
    <button type="button" id="user-page_b_edit" class="btn" title="Изменить пользователя">Изменить</button>
    <form action="" method="POST" id="user-page_f_delete" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" id="user-page_b_delete" class="btn" title="Удалить пользователя">Удалить</button>
    </form>
</div>
<script>
    (function(){

        document.querySelectorAll('.cb_users').forEach(function(element){
            document.getElementById('label_active_' + element.dataset.id).addEventListener('click', function(event){
                event.preventDefault();
                var cb = document.getElementById(this.getAttribute('for'));
                var path = '/cb/users/active/';
                path += (!cb.checked ? '1/' : '0/');
                path += cb.dataset.id;
                // console.log(path);
                FTAdmin.AjaxCheckBox('POST', path , '{!! csrf_token() !!}', cb, true);
                event.preventDefault();
            });
        });


        document.querySelector('#users-page_t_index').addEventListener('click', function(event){
            event.stopPropagation();
            if('TD' == event.target.nodeName) {
                FTAdmin.select_table.user = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
                FTAdmin.TableTrClearSelect('#users-page_t_index', 'user');
            }
        });
        FTAdmin.TableTrClearSelect('#users-page_t_index', 'user');
        document.querySelector('#user-page_b_create').addEventListener('click', function(event){
            event.stopPropagation();
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '{{route('users.create')}}', '', FTAdmin.res.content.el);
        });
        document.querySelector('#users-page_t_index').addEventListener('dblclick', function(event){
            event.stopPropagation();
            FTAdmin.select_table.user = parseInt(event.target.parentElement.firstElementChild.innerHTML, 10);
            if(0 < FTAdmin.select_table.user) FTAdmin.AjaxSend('GET', '/admin/users/' + FTAdmin.select_table.user + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#user-page_b_edit').addEventListener('click', function(event){
            event.stopPropagation();
            if(0 < FTAdmin.select_table.user) FTAdmin.AjaxSend('GET', '/admin/users/' + FTAdmin.select_table.user + '/edit/', '', FTAdmin.res.content.el);
        });
        document.querySelector('#user-page_f_delete').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            if(0 < FTAdmin.select_table.user){
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/users/' + FTAdmin.select_table.user, data, FTAdmin.res.content.el, true);
                FTAdmin.select_table.user = 0;
            }
            return false;
        });
    })();
</script>
