<form id="role-page_f_edit" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'id', 'slot' => 'Id', 'value' => $params['role']->id, 'disabled' => true])
    @include('include.input.text', ['name' => 'title', 'slot' => 'Код', 'value' => $params['role']->title])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'title'])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $params['role']->name])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
    <div class="form-group">
        @include('include.input.checkbox', ['id' => 'active', 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['role']->active])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="role-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#role-page_f_edit').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '{{route('roles.update', ['role' => $params['role']->id])}}', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#role-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '{{route('roles.index')}}', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>