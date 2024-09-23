@props(['thead'])
{{-- @@props(['thead']) --}}
<thead>
    <tr class="bordered border-bottom">
        @isset($thead)
            @php
                print_r($thead);
            @endphp
            @foreach ($thead as $thi)
                <x-table.th>{{ $thi }}</x-table.th>
            @endforeach
        @endisset
    </tr>
</thead>
