<x-app-layout>
    <x-top value="61" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.12. 担当者の対応は *</x-slot>
            <x-input-error name="answer.about_staff" />

            <x-checkbox type="radio" name="answer[about_staff]" value="満足している" id="check0" str="満足している" key="about_staff" imgpath="" />
            <x-checkbox type="radio" name="answer[about_staff]" value="やや満足している" id="check1" str="やや満足している" key="about_staff" imgpath="" />
            <x-checkbox type="radio" name="answer[about_staff]" value="どちらともいえない" id="check2" str="どちらともいえない" key="about_staff" imgpath="" />
            <x-checkbox type="radio" name="answer[about_staff]" value="あまり満足していない" id="check3" str="あまり満足していない" key="about_staff" imgpath="" />
            <x-checkbox type="radio" name="answer[about_staff]" value="満足していない" id="check4" str="満足していない" key="about_staff" imgpath="" />
        </x-form-group>

        <input type="hidden" name="next" value="form9">

        <x-prev-next-buttons prev='form7' />

    </form>
</x-app-layout>