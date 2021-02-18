<x-app-layout>
    <x-top value="92" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.16. 改善してほしい点や要望などあればお聞かせください。</x-slot>
            <x-input-error name="answer.opinion.textarea" />

            <x-textarea name="answer[opinion][textarea]">
                <x-slot name="value">{{session('opinion')}}</x-slot>
                <p>100文字以上でお願いします</p>
            </x-textarea>
        </x-form-group>

        <input type="hidden" name="next" value="form13">

        <x-prev-next-buttons prev='form11' />
    </form>
</x-app-layout>