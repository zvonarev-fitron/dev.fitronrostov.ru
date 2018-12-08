<form id="rooms-page_f_edit" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'id', 'slot' => 'Id', 'value' => $params['room']->id, 'disabled' => true])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $params['room']->name])
    @include('include.input.checkbox', ['id' => $params['room']->id, 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['room']->active])
    @include('include.input.text', ['name' => 'created_at', 'slot' => 'Создан', 'value' => $params['room']->created_at, 'disabled' => true])
    @include('include.input.text', ['name' => 'updated_at', 'slot' => 'Изменен', 'value' => $params['room']->updated_at, 'disabled' => true])
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="rooms-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#rooms-page_f_edit').addEventListener('submit', function(event){
            event.preventDefault();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/rooms/{{$params['room']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#rooms-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/rooms/' + FTAdmin.select_table.room_club + '/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>