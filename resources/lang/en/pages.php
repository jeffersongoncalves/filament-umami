<?php

return [
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics Settings',

    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Tracking Configuration',
            'description' => 'Configure the connection to your Umami analytics instance.',
        ],
        'tracking_behavior' => [
            'heading' => 'Tracking Behavior',
            'description' => 'Control how page visits and events are tracked.',
        ],
        'advanced_options' => [
            'heading' => 'Advanced Options',
            'description' => 'Configure domain filtering and custom tags.',
        ],
    ],

    'fields' => [
        'website_id' => [
            'label' => 'Website ID',
            'helper' => 'The unique identifier for your website in Umami.',
        ],
        'host_analytics' => [
            'label' => 'Analytics Host',
            'helper' => 'The URL of your Umami analytics script (e.g. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'Host URL',
            'helper' => 'The base URL of your Umami instance, if different from the script host.',
        ],
        'auto_track' => [
            'label' => 'Auto Track',
            'helper' => 'Automatically track page views without additional configuration.',
        ],
        'exclude_search' => [
            'label' => 'Exclude Search Parameters',
            'helper' => 'Remove query string parameters from tracked URLs.',
        ],
        'exclude_hash' => [
            'label' => 'Exclude Hash',
            'helper' => 'Remove the hash fragment from tracked URLs.',
        ],
        'domains' => [
            'label' => 'Domains',
            'helper' => 'Comma-separated list of domains to track (leave empty to track all).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'A custom tag to identify this tracking instance.',
        ],
    ],
];
