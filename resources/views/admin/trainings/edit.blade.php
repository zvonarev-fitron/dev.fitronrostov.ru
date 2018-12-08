<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="trainings-page_f_store" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="category_id" value="{{$params['training']->category_id}}">
    <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$params['training']->id}}" disabled>
    </div>
    <div class="form-group">
        <label for="name">Наменование</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$params['training']->name}}">
    </div>
    <input id="image" type="file" name="image" multiple="multiple">
    <div id="pre_view"><img src="{{$params['training']->image}}"></div>
    <div class="form-group">
        <label for="description">Полное описание</label>
        <textarea class="form-control" id="description" name="description">{{$params['training']->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="preview">Анонс</label>
        <textarea class="form-control" id="preview" name="preview">{{$params['training']->preview}}</textarea>
    </div>
    <div class="form-group">
        <label for="type_training_id">Тип</label>
        <select class="form-control" id="type_training_id" name="type_training_id">
            @foreach($params['types'] as $type)
                <option {{($type->id == $params['training']->type_training_id ? 'selected' : '')}} value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label style="display: block;">Возраст</label>
        @foreach($params['years'] as $year)
            @if(1 != $year->id)
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="year[]" value="{{$year->id}}" {{($params['training_years']->contains('year_id', $year->id) ? 'checked' : '')}}>{{$year->name}},
                    </label>
                </div>
            @endif
        @endforeach
    </div>
    <div class="form-group">
        <label for="min_time">Минимальная продолжительность</label>
        <input type="text" class="form-control" id="min_time" name="min_time" value="{{$params['training']->min_time}}">
    </div>
    <div class="form-group">
        <label for="max_time">Максимальная продолжительность</label>
        <input type="text" class="form-control" id="max_time" name="max_time" value="{{$params['training']->max_time}}">
    </div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url" value="{{$params['training']->url}}">
    </div>
    <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" name="sort" value="{{$params['training']->sort}}">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox images-page_div_active">
            <input type="checkbox" name="active" class="custom-control-input" id="trainings-page_checkbox_active_{{$params['training']->id}}" {{($params['training']->active ? 'checked' : '')}}>
            <label class="custom-control-label" for="trainings-page_checkbox_active_{{$params['training']->id}}">Статус</label>
        </div>
    </div>
    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#categories-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
    <div id="categories-page_seo" class="collapse">
        <div class="form-group">
            <label for="seo_h1">Seo H1</label>
            <input type="text" class="form-control" id="seo_h1" name="seo_h1" value="{{$params['training']->seo_h1}}">
        </div>
        <div class="form-group">
            <label for="seo_title">Seo Title</label>
            <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{$params['training']->seo_title}}">
        </div>
        <div class="form-group">
            <label for="seo_keywords">Seo Keywords</label>
            <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="{{$params['training']->seo_keywords}}">
        </div>
        <div class="form-group">
            <label for="seo_description">Seo Description</label>
            <textarea class="form-control" id="seo_description" name="seo_description">{{$params['training']->seo_description}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="created_at">Создан</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{$params['training']->created_at}}" disabled>
    </div>
    <div class="form-group">
        <label for="updated_at">Изменен</label>
        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$params['training']->updated_at}}" disabled>
    </div>
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="trainings-page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function() {
        var inpElem = document.getElementById('image'),
            divElem = document.getElementById('pre_view');
        inpElem.addEventListener("change", function(e) {
            preview(this.files[0]);
        });
        function preview(file) {
            if ( file.type.match(/image.*/) ) {
                var reader = new FileReader(), img;
                reader.addEventListener("load", function(event) {
                    img = document.createElement('img');
                    img.src = event.target.result;
                    divElem.innerHTML = '';
                    divElem.appendChild(img);
                });
                reader.readAsDataURL(file);
            }
        }
    })();
    (function(){
        document.querySelector('#trainings-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            document.querySelector('#preview').innerHTML = CKEDITOR.instances['preview'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/trainings/{{$params['training']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#trainings-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/trainings/' + FTAdmin.select_table.category + '/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
    CKEDITOR.replace('description');
    CKEDITOR.replace('preview', {
        enterMode     : CKEDITOR.ENTER_BR,
        entities     : false,
        htmlEncodeOutput : false,
        allowedContent: true
    });
</script>