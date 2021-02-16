<x-app-layout>
    <x-top value="46" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.10. ホームページのわかりやすさは *</x-slot>
            <x-input-error name="answer.about_homepage" />

            <x-checkbox type="radio" name="answer[about_homepage]" value="わかりやすい" id="check0" str="わかりやすい" key="about_homepage" img_path="" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="ややわかりやすい" id="check1" str="ややわかりやすい" key="about_homepage" img_path="" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="どちらともいえない" id="check2" str="どちらともいえない" key="about_homepage" img_path="" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="ややわかりにくい" id="check3" str="ややわかりにくい" key="about_homepage" img_path="" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="わかりにくい" id="check4" str="わかりにくい" key="about_homepage" img_path="" />
        </x-form-group>

        <input type="hidden" name="next" value="form7">

        <x-prev-next-buttons prev='form5' />
        
    </form>
</x-app-layout>
