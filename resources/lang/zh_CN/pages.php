<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics 设置',
    'sections' => [
        'tracking_configuration' => [
            'heading' => '跟踪配置',
            'description' => '配置与你的 Umami Analytics 实例的连接。',
        ],
        'tracking_behavior' => [
            'heading' => '跟踪行为',
            'description' => '控制页面访问和事件的跟踪方式。',
        ],
        'advanced_options' => [
            'heading' => '高级选项',
            'description' => '配置域名过滤和自定义标签。',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => '网站 ID',
            'helper' => '你的网站在 Umami 中的唯一标识符。',
        ],
        'host_analytics' => [
            'label' => '分析主机',
            'helper' => '你的 Umami Analytics 脚本 URL（例如 https://analytics.example.com/script.js）。',
        ],
        'host_url' => [
            'label' => '主机 URL',
            'helper' => 'Umami 实例的基础 URL（如果与脚本主机不同）。',
        ],
        'auto_track' => [
            'label' => '自动跟踪',
            'helper' => '无需额外配置即可自动跟踪页面浏览量。',
        ],
        'exclude_search' => [
            'label' => '排除搜索参数',
            'helper' => '从跟踪的 URL 中移除查询字符串参数。',
        ],
        'exclude_hash' => [
            'label' => '排除哈希',
            'helper' => '从跟踪的 URL 中移除哈希片段。',
        ],
        'domains' => [
            'label' => '域名',
            'helper' => '以逗号分隔的要跟踪的域名列表（留空则跟踪全部）。',
        ],
        'tag' => [
            'label' => '标签',
            'helper' => '用于标识此跟踪实例的自定义标签。',
        ],
    ],
];
