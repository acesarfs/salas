<?php

$categoria = [
    [
        'text' => '<i class="fas fa-list"></i> Listar',
        'url'  => config('app.url') . '/categorias',
        'can'  => 'logado',
    ],
    [
        'text' => '<i class="fas fa-plus"></i> Nova Categoria',
        'url'  => config('app.url') . '/categorias/create',
        'can'  => 'admin',
    ],
];

$salas = [
    [
        'text' => '<i class="fas fa-plus"></i> Nova Sala',
        'url'  => config('app.url') . '/salas/create',
        'can'  => 'admin',
    ],
];

$reservas = [
    [
        'text' => '<i class="fas fa-list"></i> Minhas Reservas',
        'url'  => config('app.url') . '/reservas/my',
        'can'  => 'logado',
    ],
    [
        'text' => '<i class="fas fa-plus-square"></i> Nova reserva',
        'url'  => config('app.url') . '/reservas/create',
        'can'  => 'logado',
    ],
];

$menu = [
    [
        'text' => 'Hoje',
        'url'  => config('app.url') . '/',
    ],
    [
        'text' => 'Buscar Reservas',
        'url'  => config('app.url') . '/reservas',
    ],
    [
        'text' => 'Calendário por Sala',
        'url'  => config('app.url') . '/salas',
    ],

    [
        'text'    => 'Categoria',
        'submenu' => $categoria,
        'can'     => 'logado',
    ],
    [
        'text'    => 'Salas',
        'submenu' => $salas,
        'can'     => 'logado',
    ],

    [
        'text'    => 'Reservas',
        'submenu' => $reservas,
        'can'     => 'logado',
    ],
];

$right_menu = [
    [
        'text'   => '<i class="fas fa-cog"></i>',
        'title'  => 'Configurações',
        'target' => '_blank',
        'url'    => config('app.url') . '/settings',
        'align'  => 'right',
        'can'    => 'admin',
    ],
    [
        'text'   => '<i class="fas fa-users"></i>',
        'title'  => 'Pessoas',
        'target' => '_blank',
        'url'    => config('app.url') . '/users',
        'align'  => 'right',
        'can'    => 'admin',
    ],
    [
        'text'   => '<i class="fas fa-user-secret"></i>',
        'title'  => 'Login As',
        'target' => '_blank',
        'url'    => config('app.url') . '/loginas',
        'align'  => 'right',
        'can'    => 'admin',
    ],
    [
        'text'   => '<i class="fas fa-hard-hat"></i>',
        'title'  => 'Logs',
        'target' => '_blank',
        'url'    => config('app.url') . '/logs',
        'align'  => 'right',
        'can'    => 'admin',
    ],
];

# dashboard_url renomeado para app_url
# USPTHEME_SKIN deve ser colocado no .env da aplicação 

return [
    'title' => '',
    'skin' => env('USP_THEME_SKIN', 'uspdev'),
    'app_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => config('app.url') . '/logout',
    'login_url' => config('app.url') . '/login',
    'menu' => $menu,
    'right_menu' => $right_menu,
];
