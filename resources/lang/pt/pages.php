<?php

return [
    'navigation_group' => 'Definições',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Definições do Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Configuração de rastreamento',
            'description' => 'Configure a ligação à sua instância do Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Comportamento do rastreamento',
            'description' => 'Controle como as visitas às páginas e os eventos são rastreados.',
        ],
        'advanced_options' => [
            'heading' => 'Opções avançadas',
            'description' => 'Configure a filtragem de domínios e etiquetas personalizadas.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID do site',
            'helper' => 'O identificador único do seu site no Umami.',
        ],
        'host_analytics' => [
            'label' => 'Host de análise',
            'helper' => 'O URL do script do Umami Analytics (por ex., https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL do host',
            'helper' => 'O URL base da sua instância do Umami, se for diferente do host do script.',
        ],
        'auto_track' => [
            'label' => 'Rastreamento automático',
            'helper' => 'Rastrear automaticamente as visualizações de página sem configuração adicional.',
        ],
        'exclude_search' => [
            'label' => 'Excluir parâmetros de pesquisa',
            'helper' => 'Remover os parâmetros da query string dos URLs rastreados.',
        ],
        'exclude_hash' => [
            'label' => 'Excluir hash',
            'helper' => 'Remover o fragmento hash dos URLs rastreados.',
        ],
        'domains' => [
            'label' => 'Domínios',
            'helper' => 'Lista de domínios separados por vírgulas a rastrear (deixe vazio para rastrear todos).',
        ],
        'tag' => [
            'label' => 'Etiqueta',
            'helper' => 'Uma etiqueta personalizada para identificar esta instância de rastreamento.',
        ],
    ],
];
