<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics ayarları',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'İzleme yapılandırması',
            'description' => 'Umami analytics örneğinize bağlantıyı yapılandırın.',
        ],
        'tracking_behavior' => [
            'heading' => 'İzleme davranışı',
            'description' => 'Sayfa ziyaretlerinin ve olayların nasıl izlendiğini kontrol edin.',
        ],
        'advanced_options' => [
            'heading' => 'Gelişmiş seçenekler',
            'description' => 'Alan adı filtrelemesini ve özel etiketleri yapılandırın.',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'Web sitesi kimliği',
            'helper' => 'Web sitenizin Umami\'deki benzersiz tanımlayıcısı.',
        ],
        'host_analytics' => [
            'label' => 'Analiz sunucusu',
            'helper' => 'Umami analytics betiğinizin URL\'si (ör. https://analytics.example.com/script.js).',
        ],
        'host_url' => [
            'label' => 'Sunucu URL\'si',
            'helper' => 'Betik sunucusundan farklıysa Umami örneğinizin temel URL\'si.',
        ],
        'auto_track' => [
            'label' => 'Otomatik izleme',
            'helper' => 'Ek yapılandırma olmadan sayfa görüntülemelerini otomatik olarak izleyin.',
        ],
        'exclude_search' => [
            'label' => 'Arama parametrelerini hariç tut',
            'helper' => 'İzlenen URL\'lerden sorgu dizesi parametrelerini kaldırın.',
        ],
        'exclude_hash' => [
            'label' => 'Hash\'i hariç tut',
            'helper' => 'İzlenen URL\'lerden hash parçasını kaldırın.',
        ],
        'domains' => [
            'label' => 'Alan adları',
            'helper' => 'İzlenecek alan adlarının virgülle ayrılmış listesi (tümünü izlemek için boş bırakın).',
        ],
        'tag' => [
            'label' => 'Etiket',
            'helper' => 'Bu izleme örneğini tanımlamak için özel bir etiket.',
        ],
    ],
];
