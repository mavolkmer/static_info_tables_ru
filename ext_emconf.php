<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (ru)',
    'description' => '(ru) language pack for the Static Info Tables providing localized names for countries,
                       currencies and so on.',
    'category' => 'misc',
    'version' => '6.9.0',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'static_info_tables' => '6.9.0-6.9.99',
            'php' => '7.2.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
