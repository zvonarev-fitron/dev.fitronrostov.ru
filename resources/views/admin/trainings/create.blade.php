<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="trainings-page_f_store" action="{{route('trainings.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="trainings-page_category_id" name="category_id" value="0">
    <div class="form-group">
        <label for="name">Наименование</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <input id="image" type="file" name="image" multiple="multiple"/>
    <div id="pre_view"></div>
    <div class="form-group">
        <label for="description">Полное описание</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="form-group">
        <label for="preview">Анонс</label>
        <textarea class="form-control" id="preview" name="preview"></textarea>
    </div>
    <div class="form-group">
        <label for="type_training_id">Тип</label>
        <select class="form-control" id="type_training_id" name="type_training_id">
            @foreach($params['types'] as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label style="display: block;">Возраст</label>
        @foreach($params['years'] as $year)
            @if(1 != $year->id)
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="year[]" value="{{$year->id}}">{{$year->name}},
                </label>
            </div>
            @endif
        @endforeach
    </div>

    <div class="form-group">
        <label for="min_time">Минимальная продолжительность</label>
        <input type="text" class="form-control" id="min_time" name="min_time">
    </div>
    <div class="form-group">
        <label for="max_time">Максимальная продолжительность</label>
        <input type="text" class="form-control" id="max_time" name="max_time">
    </div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url">
    </div>
    <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" name="sort">
    </div>
    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#categories-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
    <div id="categories-page_seo" class="collapse">
        <div class="form-group">
            <label for="seo_h1">Seo H1</label>
            <input type="text" class="form-control" id="seo_h1" name="seo_h1">
        </div>
        <div class="form-group">
            <label for="seo_title">Seo Title</label>
            <input type="text" class="form-control" id="seo_title" name="seo_title">
        </div>
        <div class="form-group">
            <label for="seo_keywords">Seo Keywords</label>
            <input type="text" class="form-control" id="seo_keywords" name="seo_keywords">
        </div>
        <div class="form-group">
            <label for="seo_description">Seo Description</label>
            <textarea class="form-control" id="seo_description" name="seo_description"></textarea>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="trainings-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
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
            document.querySelector('#trainings-page_category_id').value = FTAdmin.select_table.category;
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#trainings-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/categories/' + FTAdmin.select_table.slider + '/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
    CKEDITOR.replace('description');
    CKEDITOR.replace('preview');
</script>