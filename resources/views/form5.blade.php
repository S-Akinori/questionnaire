<x-app-layout>
    <x-top value="38" />

    <x-error>
        入力にエラーがあります。
    </x-error>

    <form action="{{route('form.getData')}}" method="POST" id="form">
        @csrf
        <x-form-group>
            <x-slot name="title">Q.9. Lcmアトリエを知ったきっかけは <span class="text-danger">*</span></x-slot>
            <input type="hidden" name="answer[way_to_get_info][check]" value="true" >
            <x-input-error name="answer.way_to_get_info.0" />

            <x-checkbox type="checkbox" name="answer[way_to_get_info][]" id="check0" value="ネット検索（Google、Yahoo!など）" str="ネット検索（Google、Yahoo!など）" imgpath="" checked="{{in_array('ネット検索（Google、Yahoo!など）', $old)}}" />
            <x-checkbox type="checkbox" name="answer[way_to_get_info][]" id="check1" value="Instagram" str="Instagram" imgpath="" checked="{{in_array('Instagram', $old)}}" />
            <x-checkbox type="checkbox" name="answer[way_to_get_info][]" id="check2" value="Facebook" str="Facebook" imgpath="" checked="{{in_array('Facebook', $old)}}" />
            <x-checkbox type="checkbox" name="answer[way_to_get_info][]" id="check3" value="YouTube" str="YouTube" imgpath="" checked="{{in_array('YouTube', $old)}}" />
            <x-checkbox type="checkbox" name="answer[way_to_get_info][]" id="other" value="その他" str="その他" imgpath="" checked="{{array_key_exists('その他', $old)}}">
                <input type="text" id="otherInput" class="input-form form-control form-control-sm" value="{{isset($old['その他']) ? $old['その他'] : ''}}" />
            </x-checkbox>
        </x-form-group>

        <input type="hidden" name="next" value="form6">

        <x-prev-next-buttons prev='form4' />
    </form>
</x-app-layout>
