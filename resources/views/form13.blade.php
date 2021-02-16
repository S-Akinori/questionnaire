<x-app-layout>
    <x-top value="100" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form" enctype="multipart/form-data">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.17. 披露宴の写真をアップロードしてください(2枚)。 *</x-slot>
            <p>【1枚目】</p>
            <x-input-error name="answer.photo_1.file" />
            
            <input type="file" name="answer[photo_1][file]" id="file1" class="hidden", accept=".jpg, .png">
            <div id="preview1" class="hidden my-3 preview"></div>
            <div id="selectFileButton1" class="btn btn-primary">ファイル選択</div>
            <div id="deleteFileButton1" class="btn btn-secondary hidden">ファイル削除</div>
        </x-form-group>

        <x-form-group>
            <p>【2枚目】</p>
            <x-input-error name="answer.photo_2.file" />

            <input type="file" name="answer[photo_2][file]" id="file2" class="hidden", accept=".jpg, .png">
            <div id="preview2" class="hidden my-3 preview"></div>
            <div id="selectFileButton2" class="btn btn-primary">ファイル選択</div>
            <div id="deleteFileButton2" class="btn btn-secondary hidden">ファイル削除</div>
        </x-form-group>

        <input type="hidden" name="next" value="confirmation">

        <x-prev-next-buttons prev='form12' />
    </form>
</x-app-layout>