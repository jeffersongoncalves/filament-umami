<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Paramètres d\'Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Configuration du suivi',
            'description' => 'Configurez la connexion à votre instance Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Comportement du suivi',
            'description' => 'Contrôlez la manière dont les visites de pages et les événements sont suivis.',
        ],
        'advanced_options' => [
            'heading' => 'Options avancées',
            'description' => 'Configurez le filtrage des domaines et les tags personnalisés.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID du site',
            'helper' => 'L\'identifiant unique de votre site dans Umami.',
        ],
        'host_analytics' => [
            'label' => 'Hôte d\'analyse',
            'helper' => 'L\'URL de votre script Umami Analytics (par ex. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL de l\'hôte',
            'helper' => 'L\'URL de base de votre instance Umami, si elle diffère de l\'hôte du script.',
        ],
        'auto_track' => [
            'label' => 'Suivi automatique',
            'helper' => 'Suivre automatiquement les pages vues sans configuration supplémentaire.',
        ],
        'exclude_search' => [
            'label' => 'Exclure les paramètres de recherche',
            'helper' => 'Supprimer les paramètres de requête des URL suivies.',
        ],
        'exclude_hash' => [
            'label' => 'Exclure le hash',
            'helper' => 'Supprimer le fragment hash des URL suivies.',
        ],
        'domains' => [
            'label' => 'Domaines',
            'helper' => 'Liste de domaines séparés par des virgules à suivre (laissez vide pour tout suivre).',
        ],
        'tag' => [
            'label' => 'Tag',
            'helper' => 'Un tag personnalisé pour identifier cette instance de suivi.',
        ],
    ],
];
