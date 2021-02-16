<div {{$attributes->merge(['class'=> 'form-group mb-5'])}}>
    @if (isset($title))
    <div class="title"><p>{{$title}}</p></div>
    @endif
        
    {{$slot}}
</div>