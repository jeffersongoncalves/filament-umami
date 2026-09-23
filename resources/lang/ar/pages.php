<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Umami Analytics',
    'title' => 'إعدادات Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'إعدادات التتبع',
            'description' => 'اضبط الاتصال بنسخة Umami analytics الخاصة بك.',
        ],
        'tracking_behavior' => [
            'heading' => 'سلوك التتبع',
            'description' => 'تحكم في كيفية تتبع زيارات الصفحات والأحداث.',
        ],
        'advanced_options' => [
            'heading' => 'خيارات متقدمة',
            'description' => 'اضبط تصفية النطاقات والوسوم المخصصة.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'المعرّف الفريد لموقعك في Umami.',
        ],
        'host_analytics' => [
            'label' => 'مضيف التحليلات',
            'helper' => 'رابط سكربت Umami analytics (مثل https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'رابط المضيف',
            'helper' => 'الرابط الأساسي لنسخة Umami، إذا كان مختلفًا عن مضيف السكربت.',
        ],
        'auto_track' => [
            'label' => 'التتبع التلقائي',
            'helper' => 'تتبع مشاهدات الصفحات تلقائيًا دون إعداد إضافي.',
        ],
        'exclude_search' => [
            'label' => 'استبعاد معاملات البحث',
            'helper' => 'إزالة معاملات سلسلة الاستعلام من الروابط المتتبَّعة.',
        ],
        'exclude_hash' => [
            'label' => 'استبعاد الـ Hash',
            'helper' => 'إزالة جزء الـ hash من الروابط المتتبَّعة.',
        ],
        'domains' => [
            'label' => 'النطاقات',
            'helper' => 'قائمة نطاقات مفصولة بفواصل للتتبع (اتركها فارغة لتتبع الكل).',
        ],
        'tag' => [
            'label' => 'الوسم',
            'helper' => 'وسم مخصص لتمييز نسخة التتبع هذه.',
        ],
    ],
];
