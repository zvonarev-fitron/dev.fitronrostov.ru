<style>
    .user_main_roles_edit {
        display: flex;
        justify-content:  space-around;
        width: 100%;
    }
    .user_main_roles_edit_left {
        width: 45%;
        border: 1px solid lightgrey;
        padding: 0 10px;
    }
    .user_main_roles_edit_right {
        width: 45%;
        border: 1px solid lightgrey;
        padding: 0 10px;
    }
    .role_div_active {
        margin-top: -16px;
        margin-left: 16px;
    }
</style>
<form id="user-page_f_edit" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    <div class="user_main_roles_edit">
        @csrf
        @method('PUT')
        <div class="user_main_roles_edit_left">
            <h2>Пользователь</h2>
            @include('include.input.text', ['name' => 'id', 'slot' => 'Id', 'value' => $params['user']->id, 'disabled' => true])
            @include('include.input.text', ['name' => 'login', 'slot' => 'Логин', 'value' => $params['user']->login])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'login'])
            @include('include.input.email', ['name' => 'email', 'slot' => 'Почта', 'value' => $params['user']->email])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'email'])
            @include('include.input.tel', ['name' => 'phone', 'slot' => 'Телефон', 'value' => $params['user']->phone])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'phone'])
            @include('include.input.text', ['name' => 'surname', 'slot' => 'Фамилия', 'value' => $params['user']->surname])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'surname'])
            @include('include.input.text', ['name' => 'name', 'slot' => 'Имя', 'value' => $params['user']->name])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
            @include('include.input.text', ['name' => 'lastname', 'slot' => 'Отчество', 'value' => $params['user']->lastname])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'lastname'])
            <div class="form-group">
                @include('include.input.checkbox', ['id' => 'new_user', 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['user']->active])
            </div>
            @include('include.input.password', ['name' => 'password', 'slot' => 'Пароль'])
            @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'password'])
            @include('include.input.password', ['name' => 'password_confirmation', 'slot' => 'Подтвердить Пароль'])
            <div class="form-group">
                <button type="submit" class="btn btn-default">Сохранить</button>
                <button id="user-page_b_canchel" class="btn btn-default">Отменить</button>
            </div>
        </div>
        <div class="user_main_roles_edit_right">
            <h2>Роли</h2>
            <table class="table table-hover header-fixed">
                <tr>
                    <th>Id</th>
                    <th>Наименование</th>
                    <th>Статус</th>
                </tr>
            @foreach($params['roles_all'] as $role_all)
                <tr>
                    <td><label for="role_checkbox_active_{{$role_all->id}}">{{$role_all->id}}</label></td>
                    <td><label for="role_checkbox_active_{{$role_all->id}}">{{$role_all->name}}</label></td>
                    <td>
                        <div class="custom-control custom-checkbox role_div_active">
                            <input type="checkbox" class="custom-control-input roles_active" name="roles[{{$role_all->id}}]" id="role_checkbox_active_{{$role_all->id}}" {{$params['roles']->firstWhere('id', $role_all->id) ? 'checked' : ''}}>
                            <label class="custom-control-label" for="role_checkbox_active_{{$role_all->id}}"></label>
                        </div>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
    </div>
</form>
<script>
    (function(){
        var phoneMask = new IMask(
            document.getElementById('phone'), {
                mask: '+{7}(000)000-00-00'
            });
        document.querySelector('#user-page_f_edit').addEventListener('submit', function(event){
            event.preventDefault();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '{{route('users.update', ['user' => $params['user']->id])}}', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#user-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '{{route('users.index')}}', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>