<form id="user-page_f_store" action="{{route('users.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @include('include.input.text', ['name' => 'login', 'slot' => 'Логин', 'value' => $old->login ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'login'])
    @include('include.input.email', ['name' => 'email', 'slot' => 'Почта', 'value' => $old->email ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'email'])
    @include('include.input.tel', ['name' => 'phone', 'slot' => 'Телефон', 'value' => $old->phone ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'phone'])
    @include('include.input.text', ['name' => 'surname', 'slot' => 'Фамилия', 'value' => $old->surname ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'surname'])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Имя', 'value' => $old->name ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
    @include('include.input.text', ['name' => 'lastname', 'slot' => 'Отчество', 'value' => $old->lastname ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'lastname'])
    <div class="form-group">
    @include('include.input.checkbox', ['id' => 'new_user', 'name' => 'active', 'slot' => 'Статус', 'checked' => $old->active ?? false])
    </div>
    @include('include.input.password', ['name' => 'password', 'slot' => 'Пароль'])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'password'])
    @include('include.input.password', ['name' => 'password_confirmation', 'slot' => 'Подтвердить Пароль'])
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="user-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        var phoneMask = new IMask(
            document.getElementById('phone'), {
                mask: '+{7}(000)000-00-00'
            });
        document.querySelector('#user-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            event.stopPropagation();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el, true);
            return false;
        });
        document.querySelector('#user-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '{{route('users.index')}}', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>