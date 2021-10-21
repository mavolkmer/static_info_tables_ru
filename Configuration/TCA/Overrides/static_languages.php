<?php
defined('TYPO3') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'lg_name_en' => 'lg_name_ru'
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_languages');
unset($initialize);
