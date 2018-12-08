<div style="margin-left: 10px; margin-right: 10px;">
    <h2>Новая страница</h2>
    <form method="POST" action="{{route('doings.store')}}" id="doings-page_f_store">
        @csrf
        @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование'])
        @include('include.input.text', ['name' => 'title', 'slot' => 'Главный заголовок'])
        @include('include.input.text', ['name' => 'subtitle', 'slot' => 'Подзаголовок'])
        @include('include.input.preview_file', ['name' => 'image'])
        @include('include.textarea.ckeditor', ['name' => 'preview', 'slot' => 'Анонс'])
        @include('include.textarea.ckeditor', ['name' => 'description', 'slot' => 'Текст'])
        @include('include.input.date', ['name' => 'start_date', 'slot' => 'Дата'])
        @include('include.input.date', ['name' => 'end_date', 'slot' => 'Дата окончания (опционально)'])
        @include('include.input.text', ['name' => 'url', 'slot' => 'URL'])
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="doings-page_b_canchel" class="btn btn-default">Отменить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#doings-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            document.querySelector('#preview').innerHTML = CKEDITOR.instances['preview'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#doings-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/doings/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>
