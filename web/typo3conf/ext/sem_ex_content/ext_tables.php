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


// ============================================
// Register Headcontent content element
// ============================================

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Header content',
        'semexcontent_headcontent',
        'EXT:sem_ex_content/Resources/Public/Icons/headcontent.svg'
    ],
    'CType'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_semexcontent_domain_model_headcontent');

$iconRegistry->registerIcon('semexcontent-headcontent', \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class, [
    'source' => 'EXT:sem_ex_content/Resources/Public/Icons/headcontent.svg'
]);
