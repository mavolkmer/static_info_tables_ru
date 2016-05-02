<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

$tempTablesDef = [
    'static_countries' => [
        'cn_short_en' => 'cn_short_ru',
    ],
    'static_country_zones' => [
        'zn_name_en' => 'zn_name_ru',
    ],
    'static_currencies' => [
        'cu_name_en' => 'cu_name_ru',
        'cu_sub_name_en' => 'cu_sub_name_ru',
    ],
    'static_languages' => [
        'lg_name_en' => 'lg_name_ru',
    ],
    'static_territories' => [
        'tr_name_en' => 'tr_name_ru',
    ],
    'static_taxes' => [
        'tx_name_en' => 'tx_name_ru',
    ],
];

foreach ($tempTablesDef as $tempTable => $tempFieldDef) {
    t3lib_div::loadTCA($tempTable);
    foreach ($tempFieldDef as $tempSourceField => $tempDestField) {
        $tempColumns = [];
        $tempColumns[$tempDestField] = $TCA[$tempTable]['columns'][$tempSourceField];
        $tempColumns[$tempDestField]['label'] = 'LLL:EXT:' . $_EXTKEY . '/locallang_db.xml:' . $tempTable . '_item.' . $tempDestField;
        t3lib_extMgm::addTCAcolumns($tempTable, $tempColumns, 1);
        t3lib_extMgm::addToAllTCAtypes($tempTable, $tempDestField, '', 'after:' . $tempSourceField);
    }
}
