<?php
defined('TYPO3_MODE') or die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'tr_name_en' => 'tr_name_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_territories');
unset($initialize);
