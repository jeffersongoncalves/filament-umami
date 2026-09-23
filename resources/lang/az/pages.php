<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics parametrləri',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'İzləmə konfiqurasiyası',
            'description' => 'Umami analytics nümunənizə bağlantını konfiqurasiya edin.',
        ],
        'tracking_behavior' => [
            'heading' => 'İzləmə davranışı',
            'description' => 'Səhifə ziyarətlərinin və hadisələrin necə izləndiyini idarə edin.',
        ],
        'advanced_options' => [
            'heading' => 'Qabaqcıl seçimlər',
            'description' => 'Domen filtrləməsini və fərdi teqləri konfiqurasiya edin.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Umami-də saytınızın unikal identifikatoru.',
        ],
        'host_analytics' => [
            'label' => 'Analitika hostu',
            'helper' => 'Umami analytics skriptinizin URL-i (məs. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'Host URL',
            'helper' => 'Skript hostundan fərqlidirsə, Umami nümunənizin əsas URL-i.',
        ],
        'auto_track' => [
            'label' => 'Avtomatik izləmə',
            'helper' => 'Əlavə konfiqurasiya olmadan səhifə baxışlarını avtomatik izləyin.',
        ],
        'exclude_search' => [
            'label' => 'Axtarış parametrlərini çıxar',
            'helper' => 'İzlənən URL-lərdən sorğu sətri parametrlərini silin.',
        ],
        'exclude_hash' => [
            'label' => 'Hash-i çıxar',
            'helper' => 'İzlənən URL-lərdən hash hissəsini silin.',
        ],
        'domains' => [
            'label' => 'Domenlər',
            'helper' => 'İzləniləcək domenlərin vergüllə ayrılmış siyahısı (hamısını izləmək üçün boş buraxın).',
        ],
        'tag' => [
            'label' => 'Teq',
            'helper' => 'Bu izləmə nümunəsini müəyyən etmək üçün fərdi teq.',
        ],
    ],
];
