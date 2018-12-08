<style>
    .preview_file img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="doings-page_f_store" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    @include('include.input.text', ['name' => 'id', 'slot' => 'Наименование', 'value' => $params['doing']->id, 'disabled' => true])
    @include('include.input.text', ['name' => 'name', 'slot' => 'Наименование', 'value' => $params['doing']->name])
    @include('include.input.text', ['name' => 'title', 'slot' => 'Главный заголовок', 'value' => $params['doing']->title])
    @include('include.input.text', ['name' => 'subtitle', 'slot' => 'Подзаголовок', 'value' => $params['doing']->subtitle])
    @include('include.input.preview_file', ['name' => 'image', 'value' => $params['doing']->image])
    @include('include.textarea.ckeditor', ['name' => 'preview', 'slot' => 'Анонс', 'value' => $params['doing']->preview])
    @include('include.textarea.ckeditor', ['name' => 'description', 'slot' => 'Текст', 'value' => $params['doing']->description])
    @include('include.input.date', ['name' => 'start_date', 'slot' => 'Дата', 'value' => $params['doing']->start_date])
    @include('include.input.date', ['name' => 'end_date', 'slot' => 'Дата окончания (опционально)', 'value' => $params['doing']->end_date])
    @include('include.input.text', ['name' => 'url', 'slot' => 'URL', 'value' => $params['doing']->url])
    @include('include.input.checkbox', ['id' => $params['doing']->id, 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['doing']->active])
    @include('include.input.text', ['name' => 'sort', 'slot' => 'Сортировка', 'value' => $params['doing']->sort])
    @include('include.input.text', ['name' => 'created_at', 'slot' => 'Создан', 'value' => $params['doing']->created_at, 'disabled' => true])
    @include('include.input.text', ['name' => 'updated_at', 'slot' => 'Изменен', 'value' => $params['doing']->updated_at, 'disabled' => true])
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="doings-page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function(){
        document.querySelector('#doings-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            document.querySelector('#preview').innerHTML = CKEDITOR.instances['preview'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/doings/{{$params['doing']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#doings-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/doings/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>