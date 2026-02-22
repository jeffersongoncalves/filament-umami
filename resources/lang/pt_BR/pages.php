<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Configurações do Umami Analytics',

    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Configuração de Rastreamento',
            'description' => 'Configure a conexão com sua instância do Umami analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Comportamento do Rastreamento',
            'description' => 'Controle como visitas e eventos são rastreados.',
        ],
        'advanced_options' => [
            'heading' => 'Opções Avançadas',
            'description' => 'Configure filtragem de domínios e tags personalizadas.',
        ],
    ],

    'fields' => [
        'website_id' => [
            'label' => 'ID do Website',
            'helper' => 'O identificador único do seu website no Umami.',
        ],
        'host_analytics' => [
            'label' => 'Host do Analytics',
            'helper' => 'A URL do script de analytics do Umami (ex: https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL do Host',
            'helper' => 'A URL base da sua instância Umami, se diferente do host do script.',
        ],
        'auto_track' => [
            'label' => 'Rastreamento Automático',
            'helper' => 'Rastrear automaticamente visualizações de página sem configuração adicional.',
        ],
        'exclude_search' => [
            'label' => 'Excluir Parâmetros de Busca',
            'helper' => 'Remover parâmetros de query string das URLs rastreadas.',
        ],
        'exclude_hash' => [
            'label' => 'Excluir Hash',
            'helper' => 'Remover o fragmento hash das URLs rastreadas.',
        ],
        'domains' => [
            'label' => 'Domínios',
            'helper' => 'Lista de domínios separados por vírgula para rastrear (deixe vazio para rastrear todos).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'Uma tag personalizada para identificar esta instância de rastreamento.',
        ],
    ],
];
