<div>
    <textarea {{$attributes->merge(['class'=>'form-control', 'rows'=>'7'])}}>{{$value}}</textarea>
    {{$slot}}
</div>