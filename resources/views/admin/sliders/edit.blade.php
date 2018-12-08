<form id="sliders-page_f_edit" action="{{route('sliders.index')}}" method="POST" style="margin-left: 10px; margin-right: 10px;">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">id</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$params['slider']->id}}" disabled>
    </div>
    <div class="form-group">
        <label for="name">Наименование</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$params['slider']->name}}">
    </div>
    <div class="form-group">
        <label for="cod">Код</label>
        <input type="text" class="form-control" id="cod" name="code" value="{{$params['slider']->code}}">
    </div>
    <div class="form-group">
        <label for="created_at">Создан</label>
        <input type="text" class="form-control" id="created_at" name="created_at" value="{{$params['slider']->created_at}}" disabled>
    </div>
    <div class="form-group">
        <label for="updated_at">Изменен</label>
        <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$params['slider']->updated_at}}" disabled>
    </div>
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="sliders-page_b_canchel" class="btn btn-default">Назад</button>
</form>
<script>
    (function(){
        document.querySelector('#sliders-page_f_edit').addEventListener('submit', function(event){
            event.stopPropagation();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/sliders/{{$params['slider']->id}}/', data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#sliders-page_b_canchel').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/sliders', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>


