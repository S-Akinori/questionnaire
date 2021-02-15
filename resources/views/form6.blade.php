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

            <x-checkbox type="radio" name="answer[about_homepage]" value="わかりやすい" id="check0" str="わかりやすい" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="ややわかりやすい" id="check1" str="ややわかりやすい" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="どちらともいえない" id="check2" str="どちらともいえない" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="ややわかりにくい" id="check3" str="ややわかりにくい" />
            <x-checkbox type="radio" name="answer[about_homepage]" value="わかりにくい" id="check4" str="わかりにくい" />
        </x-form-group>

        <input type="hidden" name="next" value="form7">

        <div class="flex justify-content-between mb-3">
            <x-back-link-button view="form5" />
            <x-button />
        </div>
    </form>
</x-app-layout>
