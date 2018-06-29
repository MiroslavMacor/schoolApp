

        @php
        Menu::create('navbar', function($menu) {
        $menu->url('/', 'Home');
        $menu->dropdown('Sites', function ($sub) {
        $sub->url('trips', 'Trips');
        $sub->url('/users', 'Users');
        });
        });
        @endphp

