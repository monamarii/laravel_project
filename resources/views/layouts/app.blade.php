@php
    $title = $title ?? config('app.name', 'Laravel');
@endphp

<x-layout :title="$title">
    @hasSection('content')
        @yield('content')
    @else
        {{ $slot ?? '' }}
    @endif
</x-layout>
