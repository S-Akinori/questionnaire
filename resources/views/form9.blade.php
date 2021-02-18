<x-app-layout>
    <x-top value="69" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.13. 総合的な満足度は *</x-slot>
            <x-input-error name="answer" />
            
            <x-checkbox type="radio" name="answer[about_all]" value="満足している" id="check0" str="満足している" imgpath="" checked="{{true}}" />
            <x-checkbox type="radio" name="answer[about_all]" value="やや満足している" id="check1" str="やや満足している" imgpath="" checked="{{(session('about_all') == 'やや満足している') }}" />
            <x-checkbox type="radio" name="answer[about_all]" value="どちらともいえない" id="check2" str="どちらともいえない" imgpath="" checked="{{(session('about_all') == 'どちらともいえない') }}" />
            <x-checkbox type="radio" name="answer[about_all]" value="あまり満足していない" id="check3" str="あまり満足していない" imgpath="" checked="{{(session('about_all') == 'あまり満足していない') }}" />
            <x-checkbox type="radio" name="answer[about_all]" value="満足していない" id="check4" str="満足していない" imgpath="" checked="{{(session('about_all') == '満足していない') }}" />
        </x-form-group>

        <input type="hidden" name="next" value="form10">

        <x-prev-next-buttons prev='form8' />

    </form>
</x-app-layout>