<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics-instellingen',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Trackingconfiguratie',
            'description' => 'Configureer de verbinding met je Umami Analytics-instantie.',
        ],
        'tracking_behavior' => [
            'heading' => 'Trackinggedrag',
            'description' => 'Bepaal hoe paginabezoeken en gebeurtenissen worden gevolgd.',
        ],
        'advanced_options' => [
            'heading' => 'Geavanceerde opties',
            'description' => 'Configureer domeinfiltering en aangepaste tags.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Website-ID',
            'helper' => 'De unieke identificatie van je website in Umami.',
        ],
        'host_analytics' => [
            'label' => 'Analytics-host',
            'helper' => 'De URL van je Umami Analytics-script (bijv. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'Host-URL',
            'helper' => 'De basis-URL van je Umami-instantie, als deze afwijkt van de scripthost.',
        ],
        'auto_track' => [
            'label' => 'Automatische tracking',
            'helper' => 'Paginaweergaven automatisch volgen zonder extra configuratie.',
        ],
        'exclude_search' => [
            'label' => 'Zoekparameters uitsluiten',
            'helper' => 'Querystringparameters verwijderen uit gevolgde URL\'s.',
        ],
        'exclude_hash' => [
            'label' => 'Hash uitsluiten',
            'helper' => 'Het hashfragment verwijderen uit gevolgde URL\'s.',
        ],
        'domains' => [
            'label' => 'Domeinen',
            'helper' => 'Kommagescheiden lijst met te volgen domeinen (laat leeg om alles te volgen).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'Een aangepaste tag om deze trackinginstantie te identificeren.',
        ],
    ],
];
