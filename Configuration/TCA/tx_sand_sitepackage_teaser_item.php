<?php

defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:';

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('lang')) {
    $generalLanguageFile = 'EXT:lang/Resources/Private/Language/locallang_general.xlf';
} else {
    $generalLanguageFile = 'EXT:core/Resources/Private/Language/locallang_general.xlf';
}

return [
    'ctrl' => [
        'label' => 'header',
        'label_alt' => 'subheader',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => $ll.'tx_sand_sitepackage_teaser_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:' . $generalLanguageFile . ':LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
            'fe_group' => 'fe_group',
        ],
        'typeicon_classes' => [
            'default' => 'sandsitepackage-leftrighttextimage'
        ],
    ],
    'interface' => [
        'showRecordFieldList' => '
            hidden,
            tt_content,
',
    ],
    'types' => [
        '1' => [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:header;header,
                bodytext,
                image,
                image_position,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            '
        ],
    ],
    'palettes' => [
        '1' => [
            'showitem' => ''
        ],
        'header'=>[
            'showitem' => '
                header;LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:header,
                header_layout;LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:headerLayout
            '
        ],
        'access' => [
            'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                fe_group',
        ],
        'general' => [
            'showitem' => 'tt_content'
        ],
        'visibility' => [
            'showitem' => '
                hidden;LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:tx_sand_sitepackage_teaser_item
            '
        ],
        // hidden but needs to be included all the time, so sys_language_uid is set correctly
        'hiddenLanguagePalette' => [
            'showitem' => 'sys_language_uid, l10n_parent',
            'isHiddenPalette' => true,
        ],
        'link' => [
            'showitem' => '
                link;LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:link,
                link_text;LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:linkText
            '
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0'
                    ]
                ]
            ]
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:' . $generalLanguageFile . ':LGL.language',
            'config' => [
                'type' => 'language'
            ]
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'tx_sand_sitepackage_teaser_item',
                'size' => 1,
                'maxitems' => 1,
                'minitems' => 0,
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough'
            ]
        ],
        'fe_group' => [
            'exclude' => true,
            'l10n_mode' => 'exclude',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'size' => 7,
                'maxitems' => 20,
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                        -1,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                        -2,
                    ],
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                        '--div--',
                    ],
                ],
                'exclusiveKeys' => '-1,-2',
                'foreign_table' => 'fe_groups',
            ],
        ],
        'tt_content' => [
            'exclude' => true,
            'label' => $ll.'tt_content',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID###',
                'maxitems' => 1,
                'default' => 0,
            ],
        ],  
        'tx_sand_sitepackage_teaser_item2' => [
            'exclude' => 0,
            'label' => $ll.'tx_sand_sitepackage_teaser_item',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_sand_sitepackage_teaser_item2',
                'foreign_field' => 'tx_sand_sitepackage_teaser_item',
                'foreign_sortby' => 'sorting',
                'appearance' => [
                    'collapseAll' => 1,
                    'useSortable' => 1,
                    'newRecordLinkPosition' => 'top',
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1,
                ],
            ],
        ], 
        'header_layout' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 2,
            ],
        ],
        'header' => [
            'exclude' => true,
            'label' => $ll . 'header',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'subheader' => [
            'label' => $ll . 'subheader',
            'config' => [
                'eval' => 'trim',
                'type' => 'text',
                'cols' => '',
                'rows' => '4',
            ],
        ],
        'bodytext' => [
            'label' => $ll . 'bodytext',
            'config' => [
                'type' => 'text',
                'eval' => 'trim',
                'enableRichtext' => true,
                'cols' => 40,
                'rows' => 4
            ],
        ],   
        'image' => [
            'label' => $ll . 'image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                '
                            ],
                        ],
                    ],
                    'minitems' => 0,
                    'maxitems' => 1,
                ],
                ('png, jpg, svg, jpeg')
            ),
        ],
        'media' => [
            'exclude' => true,
            'label' => $ll.'media',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'media',
                [
                    'behaviour' => [
                        'allowLanguageSynchronization' => true,
                    ],
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette'
                            ],
                        ],
                    ],
                    'minitems' => 0,
                    'maxitems' => 1,
                ],
                ('youtube,vimeo,mp4')
            )
        ],
        'file' => [
            'exclude' => true,
            'label' => $ll.'file',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'file',
                [
                    'behaviour' => [
                        'allowLanguageSynchronization' => true,
                    ],
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference'
                    ],
                    'overrideChildTca' => [
                        'types' => [
                            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                                'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette'
                            ],
                        ],
                    ],
                    'minitems' => 0,
                    'maxitems' => 1,
                ],
                ('pdf')
            )
        ],
        'image_position' => [
            'label' => $ll.'imagePosition',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Left Image', 'left-image'],
                    ['Right Image', 'right-image'],
                ],
            ]
        ],
        'buttonslanguage' => [
            'label' => $ll. 'buttonslanguage',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Deutsch', 'de'],
                    ['English', 'en'],
                ],
            ]
        ],
        'link' => [
            'label' => $ll . 'link',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputLink',
                'size' => 50,
                'max' => 1024,
                'eval' => 'trim',
            ],
        ],
        'link_text' => [
            'label' => $ll . 'linkText',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'links_title' => [
            'label' => $ll . 'linksTitle',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'color_select' => [
            'label' => 'Box Color',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['white', 'white'],
                    ['blue', 'blue'],
                ],
            ],
        ],  
        'box_type' => [
            'label' => 'Box type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['small_box', 'Smal box'],
                    ['full_box', 'full box on swipe'],
                ],
            ],
        ],          
        'date' => [
            'label' => $ll . 'date',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'dbType' => 'date',
                'eval' => 'date',
            ],
        ],  
        'email' => [
            'label' => $ll . 'email',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'tel' => [
            'label' => $ll . 'tel',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],   
        'show_image' => [
            'label' => $ll . '',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['Show image', '1'],
                ],
            ]
        ],
        'machinename' => [
            'label' => 'Characteristic',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'outputpower' => [
            'label' => 'Output power',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'outputfrequency' => [
            'label' => 'Output frequency',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'powerconsumption' => [
            'label' => 'Mains power consumption',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'voltage' => [
            'label' => 'Mains voltage',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'mainsfrequency' => [
            'label' => 'Mains frequency',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'total' => [
            'label' => 'Total',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'used' => [
            'label' => 'Used',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
        'usedpercent' => [
            'label' => 'Used percent',
            'config' => [
                'type' => 'input',
                'eval' => 'trim',
            ],
        ],
    ],
];

