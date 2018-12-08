<div class="form-group">
    <label for="{{$name}}">{{$slot}}</label>
    <input type="password" class="form-control" name="{{$name}}" id="{{$name}}"
           @isset($value)
           value="{{$value}}"
           @endisset
           @isset($disabled)
           {{($disabled ? 'disabled' : '')}}
           @endisset
           @isset($style)
           style="{{$style}}"
            @endisset
    >
</div>