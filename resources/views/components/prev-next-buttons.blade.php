@if (!session('is_confirmation_page'))
<div class="flex justify-content-between mb-3 button-group">
    <x-back-link-button view="{{$prev}}" />
    <x-button>次へ</x-button>
</div>
@else
<div class="flex justify-content-end mb-3">
    <x-button>修正</x-button>
</div>
@endif