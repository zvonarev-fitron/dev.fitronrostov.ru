<form id="clubs-page_f_store" action="{{route('clubs.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;">
    @csrf
    @include('include.input.text', ['name' => 'code', 'slot' => 'Код'])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование'])
    @include('include.input.text', ['name' => 'address', 'slot' => 'Адрес'])
    @include('include.input.text', ['name' => 'phone', 'slot' => 'Телефон'])
    @include('include.textarea.input', ['name' => 'iframe', 'slot' => 'Встроенная карта'])
    @include('include.input.text', ['name' => 'map_x', 'slot' => 'Координаты X'])
    @include('include.input.text', ['name' => 'map_y', 'slot' => 'Координаты Y'])
    @include('include.input.preview_file', ['name' => 'market_image', 'slot' => 'Изображение маркета'])
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="clubs-page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function(){
        document.querySelector('#clubs-page_f_store').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
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