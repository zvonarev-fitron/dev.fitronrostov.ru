<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="category-page_f_store" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$params['category']->id}}" disabled>
    </div>
    <div class="form-group">
        <label for="name">Наименование</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$params['category']->name}}">
    </div>
    <div class="form-group">
        <label for="short">Короткое наименование</label>
        <input type="text" class="form-control" id="short" name="short" value="{{$params['category']->short}}">
    </div>
    <input id="image" type="file" name="image" multiple="multiple">
    <div id="preview"><img src="{{$params['category']->image}}"></div>
    <div class="form-group">
        <label for="description">Полное описание</label>
        <textarea class="form-control" id="description" name="description">{{$params['category']->description}}</textarea>
    </div>
    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url" value="{{$params['category']->url}}">
    </div>
    <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" name="sort" value="{{$params['category']->sort}}">
    </div>
    <button type="button" class="btn btn-default" data-toggle="collapse" data-target="#categories-page_seo" style="margin-bottom: 15px;">Seo тексты</button>
    <div id="categories-page_seo" class="collapse">
    <div class="form-group">
        <label for="seo_h1">Seo H1</label>
        <input type="text" class="form-control" id="seo_h1" name="seo_h1" value="{{$params['category']->seo_h1}}">
    </div>
    <div class="form-group">
        <label for="seo_title">Seo Title</label>
        <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{$params['category']->seo_title}}">
    </div>
    <div class="form-group">
        <label for="seo_keywords">Seo Keywords</label>
        <input type="text" class="form-control" id="seo_keywords" name="seo_keywords" value="{{$params['category']->seo_keywords}}">
    </div>
    <div class="form-group">
        <label for="seo_description">Seo Description</label>
        <textarea class="form-control" id="seo_description" name="seo_description">{{$params['category']->seo_description}}</textarea>
    </div>
    </div>
    <div class="form-group">
        <label for="created_at">Создан</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{$params['category']->created_at}}" disabled>
    </div>
    <div class="form-group">
        <label for="updated_at">Изменен</label>
        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$params['category']->updated_at}}" disabled>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="category-page_b_canchel" class="btn btn-default">Отменить</button>
    </div>
</form>


<script>
    (function() {
        var inpElem = document.getElementById('image'),
            divElem = document.getElementById('preview');
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
        document.querySelector('#category-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            document.querySelector('#description').innerHTML = CKEDITOR.instances['description'].getData();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/categories/{{$params['category']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#category-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/categories/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
    var editor = CKEDITOR.replace( 'description' );
</script>