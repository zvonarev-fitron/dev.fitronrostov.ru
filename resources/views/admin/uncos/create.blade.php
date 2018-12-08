<div style="margin-left: 10px; margin-right: 10px;">
    <h2>Добавить новость</h2>
    <form method="POST" action="{{route('uncos.store')}}" id="uncos-page_f_store">
        @csrf
        @include('include.input.text', ['name' => 'title', 'slot' => 'Заголовок'])
        @include('include.textarea.ckeditor', ['name' => 'preview', 'slot' => 'Анонс'])
        @include('include.textarea.ckeditor', ['name' => 'description', 'slot' => 'Текст'])
        @include('include.input.date', ['name' => 'date', 'slot' => 'Дата'])
        @include('include.input.text', ['name' => 'code', 'slot' => 'Метка'])
        @include('include.input.checkbox', ['id' => 1, 'name' => 'active', 'slot' => 'Статус', 'checked' => 1, 'disabled' => 0])
        @include('include.input.text', ['name' => 'sort', 'value' => $params['max_sort'], 'slot' => 'Сортировка'])
        <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#uncos-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
        <div id="uncos-page_seo" class="collapse">
            @include('include.input.text', ['name' => 'seo_h1', 'slot' => 'Seo H1'])
            @include('include.input.text', ['name' => 'seo_title', 'slot' => 'Seo Title'])
            @include('include.input.text', ['name' => 'seo_keywords', 'slot' => 'Seo Keywords'])
            @include('include.textarea.input', ['name' => 'seo_description', 'slot' => 'Seo Description'])
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Сохранить</button>
            <button id="uncos-page_b_canchel" class="btn btn-default">Отменить</button>
        </div>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#uncos-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            document.querySelector('#preview').innerHTML = CKEDITOR.instances['preview'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#uncos-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/uncos/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>
