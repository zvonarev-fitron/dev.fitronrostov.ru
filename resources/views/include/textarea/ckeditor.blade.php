<div class="form-group">
    <label for="{{$name}}">{{$slot}}</label>
    <textarea name="{{$name}}" class="form-control" id="{{$name}}">
        @isset($value)
            {{$value}}
        @endisset
    </textarea>
</div>
<script>CKEDITOR.replace('{{$name}}', {filebrowserUploadUrl: '/uploader/upload.php'});</script>