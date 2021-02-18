<x-app-layout>
    <x-top value="100" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form" enctype="multipart/form-data">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.17. 披露宴の写真をアップロードしてください(2枚)。 <span class="text-danger">*</span></x-slot>
            <p>【1枚目】</p>
            <x-input-error name="file.validation.*" />
            <x-input-error name="answer.photo_1.file" />

            <input type="file" name="answer[photo_1][file]" id="file1" class="hidden">
            <input type="hidden" name="file[validation][]" id="fileValid1" value="">

            <div id="preview1" class="my-3 preview @if (!session('photo_1')) hidden @endif">
                <img src="{{session('photo_1')}}" alt="">
            </div>
            
            <div id="selectFileButton1" class="btn btn-primary">ファイル選択</div>
            <div id="deleteFileButton1" class="btn btn-secondary {{ session('photo_1') ? '' : 'hidden'}}">ファイル削除</div>
        </x-form-group>

        <x-form-group>
            <p>【2枚目】</p>
            <x-input-error name="answer.photo_2.file" />

            <input type="file" name="answer[photo_2][file]" id="file2" class="hidden">
            <input type="hidden" name="file[validation][]" id="fileValid2" value="">
            @if (session('photo_2'))
            <div id="preview2" class="my-3 preview">
                <img src="{{session('photo_2')}}" alt="">
            </div>
            @else
            <div id="preview2" class="hidden my-3 preview"></div>
            @endif
            <div id="selectFileButton2" class="btn btn-primary">ファイル選択</div>
            <div id="deleteFileButton2" class="btn btn-secondary {{ session('photo_2') ? '' : 'hidden'}}">ファイル削除</div>
        </x-form-group>

        <input type="hidden" name="next" value="confirmation">

        <x-prev-next-buttons prev='form12' />
    </form>
</x-app-layout>