<x-app-layout>
    <x-top value="53" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.11. コメントシート作成や写真の送付方法は <span class="text-danger">*</span></x-slot>
            <x-input-error name="answer" />

            <x-checkbox type="radio" name="answer[about_sending]" value="わかりやすい" id="check0" str="わかりやすい" imgpath="" checked="{{true}}" />
            <x-checkbox type="radio" name="answer[about_sending]" value="ややわかりやすい" id="check1" str="ややわかりやすい" imgpath="" checked="{{(session('about_sending') == 'ややわかりやすい') }}" />
            <x-checkbox type="radio" name="answer[about_sending]" value="どちらともいえない" id="check2" str="どちらともいえない" imgpath="" checked="{{(session('about_sending') == 'どちらともいえない') }}" />
            <x-checkbox type="radio" name="answer[about_sending]" value="ややわかりにくい" id="check3" str="ややわかりにくい" imgpath="" checked="{{(session('about_sending') == 'ややわかりにくい') }}" />
            <x-checkbox type="radio" name="answer[about_sending]" value="わかりにくい" id="check4" str="わかりにくい" imgpath="" checked="{{(session('about_sending') == 'わかりにくい') }}" />
        </x-form-group>

        <input type="hidden" name="next" value="form8">

        <x-prev-next-buttons prev='form6' />

    </form>
</x-app-layout>
