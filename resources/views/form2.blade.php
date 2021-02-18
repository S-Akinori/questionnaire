<x-app-layout>
    <x-top value="15" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.6. ご購入いただいた商品をお知らせください。<br>【プロフィールムービー】 *</x-slot>

            <x-input-error name="answer.profile_movie.0" />

            <input type="hidden" name="answer[profile_movie][check]" value="true" >

            <div class="row">
            @for ($i = 0; $i < count($profile_movie_value); $i++)
                <div class="col-6">
                    <x-checkbox 
                        type="checkbox"
                        name="answer[profile_movie][]" 
                        id="heck{{$i}}"
                        value="{!! json_encode($profile_movie_value[$i], JSON_UNESCAPED_UNICODE) !!}"
                        str="{!! $profile_movie_value[$i]['name'] !!}" 
                        imgpath="{{$profile_movie_value[$i]['img_path']}}"
                        checked="{{in_array($profile_movie_value[$i]['name'], $old)}}"
                    />
                </div>
            @endfor
            </div>

        </x-form-group>

        <input type="hidden" name="next" value="form3">

        <x-prev-next-buttons prev='form1' />

    </form>
</x-app-layout>
