<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Umami Analytics',
    'title' => 'Umami Analytics सेटिंग्स',
    'sections' => [
        'tracking_configuration' => [
            'heading' => 'ट्रैकिंग कॉन्फ़िगरेशन',
            'description' => 'अपने Umami analytics इंस्टेंस से कनेक्शन कॉन्फ़िगर करें।',
        ],
        'tracking_behavior' => [
            'heading' => 'ट्रैकिंग व्यवहार',
            'description' => 'नियंत्रित करें कि पेज विज़िट और इवेंट कैसे ट्रैक किए जाते हैं।',
        ],
        'advanced_options' => [
            'heading' => 'उन्नत विकल्प',
            'description' => 'डोमेन फ़िल्टरिंग और कस्टम टैग कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'website_id' => [
            'label' => 'वेबसाइट ID',
            'helper' => 'Umami में आपकी वेबसाइट का विशिष्ट पहचानकर्ता।',
        ],
        'host_analytics' => [
            'label' => 'एनालिटिक्स होस्ट',
            'helper' => 'आपकी Umami analytics स्क्रिप्ट का URL (जैसे https://analytics.example.com/script.js)।',
        ],
        'host_url' => [
            'label' => 'होस्ट URL',
            'helper' => 'आपके Umami इंस्टेंस का बेस URL, यदि स्क्रिप्ट होस्ट से अलग है।',
        ],
        'auto_track' => [
            'label' => 'स्वचालित ट्रैकिंग',
            'helper' => 'अतिरिक्त कॉन्फ़िगरेशन के बिना पेज व्यू स्वचालित रूप से ट्रैक करें।',
        ],
        'exclude_search' => [
            'label' => 'सर्च पैरामीटर बाहर रखें',
            'helper' => 'ट्रैक किए गए URL से क्वेरी स्ट्रिंग पैरामीटर हटाएँ।',
        ],
        'exclude_hash' => [
            'label' => 'Hash बाहर रखें',
            'helper' => 'ट्रैक किए गए URL से hash भाग हटाएँ।',
        ],
        'domains' => [
            'label' => 'डोमेन',
            'helper' => 'ट्रैक करने के लिए डोमेन की कॉमा से अलग सूची (सभी ट्रैक करने के लिए खाली छोड़ें)।',
        ],
        'tag' => [
            'label' => 'टैग',
            'helper' => 'इस ट्रैकिंग इंस्टेंस की पहचान के लिए कस्टम टैग।',
        ],
    ],
];
