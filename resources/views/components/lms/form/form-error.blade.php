@props(['error'])
@error($error)
    <div>
        <strong class="text-red ps-2">  {{ $message }}</strong>
    </div>
@enderror
