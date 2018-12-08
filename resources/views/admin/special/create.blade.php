<style>
</style>
<form id="special_page_f_store" action="{{route('special.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $old->login ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'name'])
    @include('include.input.text', ['name' => 'description', 'slot' => 'Описание', 'value' => $old->login ?? ''])
    @include('include.alerts.danger', ['errors' => $errors, 'slot' => 'description'])
    @include('include.input.number', ['name' => 'price_1', 'slot' => 'Цена 1', 'style' => 'width:150px;height:40px;margin-right:30px;', 'min' => '1'])
    @include('include.input.number', ['name' => 'price_2', 'slot' => 'Цена 2', 'style' => 'width:150px;height:40px;margin-right:30px;', 'min' => '1'])
    @include('include.input.oneselect',['name' => 'type_card_id', 'slot' => 'Тип карты', 'text' => 'Выберите тип карты', 'select' => 0,  'list' => $params['type_card']])
    @include('include.input.date', ['slot' => 'Начало активности', 'name' => 'start_active'])
    @include('include.input.date', ['slot' => 'Конец активности', 'name' => 'end_active'])
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="special_page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function(){
        document.querySelector('#special_page_f_store').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#special_page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/special/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>
