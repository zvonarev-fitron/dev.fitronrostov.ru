<form id="clubs-page_f_edit" action="{{route('clubs.index')}}" method="POST" style="margin-left: 10px; margin-right: 10px;">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'id', 'slot' => 'Id', 'value' => $params['club']->id, 'disabled' => true])
    @include('include.input.text', ['name' => 'code', 'slot' => 'Код', 'value' => $params['club']->code])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $params['club']->name])
    @include('include.input.text', ['name' => 'address', 'slot' => 'Адрес', 'value' => $params['club']->address])
    @include('include.input.text', ['name' => 'phone', 'slot' => 'Телефон', 'value' => $params['club']->phone])
    @include('include.textarea.input', ['name' => 'iframe', 'slot' => 'Встроенная карта', 'value' => $params['club']->iframe])
    @include('include.input.text', ['name' => 'map_x', 'slot' => 'Координаты X', 'value' => $params['club']->map_x])
    @include('include.input.text', ['name' => 'map_y', 'slot' => 'Координаты Y', 'value' => $params['club']->map_y])
    @include('include.input.preview_file', ['name' => 'market_image', 'slot' => 'Изображение маркета', 'value' => $params['club']->market_image])
    @include('include.input.text', ['name' => 'created_at', 'slot' => 'Создан', 'value' => $params['club']->created_at, 'disabled' => true])
    @include('include.input.text', ['name' => 'updated_at', 'slot' => 'Изменен', 'value' => $params['club']->updated_at, 'disabled' => true])
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="clubs-page_b_canchel" class="btn btn-default">Назад</button>
</form>
<script>
    (function(){
        document.querySelector('#clubs-page_f_edit').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/clubs/{{$params['club']->id}}/', data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#clubs-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/clubs', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>
