<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied');
}


// ========================================
// Add Static TypoScript file configuration
// ========================================
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Content excursions package'
);

// ========================================
// Add PageTS config
// ========================================
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="DIR:EXT:sem_ex_content/Configuration/TsConfig/" extensions="ts">'
);
