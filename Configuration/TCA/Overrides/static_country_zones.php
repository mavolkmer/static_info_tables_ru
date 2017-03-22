<?php
defined('TYPO3_MODE') or die();

(function ($dataSetName) {
    $additionalFields = [
        'zn_name_en' => 'zn_name_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_country_zones');
