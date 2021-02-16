<x-app-layout>
    <x-top value="53" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.11. コメントシート作成や写真の送付方法は *</x-slot>
            <x-input-error name="answer.about_sending" />

            <x-checkbox type="radio" name="answer[about_sending]" value="わかりやすい" id="check0" str="わかりやすい" key="about_sending" imgpath="" />
            <x-checkbox type="radio" name="answer[about_sending]" value="ややわかりやすい" id="check1" str="ややわかりやすい" key="about_sending" imgpath="" />
            <x-checkbox type="radio" name="answer[about_sending]" value="どちらともいえない" id="check2" str="どちらともいえない" key="about_sending" imgpath="" />
            <x-checkbox type="radio" name="answer[about_sending]" value="ややわかりにくい" id="check3" str="ややわかりにくい" key="about_sending" imgpath="" />
            <x-checkbox type="radio" name="answer[about_sending]" value="わかりにくい" id="check4" str="わかりにくい" key="about_sending" imgpath="" />
        </x-form-group>

        <input type="hidden" name="next" value="form8">

        <x-prev-next-buttons prev='form6' />

    </form>
</x-app-layout>
