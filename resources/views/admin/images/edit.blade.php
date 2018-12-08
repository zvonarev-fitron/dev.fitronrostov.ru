<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="images-page_f_store" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="slider_id" value="{{$params['image']->slider_id}}" id="images-page_slider_id">
    <input type="hidden" name="old_image" value="{{$params['image']->image}}">
    <input id="upload" type="file" name="upload" multiple="multiple">
    <div id="preview"><img src="{{$params['image']->image}}"></div>
    <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$params['image']->id}}" disabled>
    </div>
    <div class="form-group">
        <label for="url">Ссылка</label>
        <input type="text" class="form-control" id="url" name="url" value="{{$params['image']->url}}">
    </div>
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$params['image']->title}}">
    </div>
    <div class="form-group">
        <label for="text">Текст</label>
        <textarea class="form-control" id="text" name="text">{{$params['image']->text}}</textarea>
    </div>
    @include('include.input.date', ['slot' => 'Начало активности', 'name' => 'start_time'])
    @include('include.input.date', ['slot' => 'Конец активности', 'name' => 'end_time'])
    <div class="form-group">
        <div class="custom-control custom-checkbox images-page_div_active">
            <input type="checkbox" name="active" class="custom-control-input" id="images-page_checkbox_active_{{$params['image']->id}}" <?=($params['image']->active ? 'checked' : '');?>>
            <label class="custom-control-label" for="images-page_checkbox_active_{{$params['image']->id}}">Статус</label>
        </div>
    </div>
    <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" name="sort" value="{{$params['image']->sort}}">
    </div>
    <div class="form-group">
        <label for="created_at">Создан</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{$params['image']->created_at}}" disabled>
    </div>
    <div class="form-group">
        <label for="updated_at">Изменен</label>
        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$params['image']->updated_at}}" disabled>
    </div>
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="images-page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function() {
        var inpElem = document.getElementById('upload'),
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
        document.querySelector('#images-page_f_store').addEventListener('submit', function(event){
            document.querySelector('#images-page_slider_id').value = FTAdmin.select_table.slider;
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/images/{{$params['image']->id}}/', data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#images-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/images/' + FTAdmin.select_table.slider + '/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>
