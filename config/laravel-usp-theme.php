<?php

$filas = [
    [
        'text' => 'Filas',
        'url' => 'filas',
        'can' => 'admin',
    ],
    [
        'text' => 'Nova Fila',
        'url' => 'filas/create',
        'can' => 'admin',
    ]
];

$configuracoes = [
    [
        'text' => '<i class="fas fa-sitemap"></i> Setores',
        'url' => 'setores',
        'can' => 'admin',
    ],
    [
        'text' => '<i class="fas fa-tasks"></i> Filas',
        'url' => 'filas',
        'can' => 'admin',
    ], 
    [
        'text' => '<i class="fas fa-users"></i> Usuários',
        'url' => 'users',
        'can' => 'admin',
    ],
];

$ano = date('Y');
$anos = [
    ['text'=>'2019', 'url'=>'anos/2019']
];

return [
    'title' => env('APP_NAME'),
    'dashboard_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'menu' => [
        [
            'text' => 'Novo Chamado',
            'url' => 'chamados/create',
            'can' => 'chamados.create',
        ],
        [
            'text' => 'Meus Chamados',
            'url' => 'chamados',
            'can' => 'chamados.create',
        ],
        [
            'text' => 'Filas',
            'url' => '',
            'can' => 'admin',
            'submenu' => $filas
        ]
    ],
    'right_menu' => [
        [
            'text'=>'<i class="fas fa-calendar-alt"></i> '.$ano,
            'title'=>'Trocar o ano de referência',
            'submenu' => $anos
            ],
        [
            'text' => '<i class="fas fa-id-badge"></i> Trocar perfil',
            'can' => 'trocarPerfil',
            'submenu' => [
                [
                    'text' => 'Admin',
                    'url' => 'users/perfil/admin',
                    'can' => 'trocarPerfil',
                ],
                [
                    'text' => 'Atendente',
                    'url' => 'users/perfil/atendente',
                    'can' => 'trocarPerfil',
                ], 
                [
                    'text' => 'Usuário',
                    'url' => 'users/perfil/usuario',
                ],
            ],
        ],
        [
            'text' => '<i class="fas fa-cog"></i> Configurações',
            'title' => 'Configurações',
            'submenu' => $configuracoes,
        ],
    ],
];
