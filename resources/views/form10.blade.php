<x-app-layout>
    <x-top value="76" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.14. 当店を利用された感想をお聞かせください。 *</x-slot>
            <x-input-error name="answer.thoughts_service.textarea" />

            <x-textarea name="answer[thoughts_service][textarea]">
                <p>100文字以上でお願いします</p>
            </x-textarea>
        </x-form-group>

        <input type="hidden" name="next" value="form11">

        <div class="flex justify-content-between mb-3">
            <x-back-link-button view="form9" />
            <x-button />
        </div>
    </form>
</x-app-layout>