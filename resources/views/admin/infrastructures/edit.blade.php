<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="infrastructures-page_f_store" action="" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="club_id" value="{{$params['infrastructure']->club_id}}">
    <div class="form-group">
        <label for="id">id</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$params['infrastructure']->id}}" disabled>
    </div>
    <input id="image" type="file" name="image" multiple="multiple">
    <div id="pre_view"><img src="{{$params['infrastructure']->image}}"></div>
    <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" name="sort" value="{{$params['infrastructure']->sort}}">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox images-page_div_active">
            <input type="checkbox" name="active" class="custom-control-input" id="trainings-page_checkbox_active_{{$params['infrastructure']->id}}" {{($params['infrastructure']->active ? 'checked' : '')}}>
            <label class="custom-control-label" for="trainings-page_checkbox_active_{{$params['infrastructure']->id}}">Статус</label>
        </div>
    </div>
    <div class="form-group">
        <label for="text">Текст</label>
        <textarea class="form-control" id="text" name="text">{{$params['infrastructure']->text}}</textarea>
    </div>
    <div class="form-group">
        <label for="created_at">Создан</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{$params['infrastructure']->created_at}}" disabled>
    </div>
    <div class="form-group">
        <label for="updated_at">Изменен</label>
        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$params['infrastructure']->updated_at}}" disabled>
    </div>
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="infrastructures-page_b_canchel" class="btn btn-default">Отменить</button>
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
        document.querySelector('#infrastructures-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/infrastructures/{{$params['infrastructure']->id}}/', data, FTAdmin.res.content.el);
            return false;
        });
        document.querySelector('#infrastructures-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            FTAdmin.AjaxSend('GET', '/admin/infrastructures/{{$params['infrastructure']->club_id}}/', '', FTAdmin.res.content.el);
            return false;
        });
    })();
</script>