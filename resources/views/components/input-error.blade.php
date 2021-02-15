@props(['name'])

@error($name)
<p class="text-danger ml-2">{{$message}}</p>
@enderror