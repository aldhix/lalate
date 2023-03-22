@props(['name','icon','routes'])
@php
    $cur = \Route::currentRouteName();
    $active = in_array($cur, $routes) ? ' active' : '';
@endphp
<li class="nav-item">
    <a class="nav-link{{ $active}}" href="{{ route($routes[0]) }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $name }}
        </p>
    </a>
</li>