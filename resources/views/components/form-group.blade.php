<div {{$attributes->merge(['class'=> 'form-group my-3'])}}>
    <div class="title"><p>{{$title}}</p></div>
    {{$slot}}
</div>