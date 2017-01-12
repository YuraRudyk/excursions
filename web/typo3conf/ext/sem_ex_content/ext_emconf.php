<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Content excursions package',
    'description'      => 'An extension which contains general settings and templates of content configuration',
    'category'         => 'distribution',
    'shy'              => 0,
    'version'          => '1.0.0',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'clearCacheOnLoad' => 1,
    'author'           => 'Yura Rudyk',
    'author_company'   => '',
    'constraints'      => [
        'depends' => [
            'typo3'                => '',
            'extbase'              => '',
            'fluid'                => '',
            "fluid_styled_content" => '',
            'gridelements'         => '',
            'vhs'                  => '',
        ],
    ]
];
