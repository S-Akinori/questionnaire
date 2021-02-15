<x-app-layout>
    <x-top value="23" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.7. ご購入いただいた商品をお知らせください。<br>【オープニングムービー】 *</x-slot>

            <x-input-error name="answer.opening_movie.0" />

            <input type="hidden" name="answer[opening_movie][check]" value="true" >

            @for ($i = 0; $i < count($opening_movie_value); $i++)
            <x-checkbox 
                name="answer[opening_movie][]" 
                id="check{{$i}}" 
                value="{!! json_encode($opening_movie_value[$i], JSON_UNESCAPED_UNICODE) !!}"
                str="{!! $opening_movie_value[$i]['name'] !!}" 
                imgpath="{{$opening_movie_value[$i]['img_path']}}"
                key="opening_movie"
            />
            @endfor

        </x-form-group>

        <input type="hidden" name="next" value="form4">

        <div class="flex justify-content-between mb-3">
            <x-back-link-button view="form2" />
            <x-button />
        </div>

    </form>
</x-app-layout>
