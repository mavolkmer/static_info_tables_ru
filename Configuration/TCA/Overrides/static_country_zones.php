<?php
defined('TYPO3') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'zn_name_en' => 'zn_name_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_country_zones');
unset($initialize);
