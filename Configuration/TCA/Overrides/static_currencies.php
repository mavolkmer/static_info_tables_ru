<?php
defined('TYPO3_MODE') or die();

(function ($dataSetName) {
    $additionalFields = [
        'cu_name_en'     => 'cu_name_ru',
        'cu_sub_name_en' => 'cu_sub_name_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_currencies');
