<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Umami Analytics',
    'title' => 'تنظیمات Umami Analytics',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'پیکربندی ردیابی',
            'description' => 'اتصال به نمونه Umami analytics خود را پیکربندی کنید.',
        ],
        'tracking_behavior' => [
            'heading' => 'رفتار ردیابی',
            'description' => 'نحوه ردیابی بازدید صفحات و رویدادها را کنترل کنید.',
        ],
        'advanced_options' => [
            'heading' => 'گزینه‌های پیشرفته',
            'description' => 'فیلتر دامنه‌ها و برچسب‌های سفارشی را پیکربندی کنید.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'شناسه وب‌سایت',
            'helper' => 'شناسه یکتای وب‌سایت شما در Umami.',
        ],
        'host_analytics' => [
            'label' => 'میزبان تحلیل',
            'helper' => 'آدرس اسکریپت Umami analytics شما (مثلاً https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'آدرس میزبان',
            'helper' => 'آدرس پایه نمونه Umami، در صورتی که با میزبان اسکریپت متفاوت باشد.',
        ],
        'auto_track' => [
            'label' => 'ردیابی خودکار',
            'helper' => 'بازدیدهای صفحه بدون پیکربندی اضافی به‌صورت خودکار ردیابی شوند.',
        ],
        'exclude_search' => [
            'label' => 'حذف پارامترهای جستجو',
            'helper' => 'پارامترهای رشته پرس‌وجو از آدرس‌های ردیابی‌شده حذف شوند.',
        ],
        'exclude_hash' => [
            'label' => 'حذف Hash',
            'helper' => 'بخش hash از آدرس‌های ردیابی‌شده حذف شود.',
        ],
        'domains' => [
            'label' => 'دامنه‌ها',
            'helper' => 'فهرست دامنه‌های جداشده با کاما برای ردیابی (برای ردیابی همه خالی بگذارید).',
        ],
        'tag' => [
            'label' => 'برچسب',
            'helper' => 'برچسب سفارشی برای شناسایی این نمونه ردیابی.',
        ],
    ],
];
