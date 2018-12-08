<div style="margin-left: 10px; margin-right: 10px;">
    <form method="POST" action="" id="page-page_f_edit">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id">Id</label>
            <input type="text" class="form-control" name="id" id="id" value="{{$params['page']->id}}" disabled>
        </div>
        <div class="form-group">
            <label for="code">Код</label>
            <input type="text" class="form-control" name="code" id="code" value="{{$params['page']->code}}">
        </div>
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$params['page']->title}}">
        </div>
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$params['page']->name}}">
        </div>
        <div class="form-group">
            <label for="menu">Меню</label>
            <input type="text" name="menu" class="form-control" id="menu" value="{{$params['page']->menu}}">
        </div>
        <div class="form-group">
            <label for="trek">Ссылка на внешний ресурс</label>
            <input type="text" name="trek" class="form-control" id="trek" value="{{$params['page']->trek}}">
        </div>
        @include('include.input.checkbox', ['id' => $params['page']->id, 'name' => 'active', 'slot' => 'Статус', 'checked' => $params['page']->active])
        <div class="form-group">
            <label for="sort">Сортировка</label>
            <input type="text" name="sort" class="form-control" id="sort" value="{{$params['page']->sort}}">
        </div>
        <div class="form-group">
            <label for="created_at">Создан</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="{{$params['page']->created_at}}" disabled>
        </div>
        <div class="form-group">
            <label for="updated_at">Изменен</label>
            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{$params['page']->updated_at}}" disabled>
        </div>
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="page-page_b_canchel" class="btn btn-default">Отменить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#page-page_f_edit').addEventListener('submit', function(event){
            event.stopPropagation();
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), '/admin/pages/{{$params['page']->id}}/', data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#page-page_b_canchel').addEventListener('click', function(event){
            event.stopPropagation();
            FTAdmin.AjaxSend('GET', '/admin/pages/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>

