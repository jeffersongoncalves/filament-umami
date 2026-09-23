<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Ustawienia Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Konfiguracja śledzenia',
            'description' => 'Skonfiguruj połączenie z instancją Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Zachowanie śledzenia',
            'description' => 'Określ, jak śledzone są odsłony stron i zdarzenia.',
        ],
        'advanced_options' => [
            'heading' => 'Opcje zaawansowane',
            'description' => 'Skonfiguruj filtrowanie domen i niestandardowe tagi.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID witryny',
            'helper' => 'Unikalny identyfikator witryny w Umami.',
        ],
        'host_analytics' => [
            'label' => 'Host analityki',
            'helper' => 'Adres URL skryptu Umami Analytics (np. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL hosta',
            'helper' => 'Bazowy adres URL instancji Umami, jeśli różni się od hosta skryptu.',
        ],
        'auto_track' => [
            'label' => 'Automatyczne śledzenie',
            'helper' => 'Automatycznie śledź odsłony bez dodatkowej konfiguracji.',
        ],
        'exclude_search' => [
            'label' => 'Wyklucz parametry wyszukiwania',
            'helper' => 'Usuń parametry zapytania ze śledzonych adresów URL.',
        ],
        'exclude_hash' => [
            'label' => 'Wyklucz hash',
            'helper' => 'Usuń fragment hash ze śledzonych adresów URL.',
        ],
        'domains' => [
            'label' => 'Domeny',
            'helper' => 'Lista domen do śledzenia oddzielonych przecinkami (pozostaw puste, aby śledzić wszystkie).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'Niestandardowy tag identyfikujący tę instancję śledzenia.',
        ],
    ],
];
