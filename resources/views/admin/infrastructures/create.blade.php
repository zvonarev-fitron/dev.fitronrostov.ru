<style>
    #preview img {
        width: 1000px;
        height: 556px;
    }
</style>
<form id="infrastructures-page_f_store" action="{{route('infrastructures.store')}}" method="POST" style="margin-left: 10px; margin-right: 10px;" enctype="multipart/form-data">
    @csrf
    <input type="hidden" id="infrastructures-page_club_id" name="club_id" value="0">
    <input id="image" type="file" name="image" multiple="multiple"/>
    <div id="pre_view"></div>
    <div class="form-group">
        <label for="sort">Сортировка</label>
        <input type="text" class="form-control" id="sort" name="sort">
    </div>
    <div class="form-group">
        <label for="text">Текст</label>
        <textarea class="form-control" id="text" name="text"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Сохранить</button>
        <button id="infrastructures-page_b_canchel" class="btn btn-default">Отменить</button>
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
        document.querySelector('#infrastructures-page_f_store').addEventListener('submit', function(event){
            event.preventDefault();
            if(0 < FTAdmin.select_table.infrastructure_club) {
                document.querySelector('#infrastructures-page_club_id').value = FTAdmin.select_table.infrastructure_club;
                var data = new FormData(this);
                FTAdmin.AjaxSend(this.getAttribute('method'), this.getAttribute('action'), data, FTAdmin.res.content.el);
            }
            return false;
        });
        document.querySelector('#infrastructures-page_b_canchel').addEventListener('click', function(event){
            event.preventDefault();
            if(0 < FTAdmin.select_table.infrastructure_club) {
                FTAdmin.AjaxSend('GET', '/admin/infrastructures/' + FTAdmin.select_table.infrastructure_club + '/', '', FTAdmin.res.content.el);
            }
            return false;
        });
    })();
</script>