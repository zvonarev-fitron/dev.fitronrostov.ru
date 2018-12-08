<div class="custom-control custom-checkbox"
     @isset($style)
        style="{{$style}}"
     @endisset
>
    <input type="checkbox" class="custom-control-input" name="{{$name}}" id="checkbox_active_{{$id}}"
        @isset($checked)
            {{($checked ? 'checked' : '')}}
        @endisset
        @isset($disabled)
            {{($disabled ? 'disabled' : '')}}
        @endisset
    >
    <label class="custom-control-label" for="checkbox_active_{{$id}}">
        @isset($slot)
            {{$slot}}
        @endisset
    </label>
</div>