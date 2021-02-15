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
                <div class="d-flex">
                    <select name="ans_year" id="year" class="form-select">
                    </select>
                    <p class="m-0">年</p>
                </div>
                <div class="d-flex">
                    <select name="ans_month" id="month" class="form-select">
                    </select>
                    月
                </div>
                <div class="d-flex">
                    <select name="ans_date" id="date" class="form-select">
                    </select>
                    日
                </div>
            </div>
            <x-input type="hidden" name="answer[date]" id="theDate"></x-input>
            <x-input-error name="answer.date" />
        </x-form-group>

        <x-form-group>
            <x-slot name="title">Q.3. 披露宴会場名をお知らせください。*</x-slot>
            <x-input type="text" name="answer[venue]" value="{{ session('venue') ? session('venue') : old('answer.venue')}}"/>
            <x-input-error name="answer.venue" />
        </x-form-group>

        <x-form-group>
            <x-slot name="title">Q.4. 会場の都道府県をお知らせください。 *</x-slot>
            <select name="answer[place]" id="placeSelect" class="form-select" value="{{ session('place') ? session('place') : old('answer.place')}}">
            </select>
            <x-input-error name="answer.place" />
        </x-form-group>

        <x-form-group>
            <x-slot name="title">Q.5. メールアドレスを入力してください。 *</x-slot>
            <p>入力に誤りがある場合は、Amazonギフト券番号のお知らせができませんのでご注意ください。</p>
            <x-input type="email" name="answer[email][]" class="my-2" value="" />
            <p>確認のため、もう一度入力してください</p>
            <x-input type="email" name="answer[email][]" />
            <x-input-error name="answer.email.0" />
        </x-form-group>

        <input type="hidden" name="next" value="form2">

        <div class="flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-3">次へ</button>
        </div>

    </form>
</x-app-layout>