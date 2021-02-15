<div class="form-check-container mt-3 mb-5">
    <input 
        type="{{$type}}" 
        name="{{$name}}" 
        id="{{$id}}" 
        value="{{$value}}" 
        class="form-check-input mx-3" 
        @if (session($key) == $str)
            checked
        @endif
    />
    <label class="form-check-label" for="{{$id}}">
        <p @if(!$imgpath) class="m-0" @endif>{{$str}}</p>
        
        @if ($imgpath)
            <img src="{{$imgpath}}" alt="{{$str}}">
            
        @endif
    </label>
    {{$slot}}
</div>