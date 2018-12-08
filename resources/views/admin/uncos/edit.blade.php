<form id="uncos-page_f_edit" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'title', 'value' => $params['uncos']->title, 'slot' => 'Заголовок'])
    @include('include.textarea.ckeditor', ['name' => 'preview', 'value' => $params['uncos']->preview, 'slot' => 'Анонс'])
    @include('include.textarea.ckeditor', ['name' => 'description', 'value' => $params['uncos']->description, 'slot' => 'Текст'])
    @include('include.input.date', ['name' => 'date', 'value' => (new \DateTime($params['uncos']->date))->format('Y-m-d'), 'slot' => 'Дата'])
    @include('include.input.text', ['name' => 'code', 'value' => $params['uncos']->code, 'slot' => 'Метка'])
    @include('include.input.checkbox', ['id' => 1, 'name' => 'active', 'slot' => 'Статус', 'checked' => ($params['uncos']->active ? 1 : 0), 'disabled' => 0])
    @include('include.input.text', ['name' => 'sort', 'value' => $params['uncos']->sort, 'slot' => 'Сортировка'])
    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#uncos-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
    <div id="uncos-page_seo" class="collapse">
        @include('include.input.text', ['name' => 'seo_h1', 'value' => $params['uncos']->seo_h1, 'slot' => 'Seo H1'])
        @include('include.input.text', ['name' => 'seo_title', 'value' => $params['uncos']->seo_title, 'slot' => 'Seo Title'])
        @include('include.input.text', ['name' => 'seo_keywords', 'value' => $params['uncos']->seo_keywords, 'slot' => 'Seo Keywords'])
        @include('include.textarea.input', ['name' => 'seo_description', 'value' => $params['uncos']->seo_description, 'slot' => 'Seo Description'])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="uncos-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#uncos-page_f_edit').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            document.querySelector('#preview').innerHTML = CKEDITOR.instances['preview'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/uncos/{{$params['uncos']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#uncos-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/uncos/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>