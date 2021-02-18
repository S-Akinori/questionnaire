<x-app-layout>
    <x-top value="23" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.7. ご購入いただいた商品をお知らせください。<br>【オープニングムービー】<span class="text-danger">*</span></x-slot>

            <x-input-error name="answer.opening_movie.0" />

            <input type="hidden" name="answer[opening_movie][check]" value="true" >

            <div class="row">
            @for ($i = 0; $i < count($opening_movie_value); $i++)
            <div class="col-6">
                <x-checkbox 
                    type="checkbox"
                    name="answer[opening_movie][]" 
                    id="check{{$i}}" 
                    value="{!! json_encode($opening_movie_value[$i], JSON_UNESCAPED_UNICODE) !!}"
                    str="{!! $opening_movie_value[$i]['name'] !!}" 
                    imgpath="{{$opening_movie_value[$i]['img_path']}}"
                    checked="{{in_array($opening_movie_value[$i]['name'], $old)}}"
                />
            </div>
            @endfor
            </div>

        </x-form-group>

        <input type="hidden" name="next" value="form4">

        <x-prev-next-buttons prev='form2' />

    </form>
</x-app-layout>
