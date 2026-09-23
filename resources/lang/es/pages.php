<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Configuración de Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Configuración de seguimiento',
            'description' => 'Configura la conexión con tu instancia de Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Comportamiento del seguimiento',
            'description' => 'Controla cómo se registran las visitas a páginas y los eventos.',
        ],
        'advanced_options' => [
            'heading' => 'Opciones avanzadas',
            'description' => 'Configura el filtrado de dominios y las etiquetas personalizadas.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID del sitio web',
            'helper' => 'El identificador único de tu sitio web en Umami.',
        ],
        'host_analytics' => [
            'label' => 'Host de analítica',
            'helper' => 'La URL del script de Umami Analytics (p. ej., https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL del host',
            'helper' => 'La URL base de tu instancia de Umami, si es distinta del host del script.',
        ],
        'auto_track' => [
            'label' => 'Seguimiento automático',
            'helper' => 'Registra automáticamente las visitas de página sin configuración adicional.',
        ],
        'exclude_search' => [
            'label' => 'Excluir parámetros de búsqueda',
            'helper' => 'Elimina los parámetros de la cadena de consulta de las URL registradas.',
        ],
        'exclude_hash' => [
            'label' => 'Excluir hash',
            'helper' => 'Elimina el fragmento hash de las URL registradas.',
        ],
        'domains' => [
            'label' => 'Dominios',
            'helper' => 'Lista de dominios separados por comas a rastrear (déjalo vacío para rastrear todos).',
        ],
        'tag' => [
            'label' => 'Etiqueta',
            'helper' => 'Una etiqueta personalizada para identificar esta instancia de seguimiento.',
        ],
    ],
];
