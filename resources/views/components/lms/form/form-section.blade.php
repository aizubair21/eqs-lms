@props(['left' => 'col-md-4', 'right' => 'col-md-8'])

<div {{ $attributes->merge(['class' => 'row justify-content-between align-items-start m-0 p-2 my-2']) }}>
    <div class="{{ $left }}">
        <x-lms.form.label>
            {{ $left_content }}
        </x-lms.form.label>
    </div>
    <div class="{{ $right }}">
        {{ $right_content }}
    </div>
</div>
