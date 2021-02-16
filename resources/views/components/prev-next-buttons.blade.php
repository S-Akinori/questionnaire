@if (!session('is_confirmation_page'))
<div class="flex justify-content-between mb-3">
    <x-back-link-button view="{{$prev}}" />
    <x-button/>
</div>
@else
<div class="flex justify-content-end mb-3">
    <x-button/>
</div>
@endif