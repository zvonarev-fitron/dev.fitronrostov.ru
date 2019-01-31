<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="trainer-page_f_store" action="{{route('trainer.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="clubs_id" value="0" id="trainer-page_clubs_id">
    <input type="hidden" name="type_trainers_id" value="0" id="trainer-page_type_trainer_id">
    @include('include.input.text', ['name' => 'name', 'slot' => 'ФИО'])
    @include('include.input.preview_file', ['name' => 'picture', 'slot' => 'Портрет'])
    @include('include.input.preview_file', ['name' => 'image', 'slot' => 'Фото'])
    @include('include.input.text', ['name' => 'youtube', 'slot' => 'Код видео с YouTube'])
    @include('include.textarea.ckeditor', ['name' => 'description', 'slot' => 'Текст'])
    @include('include.input.text', ['name' => 'code', 'slot' => 'URL'])
    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#categories-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
    <div id="categories-page_seo" class="collapse">
        @include('include.input.text', ['name' => 'seo_h1', 'slot' => 'Seo H1'])
        @include('include.input.text', ['name' => 'seo_title', 'slot' => 'Seo Title'])
        @include('include.input.text', ['name' => 'seo_keywords', 'slot' => 'Seo Keywords'])
        @include('include.textarea.input', ['name' => 'seo_description', 'slot' => 'Seo Description'])
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="trainer-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>
<script>
    (function(){
        document.querySelector('#trainer-page_f_store').addEventListener('submit', function(event){
            event.stopPropagation();
            event.preventDefault();
            document.querySelector('#trainer-page_clubs_id').value = FTAdmin.select_table.trainer_club;
            document.querySelector('#trainer-page_type_trainer_id').value = FTAdmin.select_table.trainer_type.split('_')[1];
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#trainer-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/trainer/' + FTAdmin.select_table.trainer_type + '/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>
