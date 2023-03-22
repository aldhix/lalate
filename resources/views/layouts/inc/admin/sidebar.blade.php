<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <x-sidebar-brand href="/" :logo="config('admin.logo')" :name="config('app.name')" />
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-flat text-sm" data-widget="treeview" role="menu" data-accordion="false">
               @foreach ( config('admin.sidebar') as $menu)
                   @if (isset($menu['submenu']))
                    <x-sidebar-treeview
                        :name="$menu['name']"
                        :icon="$menu['icon']"
                        :submenu="$menu['submenu']"
                    />
                   @else
                    <x-sidebar-navitem
                    :name="$menu['name']"
                    :icon="$menu['icon']"
                    :routes="$menu['routes']"
                    />
                   @endif
               @endforeach
            </ul>
        </nav>
    </div>
</aside>