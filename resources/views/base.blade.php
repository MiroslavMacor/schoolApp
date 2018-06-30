

        @php
        Menu::create('navbar', function($menu) {
        $menu->url('/', 'Home');
        $menu->url('/tripsOverview', 'Destinations');

        });
        @endphp

