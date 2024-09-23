@props([
    'header' => '',
    'body' => 'card-body',
    'footer' => '',
])

<div {{ $attributes->merge(['class' => 'card mb-4 rounded border-1 bg_brand_lightgray', 'style']) }}
    x-data="{ isShow: true }">
    <div class=" car-header bg-light d-flex justify-content-between align-items-center py-2 px-3 border-bottom {{ $header }}"
        x-on:click="isShow = !isShow">

        {{ $card_header }}

        <div>
            <i x-show="!isShow" class="text_dark font-medium fas fa-caret-right"></i>
            <i x-show="isShow" class="text_dark font-medium fas fa-caret-down"></i>
        </div>

    </div>

    <div class="{{ $body }}" x-show="isShow" x-transition>
        {{ $card_body }}
    </div>

    <div class="{{ $footer }}">
        {{ $card_footer ?? '' }}
    </div>

</div>
