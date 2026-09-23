<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics 設定',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'トラッキング設定',
            'description' => 'Umami Analytics インスタンスへの接続を設定します。',
        ],
        'tracking_behavior' => [
            'heading' => 'トラッキング動作',
            'description' => 'ページ訪問とイベントのトラッキング方法を制御します。',
        ],
        'advanced_options' => [
            'heading' => '詳細オプション',
            'description' => 'ドメインのフィルタリングとカスタムタグを設定します。',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'ウェブサイト ID',
            'helper' => 'Umami におけるウェブサイトの一意の識別子。',
        ],
        'host_analytics' => [
            'label' => 'アナリティクスホスト',
            'helper' => 'Umami Analytics スクリプトの URL（例: https://analytics.example.com/script.js）。',
        ],
        'host_url' => [
            'label' => 'ホスト URL',
            'helper' => 'スクリプトホストと異なる場合の Umami インスタンスのベース URL。',
        ],
        'auto_track' => [
            'label' => '自動トラッキング',
            'helper' => '追加設定なしでページビューを自動的に記録します。',
        ],
        'exclude_search' => [
            'label' => '検索パラメータを除外',
            'helper' => '記録する URL からクエリ文字列パラメータを削除します。',
        ],
        'exclude_hash' => [
            'label' => 'ハッシュを除外',
            'helper' => '記録する URL からハッシュフラグメントを削除します。',
        ],
        'domains' => [
            'label' => 'ドメイン',
            'helper' => 'トラッキングするドメインのカンマ区切りリスト（すべてを対象にする場合は空欄）。',
        ],
        'tag' => [
            'label' => 'タグ',
            'helper' => 'このトラッキングインスタンスを識別するカスタムタグ。',
        ],
    ],
];
