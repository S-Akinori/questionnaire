<x-app-layout>

    <x-top value="7" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.1 ご注文時のお名前をお知らせください。 *</x-slot>
            <x-input type="text" name="answer[name]" value="{{ session('name') ? session('name') : old('answer.name')}}"/>
            <x-input-error name="answer.name" />
        </x-form-group>
        <x-form-group>
            <x-slot name="title">Q.2. 挙式日をお知らせください。 *</x-slot>
            <div class="d-flex">
                <div class="d-flex mx-2 align-items-end">
                    <select name="year" id="year" class="form-select">
                        @if ($old_date[0] > 0 || old('year'))
                            @for ($i = 0; $i < 3; $i++)
                                @if ($date[0] - $i == $old_date[0] || $date[0] - $i == old('year'))
                                <option selected>{{$date[0] - $i}}</option>
                                @else
                                <option>{{$date[0] - $i}}</option>
                                @endif
                            @endfor
                        @else
                            @for ($i = 0; $i < 3; $i++)
                                @if ($i == 0)
                                <option selected>{{$date[0] - $i}}</option>
                                @else
                                <option>{{$date[0] - $i}}</option>
                                @endif
                            @endfor
                        @endif
                    </select>
                    <p class="m-0">年</p>
                </div>
                <div class="d-flex mx-2 align-items-end">
                    <select name="month" id="month" class="form-select">
                    @if ($old_date[1] > 0 || old('month'))
                        @for ($i = 0; $i < 12; $i++)
                            @if ($i + 1 == $old_date[1] || $i + 1 == old('month'))
                            <option selected>{{$i + 1}}</option>
                            @else
                            <option>{{$i + 1}}</option>
                            @endif
                        @endfor
                    @else
                        @for ($i = 0; $i < 12; $i++)
                            @if ($i == 0)
                            <option selected>{{$i + 1}}</option>
                            @else
                            <option>{{$i + 1}}</option>
                            @endif
                        @endfor
                    @endif
                    </select>
                    月
                </div>
                <div class="d-flex mx-2 align-items-end">
                    <select name="date" id="date" class="form-select">
                    @if ($old_date[2] > 0 || old('date'))
                        @for ($i = 0; $i < 31; $i++)
                            @if ($i + 1 == $old_date[2] || $i + 1 == old('date'))
                            <option selected>{{$i + 1}}</option>
                            @else
                            <option>{{$i + 1}}</option>
                            @endif
                        @endfor
                    @else
                        @for ($i = 0; $i < 31; $i++)
                            @if ($i == 0)
                            <option selected>{{$i + 1}}</option>
                            @else
                            <option>{{$i + 1}}</option>
                            @endif
                        @endfor
                    @endif
                    </select>
                    日
                </div>
            </div>
            <x-input type="hidden" name="answer[date]" id="theDate" ></x-input>
            <x-input-error name="answer.date" />
        </x-form-group>

        <x-form-group>
            <x-slot name="title">Q.3. 披露宴会場名をお知らせください。*</x-slot>
            <x-input type="text" name="answer[venue]" value="{{ session('venue') ? session('venue') : old('answer.venue')}}"/>
            <x-input-error name="answer.venue" />
        </x-form-group>

        <x-form-group>
            <x-slot name="title">Q.4. 会場の都道府県をお知らせください。 *</x-slot>
            <select name="answer[place]" id="placeSelect" class="form-select">
                @for ($i = 0; $i < count($places); $i++)
                    @if (session('place') || old('answer.place'))
                        @if ($places[$i] == session('place') || $places[$i] == old('answer.place'))
                        <option selected>{{$places[$i]}}</option>
                        @else
                        <option>{{$places[$i]}}</option>
                        @endif
                    @else                        
                        @if ($i == 0)
                        <option selected>{{$places[$i]}}</option>
                        @else
                        <option>{{$places[$i]}}</option>
                        @endif
                    @endif
                @endfor
            </select>
            <x-input-error name="answer.place" />
        </x-form-group>

        <x-form-group>
            <x-slot name="title">Q.5. メールアドレスを入力してください。 *</x-slot>
            <p>入力に誤りがある場合は、Amazonギフト券番号のお知らせができませんのでご注意ください。</p>
            <x-input type="email" name="answer[email][]" class="my-2" value="" />
            <x-input-error name="answer.email.0" />
        </x-form-group>
        <x-form-group>
            <p>確認のため、もう一度入力してください</p>
            <x-input type="email" name="answer[email][]" />
        </x-form-group>

        <input type="hidden" name="next" value="form2">

        <div class="flex justify-content-end">
            <button type="submit" class="btn btn-next mr-3">次へ</button>
        </div>

    </form>
</x-app-layout>