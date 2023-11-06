@props(['active' => false])

@php
    $class = ($active ?? false)
        ? 'nav-link active'
        : 'nav-link';
@endphp

<li class="nav-item">
    <a wire:navigate {{ $attributes->merge(['class' => $class]) }}>{{ $slot }}</a>
</li>
