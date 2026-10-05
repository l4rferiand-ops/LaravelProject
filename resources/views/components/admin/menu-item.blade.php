@props(['href', 'label', 'icon'])

@php
    // Mengecek apakah URL saat ini sama dengan tautan menu
    $active = request()->fullUrl() == $href || request()->is(trim($href, '/'));
@endphp

<a href="{{ $href }}"
    class="flex items-center p-2 text-base font-medium rounded-lg transition-colors duration-150 group
    {{ $active
        ? 'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white font-semibold'
        : 'text-gray-500 hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700' }}">

    {!! $icon !!}

    <span class="ml-3">{{ $label }}</span>
</a>
