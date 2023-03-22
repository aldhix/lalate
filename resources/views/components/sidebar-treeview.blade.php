@props(['name','icon','submenu'])
@php
    $routes = [];
    foreach ($submenu as $menu) {
        foreach ($menu['routes'] as $value) {
            $routes[] = $value;
        }
    }
    $cur = \Route::currentRouteName();
    $active = in_array($cur, $routes) ? ' active' : '';
@endphp
<li class="nav-item menu-open">
    <a href="#" class="nav-link{{ $active }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $name }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: block;">
        @foreach ($submenu as $menu)
        <x-sidebar-navitem :name="$menu['name']" icon="far fa-circle" :routes="$menu['routes']" />
        @endforeach   
    </ul>
</li>