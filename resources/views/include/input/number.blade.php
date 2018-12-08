<div class="form-group">
    <label for="{{$name}}">{{$slot}}</label>
    <input type="number" class="form-control" name="{{$name}}" id="{{$name}}"
        @isset($value)
           value="{{$value}}"
        @endisset
        @isset($disabled)
           {{($disabled ? 'disabled' : '')}}
        @endisset
        @isset($style)
           style="{{$style}}"
        @endisset
        @isset($min)
           min="{{$min}}"
        @endisset
        @isset($max)
           max="{{$max}}"
        @endisset
    >
</div>