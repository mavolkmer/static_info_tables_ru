<?php
defined('TYPO3') or die();

call_user_func(function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.txt">'
    );
    if (version_compare(\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getBranch(), '9.5', '>=')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/PageTSconfig/Suggest.tsconfig">'
        );
    } else {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/PageTSconfig/Suggest_prior_9.tsconfig">'
        );
    }


    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['staticInfoTablesRu_importStaticData']
        = \Mselbach\StaticInfoTablesRu\Updates\ImportStaticDataUpdateWizard::class;

}, \Mselbach\StaticInfoTablesRu\Extension::EXTENSION_KEY);

