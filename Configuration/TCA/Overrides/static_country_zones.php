<?php
defined('TYPO3_MODE') or die();

$LL = 'LLL:EXT:static_info_tables_ru/Resources/Private/Language/locallang_db.xlf:static_countries_item.';

$additionalFields = [
    'zn_name_en' => 'zn_name_ru'
];
foreach ($additionalFields as $sourceField => $destField) {
    $additionalColumns = [];
    $additionalColumns[$destField] = $GLOBALS['TCA']['static_country_zones']['columns'][$sourceField];
    $additionalColumns[$destField]['label'] = $LL . $destField;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('static_country_zones', $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'static_country_zones',
        $destField,
        '',
        'after:' . $sourceField
    );
    // Add as search field
    $GLOBALS['TCA']['static_country_zones']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);
