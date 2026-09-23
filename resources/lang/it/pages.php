<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Impostazioni di Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Configurazione del tracciamento',
            'description' => 'Configura la connessione alla tua istanza di Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Comportamento del tracciamento',
            'description' => 'Controlla come vengono tracciate visite alle pagine ed eventi.',
        ],
        'advanced_options' => [
            'heading' => 'Opzioni avanzate',
            'description' => 'Configura il filtro dei domini e i tag personalizzati.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID del sito',
            'helper' => 'L\'identificativo univoco del tuo sito in Umami.',
        ],
        'host_analytics' => [
            'label' => 'Host analytics',
            'helper' => 'L\'URL dello script di Umami Analytics (ad es. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL host',
            'helper' => 'L\'URL di base della tua istanza Umami, se diverso dall\'host dello script.',
        ],
        'auto_track' => [
            'label' => 'Tracciamento automatico',
            'helper' => 'Traccia automaticamente le visualizzazioni di pagina senza configurazioni aggiuntive.',
        ],
        'exclude_search' => [
            'label' => 'Escludi parametri di ricerca',
            'helper' => 'Rimuovi i parametri della query string dagli URL tracciati.',
        ],
        'exclude_hash' => [
            'label' => 'Escludi hash',
            'helper' => 'Rimuovi il frammento hash dagli URL tracciati.',
        ],
        'domains' => [
            'label' => 'Domini',
            'helper' => 'Elenco di domini separati da virgole da tracciare (lascia vuoto per tracciarli tutti).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'Un tag personalizzato per identificare questa istanza di tracciamento.',
        ],
    ],
];
