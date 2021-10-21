<?php
defined('TYPO3') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_ru',
    ];

    \Mselbach\StaticInfoTablesRu\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_countries');
unset($initialize);
