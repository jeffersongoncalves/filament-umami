<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics sozlamalari',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Kuzatuv konfiguratsiyasi',
            'description' => 'Umami analytics nusxangizga ulanishni sozlang.',
        ],
        'tracking_behavior' => [
            'heading' => 'Kuzatuv xatti-harakati',
            'description' => 'Sahifa tashriflari va hodisalar qanday kuzatilishini boshqaring.',
        ],
        'advanced_options' => [
            'heading' => 'Kengaytirilgan parametrlar',
            'description' => 'Domen filtrlash va maxsus teglarni sozlang.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Veb-sayt ID',
            'helper' => 'Umamiʼdagi veb-saytingizning noyob identifikatori.',
        ],
        'host_analytics' => [
            'label' => 'Analitika xosti',
            'helper' => 'Umami analytics skriptingiz URL manzili (masalan, https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'Xost URL',
            'helper' => 'Agar skript xostidan farq qilsa, Umami nusxangizning asosiy URL manzili.',
        ],
        'auto_track' => [
            'label' => 'Avtomatik kuzatuv',
            'helper' => 'Qoʻshimcha sozlamalarsiz sahifa koʻrishlarini avtomatik kuzatish.',
        ],
        'exclude_search' => [
            'label' => 'Qidiruv parametrlarini chiqarib tashlash',
            'helper' => 'Kuzatilgan URLʼlardan soʻrov satri parametrlarini olib tashlash.',
        ],
        'exclude_hash' => [
            'label' => 'Hashʼni chiqarib tashlash',
            'helper' => 'Kuzatilgan URLʼlardan hash qismini olib tashlash.',
        ],
        'domains' => [
            'label' => 'Domenlar',
            'helper' => 'Kuzatiladigan domenlarning vergul bilan ajratilgan roʻyxati (barchasini kuzatish uchun boʻsh qoldiring).',
        ],
        'tag' => [
            'label' => 'Teg',
            'helper' => 'Ushbu kuzatuv nusxasini aniqlash uchun maxsus teg.',
        ],
    ],
];
