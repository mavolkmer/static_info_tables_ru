<?php
defined('TYPO3_MODE') or die();

$LL = 'LLL:EXT:static_info_tables_ru/Resources/Private/Language/locallang_db.xlf:static_countries_item.';

$additionalFields = [
    'cu_name_en' => 'cu_name_ru',
    'cu_sub_name_en' => 'cu_sub_name_ru'
];
foreach ($additionalFields as $sourceField => $destField) {
    $additionalColumns = [];
    $additionalColumns[$destField] = $GLOBALS['TCA']['static_currencies']['columns'][$sourceField];
    $additionalColumns[$destField]['label'] = $LL . $destField;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('static_currencies', $additionalColumns);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'static_currencies',
        $destField,
        '',
        'after:' . $sourceField
    );
    // Add as search field
    $GLOBALS['TCA']['static_currencies']['ctrl']['searchFields'] .= ',' . $destField;
}
unset($additionalColumns);
unset($additionalFields);
