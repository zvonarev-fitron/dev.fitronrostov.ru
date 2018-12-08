<form id="sliders-page_f_store" action="{{route('sliders.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;">
    @csrf
    <div class="form-group">
        <label for="name">Наименование</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="address">Код</label>
        <input type="text" class="form-control" id="code" name="code">
    </div>
    <button type="submit" class="btn btn-default">Сохранить</button>
    <button id="sliders-page_b_canchel" class="btn btn-default">Отменить</button>
</form>
<script>
    (function(){
        document.querySelector('#sliders-page_f_store').addEventListener('submit', function(event){
            var data = new FormData(this);
            FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
        document.querySelector('#sliders-page_b_canchel').addEventListener('click', function(event){
            FTAdmin.AjaxSend('GET', '/admin/sliders', '', FTAdmin.res.content.el);
            event.preventDefault();
            return false;
        });
    })();
</script>