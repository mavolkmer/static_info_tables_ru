<?php
defined('TYPO3_MODE') or die();

(function ($dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_ru'
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_languages');
