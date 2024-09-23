@props(['error', 'formText' => ''])

<textarea {{ $attributes->merge(['class' => 'w-full']) }}></textarea>
@error("$error")
    <x-lms.form.form-error error="{{ $error }}" />
@else
    {{-- <x-lms.form.form-text text="{{ $formText }}" /> --}}
    <div>
        {{ $formText }}
    </div>
@enderror
