<div style="margin-left: 10px; margin-right: 10px;">
    <h2>Новая страница</h2>
    <form method="POST" action="{{route('pages.store')}}" id="page-page_f_store">
        @csrf
        <div class="form-group">
            <label for="inputCode">Код</label>
            <input type="text" class="form-control" name="code" id="inputCode" placeholder="Код страницы">
        </div>
        <div class="form-group">
            <label for="inputTitle">Заголовок</label>
            <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Заголовок страницы">
        </div>
        <div class="form-group">
            <label for="name">Наименование</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Наименование страницы">
        </div>
        <div class="form-group">
            <label for="menu">Меню</label>
            <input type="text" name="menu" class="form-control" id="menu" placeholder="Наименование меню для страницы">
        </div>
        <div class="form-group">
            <label for="trek">Ссылка на внешний ресурс</label>
            <input type="text" name="trek" class="form-control" id="trek" placeholder="Ссылка на внешний ресурс">
        </div>
        <div class="form-group">
            <label for="sort">Сортировка</label>
            <input type="text" name="sort" class="form-control" id="sort" placeholder="Сортировка">
        </div>
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="page-page_b_canchel" class="btn btn-default">Отменить</button>
    </form>
</div>
<script>
    (function(){
        document.querySelector('#page-page_f_store').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#page-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/pages/', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>

