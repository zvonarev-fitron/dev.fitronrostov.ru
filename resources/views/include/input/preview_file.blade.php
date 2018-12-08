<div class="form-group">
@isset($slot)
    <label for="{{$name}}">{{$slot}}</label>
@endisset
    <input id="{{$name}}" type="file" name="{{$name}}" class="form-control border-0" multiple="multiple"/>
    <div id="{{$name}}_pre_view" class="preview_file">
    @isset($value)
        <img src="{{$value}}">
    @endisset
</div>
</div>
<script>
    (function() {
        var inpElem = document.getElementById('{{$name}}'), divElem = document.getElementById('{{$name}}_pre_view');
        inpElem.addEventListener("change", function(e){preview(this.files[0]);});
        function preview(file) {
            if(file.type.match(/image.*/)){
                var reader = new FileReader(), img;
                reader.addEventListener("load", function(event) {img = document.createElement('img');img.src = event.target.result;divElem.innerHTML = '';divElem.appendChild(img);});
                reader.readAsDataURL(file);
            }
        }
    })();
</script>