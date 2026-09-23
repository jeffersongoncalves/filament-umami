<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics-Einstellungen',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Tracking-Konfiguration',
            'description' => 'Konfigurieren Sie die Verbindung zu Ihrer Umami-Analytics-Instanz.',
        ],
        'tracking_behavior' => [
            'heading' => 'Tracking-Verhalten',
            'description' => 'Steuern Sie, wie Seitenaufrufe und Ereignisse erfasst werden.',
        ],
        'advanced_options' => [
            'heading' => 'Erweiterte Optionen',
            'description' => 'Konfigurieren Sie Domain-Filterung und benutzerdefinierte Tags.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Website-ID',
            'helper' => 'Die eindeutige Kennung Ihrer Website in Umami.',
        ],
        'host_analytics' => [
            'label' => 'Analytics-Host',
            'helper' => 'Die URL Ihres Umami-Analytics-Skripts (z. B. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'Host-URL',
            'helper' => 'Die Basis-URL Ihrer Umami-Instanz, falls abweichend vom Skript-Host.',
        ],
        'auto_track' => [
            'label' => 'Automatisches Tracking',
            'helper' => 'Seitenaufrufe ohne zusätzliche Konfiguration automatisch erfassen.',
        ],
        'exclude_search' => [
            'label' => 'Suchparameter ausschließen',
            'helper' => 'Query-String-Parameter aus erfassten URLs entfernen.',
        ],
        'exclude_hash' => [
            'label' => 'Hash ausschließen',
            'helper' => 'Das Hash-Fragment aus erfassten URLs entfernen.',
        ],
        'domains' => [
            'label' => 'Domains',
            'helper' => 'Kommagetrennte Liste der zu erfassenden Domains (leer lassen, um alle zu erfassen).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'Ein benutzerdefiniertes Tag zur Identifizierung dieser Tracking-Instanz.',
        ],
    ],
];
