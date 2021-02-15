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

            <x-checkbox type="radio" name="answer[about_staff]" value="満足している" id="check0" str="満足している" />
            <x-checkbox type="radio" name="answer[about_staff]" value="やや満足している" id="check1" str="やや満足している" />
            <x-checkbox type="radio" name="answer[about_staff]" value="どちらともいえない" id="check2" str="どちらともいえない" />
            <x-checkbox type="radio" name="answer[about_staff]" value="あまり満足していない" id="check3" str="あまり満足していない" />
            <x-checkbox type="radio" name="answer[about_staff]" value="満足していない" id="check4" str="満足していない" />
        </x-form-group>

        <input type="hidden" name="next" value="form9">

        <div class="flex justify-content-between mb-3">
            <x-back-link-button view="form7" />
            <x-button />
        </div>

    </form>
</x-app-layout>