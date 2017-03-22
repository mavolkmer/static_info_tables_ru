<?php
defined('TYPO3_MODE') or die();

(function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.txt">'
    );
})(\Mselbach\StaticInfoTablesRu\Extension::$extKey);
