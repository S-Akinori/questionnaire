@if ($imgpath)
<div class="form-check-container mt-3 mb-5">
    <div class="d-flex">
        <input 
            type="{{$type}}" 
            name="{{$name}}" 
            id="{{$id}}" 
            value="{{$value}}" 
            class="form-check-input me-3"
            @if ($type == 'checkbox')
                @if (session($key) !== null && in_array($str, array_column(session($key), 'name'))) checked @endif
            @else
                required
                @if (session($key) !== null && session($key) == $str) checked @endif
            @endif
        />
        <p>{{$str}}</p>
    </div>
    <div class="label-container">
        <label class="form-check-label" for="{{$id}}">
            <div class="img-container">
                <img src="{{$imgpath}}" alt="{{$str}}">
            </div>
        </label>
    </div>
    {{$slot}}
</div>
@else
<div class="form-check-container d-flex align-items-center mt-3 mb-5">
    <input 
        type="{{$type}}" 
        name="{{$name}}" 
        id="{{$id}}" 
        value="{{$value}}" 
        class="form-check-input mx-3" 
        @if ($type == 'checkbox')
            @if (session($key) !== null && in_array($str, array_column(session($key), 'name'))) checked @endif
        @else
            required
            @if (session($key) !== null && session($key) == $str) checked @endif
        @endif
    />
    <label class="form-check-label" for="{{$id}}">
        <p class="m-0">{{$str}}</p>
    </label>
    {{$slot}}
</div>
@endif
