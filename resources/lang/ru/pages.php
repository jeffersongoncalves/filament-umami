<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Настройки Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Настройка отслеживания',
            'description' => 'Настройте подключение к вашему экземпляру Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Поведение отслеживания',
            'description' => 'Управляйте тем, как отслеживаются посещения страниц и события.',
        ],
        'advanced_options' => [
            'heading' => 'Расширенные параметры',
            'description' => 'Настройте фильтрацию доменов и пользовательские теги.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID сайта',
            'helper' => 'Уникальный идентификатор вашего сайта в Umami.',
        ],
        'host_analytics' => [
            'label' => 'Хост аналитики',
            'helper' => 'URL скрипта Umami Analytics (например, https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL хоста',
            'helper' => 'Базовый URL вашего экземпляра Umami, если он отличается от хоста скрипта.',
        ],
        'auto_track' => [
            'label' => 'Автоматическое отслеживание',
            'helper' => 'Автоматически отслеживать просмотры страниц без дополнительной настройки.',
        ],
        'exclude_search' => [
            'label' => 'Исключить параметры поиска',
            'helper' => 'Удалять параметры строки запроса из отслеживаемых URL.',
        ],
        'exclude_hash' => [
            'label' => 'Исключить хеш',
            'helper' => 'Удалять хеш-фрагмент из отслеживаемых URL.',
        ],
        'domains' => [
            'label' => 'Домены',
            'helper' => 'Список доменов через запятую для отслеживания (оставьте пустым, чтобы отслеживать все).',
        ],
        'tag' => [
            'label' => 'Тег',
            'helper' => 'Пользовательский тег для идентификации этого экземпляра отслеживания.',
        ],
    ],
];
