@if ($wire_error = session()->get('wire_error')[0] ?? '')
    {{ $wire_error }}
    @switch($wire_error['status'])
        @case('success')
            <div>
                Success
            </div>
        @break

        @case('warning')
            <div>
                Warning
            </div>
        @break

        @default
            <div>
                Info
            </div>
    @endswitch
@endif
