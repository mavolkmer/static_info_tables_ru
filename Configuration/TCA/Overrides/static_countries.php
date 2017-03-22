<?php
defined('TYPO3_MODE') or die();

(function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_countries');
