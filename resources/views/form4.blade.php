<x-app-layout>
    <x-top value="30" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.8. ご購入いただいた商品をお知らせください。<br>【エンドロールムービー】 *</x-slot>

            <input type="hidden" name="answer[ending_movie][check]" value="true" >

            <x-input-error name="answer.ending_movie.0" />

            <div class="row">
            @for ($i = 0; $i < count($ending_movie_value); $i++)
            <div class="col-6">
                <x-checkbox 
                    name="answer[ending_movie][]" 
                    id="check{{$i}}" 
                    value="{!! json_encode($ending_movie_value[$i], JSON_UNESCAPED_UNICODE) !!}"
                    str="{!! $ending_movie_value[$i]['name'] !!}" 
                    imgpath="{{$ending_movie_value[$i]['img_path']}}"
                    key="ending_movie"
                />
            </div>
            @endfor
            </div>

        </x-form-group>

        <input type="hidden" name="next" value="form5">

        <x-prev-next-buttons prev='form3' />

    </form>
</x-app-layout>
