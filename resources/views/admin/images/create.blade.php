<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="images-page_f_store" action="{{route('images.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="slider_id" value="0" id="images-page_slider_id">
    <input id="upload" type="file" name="upload" multiple="multiple"/>
    <div id="preview"></div>
    <div class="form-group">
        <label for="url">Ссылка</label>
        <input type="text" class="form-control" id="url" name="url">
    </div>
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="text">Текст</label>
        <textarea class="form-control" id="text" name="text"></textarea>
    </div>
    @include('include.input.date', ['slot' => 'Начало активности', 'name' => 'start_time'])
    @include('include.input.date', ['slot' => 'Конец активности', 'name' => 'end_time'])
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
             FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
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
