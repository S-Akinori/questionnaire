<x-app-layout>
    <x-top value="86" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.15. 制作されたムービーを上映した後、周りの反応は如何でしたか? *</x-slot>
            <x-input-error name="answer.thoughts_movie.textarea" />

            <x-textarea name="answer[thoughts_movie][textarea]">
                <p>100文字以上でお願いします</p>
            </x-textarea>
        </x-form-group>

        <input type="hidden" name="next" value="form12">

        <div class="flex justify-content-between mb-3">
            <x-back-link-button view="form10" />
            <x-button />
        </div>
    </form>
</x-app-layout>