<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Налаштування Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'Налаштування відстеження',
            'description' => 'Налаштуйте підключення до вашого екземпляра Umami Analytics.',
        ],
        'tracking_behavior' => [
            'heading' => 'Поведінка відстеження',
            'description' => 'Керуйте тим, як відстежуються відвідування сторінок і події.',
        ],
        'advanced_options' => [
            'heading' => 'Розширені параметри',
            'description' => 'Налаштуйте фільтрацію доменів і користувацькі теги.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ID сайту',
            'helper' => 'Унікальний ідентифікатор вашого сайту в Umami.',
        ],
        'host_analytics' => [
            'label' => 'Хост аналітики',
            'helper' => 'URL скрипту Umami Analytics (наприклад, https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'URL хоста',
            'helper' => 'Базовий URL вашого екземпляра Umami, якщо він відрізняється від хоста скрипту.',
        ],
        'auto_track' => [
            'label' => 'Автоматичне відстеження',
            'helper' => 'Автоматично відстежувати перегляди сторінок без додаткового налаштування.',
        ],
        'exclude_search' => [
            'label' => 'Виключити параметри пошуку',
            'helper' => 'Видаляти параметри рядка запиту з URL, що відстежуються.',
        ],
        'exclude_hash' => [
            'label' => 'Виключити хеш',
            'helper' => 'Видаляти хеш-фрагмент з URL, що відстежуються.',
        ],
        'domains' => [
            'label' => 'Домени',
            'helper' => 'Список доменів через кому для відстеження (залиште порожнім, щоб відстежувати всі).',
        ],
        'tag' => [
            'label' => 'Тег',
            'helper' => 'Користувацький тег для ідентифікації цього екземпляра відстеження.',
        ],
    ],
];
