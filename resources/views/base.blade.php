

        @php
        Menu::create('navbar', function($menu) {
        $menu->url('/', 'Home');
        $menu->dropdown('Sites', function ($sub) {
        $sub->url('/users', 'Users');
        $sub->url('trips', 'Trips');
        });
        });
        @endphp

