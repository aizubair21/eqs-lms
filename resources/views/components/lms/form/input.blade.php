@props(['error', 'type' => 'text', 'formText' => ''])

<input {{ $attributes->merge(['class' => 'w-full']) }} type="{{ $type }}">
@error("$error")
    <x-lms.form.form-error error="{{ $error }}" />
@else
    {{-- <x-lms.form.form-text text="{{ $formText }}" /> --}}
    <div>
        {{ $formText }}
    </div>
@enderror
