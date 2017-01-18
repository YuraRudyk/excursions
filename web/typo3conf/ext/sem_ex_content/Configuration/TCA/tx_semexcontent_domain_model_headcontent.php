<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title'                    => 'header content',
        'label'                    => 'header',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS'             => true,
        'origUid'                  => 't3_origuid',
        'dividers2tabs'            => true,
        'hideTable'                => true,
        'thumbnail'                => 'image',
        'editlock'                 => 'editlock',
        'delete'                   => 'deleted',
        'enablecolumns'            => [
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
            'fe_group'  => 'fe_group'
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('sem_ex_content')
            . 'Resources/Public/Icons/headcontent.svg',
    ],
    'interface' => [
        'showRecordFieldList' => 'first_phone,second_phone,email,first_menu,second_menu,third_menu,fourth_menu,header,subheader'
    ],
    'columns' => [
        'sys_language_uid' => [
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                ]
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => [
                'type'       => 'select',
                'renderType' => 'selectSingle',
                'items'      => [
                    ['', 0],
                ],
                'foreign_table'       => 'tx_semexcontent_domain_model_headcontent',
                'foreign_table_where' => 'AND tx_semexcontent_domain_model_headcontent.pid=###CURRENT_PID### '
                    . ' AND tx_semexcontent_domain_model_headcontent.sys_language_uid IN (-1,0)',
            ]
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'cruser_id' => [
            'label'  => $ll . 'tx_semexcontent_feature.fields.cruser_id',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'pid' => [
            'label'  => $ll . 'fields.pid',
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'crdate' => [
            'label'  => $ll . 'fields.crdate',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'tstamp' => [
            'label'  => $ll . 'fields.tstamp',
            'config' => [
                'type' => 'passthrough',
            ]
        ],
        'starttime' => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
            'config'    => [
                'type'    => 'input',
                'size'    => 16,
                'max'     => 20,
                'eval'    => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
            'config'    => [
                'type'    => 'input',
                'size'    => 16,
                'max'     => 20,
                'eval'    => 'datetime',
                'default' => 0,
            ]
        ],
        'fe_group' => [
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.fe_group',
            'config'  => [
                'type'       => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size'       => 5,
                'maxitems'   => 20,
                'items'      => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys'       => '-1,-2',
                'foreign_table'       => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
            ],
        ],

        'first_phone' => [
            'label'  => 'first phone',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'second_phone' => [
            'label'  => 'second phone',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'email' => [
            'label'  => 'email',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'first_menu' => [
            'label'  => 'first menu',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'second_menu' => [
            'label'  => 'second menu',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'third_menu' => [
            'label'  => 'third menu',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'fourth_menu' => [
            'label'  => 'fourth menu',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'header' => [
            'label'  => 'header',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'subheader' => [
            'label'  => 'sub header',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'headcontent' => [
            'label'  => 'headcontent',
            'config' => [
                'type' => 'passthrough'
            ]
        ]
    ],

    'types' => [
        [
            'showitem' => 'first_phone, second_phone, email, first_menu, second_menu, third_menu, fourth_menu, header, subheader, sys_language_uid, l10n_parent, hidden'
        ]
    ]
    
];
