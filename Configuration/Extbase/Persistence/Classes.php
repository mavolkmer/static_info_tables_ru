<?php
declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameRu' => [
                'fieldName' => 'cn_short_ru',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameRu' => [
                'fieldName' => 'zn_name_ru',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameRu' => [
                'fieldName' => 'cu_name_ru',
            ],
            'subdivisionNameRu' => [
                'fieldName' => 'cu_sub_name_ru',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameRu' => [
                'fieldName' => 'lg_name_ru',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameRu' => [
                'fieldName' => 'tr_name_ru',
            ],
        ],
    ],
];
