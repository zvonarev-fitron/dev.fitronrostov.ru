<form id="trainer-page_f_edit" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'id', 'slot' => 'Наименование', 'value' => $params['trainer']->id, 'disabled' => true])
    @include('include.input.text', ['name' => 'name', 'slot' => 'ФИО', 'value' => $params['trainer']->name])
    @include('include.input.preview_file', ['name' => 'picture', 'slot' => 'Портрет', 'value' => $params['trainer']->picture])
    @include('include.input.preview_file', ['name' => 'image', 'slot' => 'Фото', 'value' => $params['trainer']->image])
    @include('include.input.text', ['name' => 'youtube', 'slot' => 'Код видео с YouTube', 'value' => $params['trainer']->youtube])
    @include('include.textarea.ckeditor', ['name' => 'description', 'slot' => 'Текст', 'value' => $params['trainer']->description])
    @include('include.input.text', ['name' => 'code', 'slot' => 'URL', 'value' => $params['trainer']->code])
    @include('include.input.checkbox', ['id' => $params['trainer']->id, 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['trainer']->active])
    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#categories-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
    <div id="categories-page_seo" class="collapse">
        @include('include.input.text', ['name' => 'seo_h1', 'slot' => 'Seo H1', 'value' => $params['trainer']->seo_h1])
        @include('include.input.text', ['name' => 'seo_title', 'slot' => 'Seo Title', 'value' => $params['trainer']->seo_title])
        @include('include.input.text', ['name' => 'seo_keywords', 'slot' => 'Seo Keywords', 'value' => $params['trainer']->seo_keywords])
        @include('include.textarea.input', ['name' => 'seo_description', 'slot' => 'Seo Description', 'value' => $params['trainer']->seo_description])
    </div>
    @include('include.input.text', ['name' => 'created_at', 'slot' => 'Создан', 'value' => $params['trainer']->created_at, 'disabled' => true])
    @include('include.input.text', ['name' => 'updated_at', 'slot' => 'Изменен', 'value' => $params['trainer']->updated_at, 'disabled' => true])
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="trainer-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#trainer-page_f_edit').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/trainer/{{$params['trainer']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#trainer-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/trainer/' + FTAdmin.select_table.trainer_type + '/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>
