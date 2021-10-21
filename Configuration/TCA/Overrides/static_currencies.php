<?php
defined('TYPO3') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cu_name_en'     => 'cu_name_ru',
        'cu_sub_name_en' => 'cu_sub_name_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_currencies');
unset($initialize);
