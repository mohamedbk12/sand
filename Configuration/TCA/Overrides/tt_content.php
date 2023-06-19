<?php

$ll = 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:';

$columns = [
    'tx_sand_sitepackage_teaser_item' => [
        'exclude' => 0,
        'label' => $ll.'tx_sand_sitepackage_teaser_item',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_sand_sitepackage_teaser_item',
            'foreign_field' => 'tt_content',
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
    'space_before_class' => [
        'exclude' => true,
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                ['mt-10', 'mt-10'],
                ['mt-20', 'mt-20'],
                ['mt-30', 'mt-30'],
                ['mt-40', 'mt-40'],
                ['mt-50', 'mt-50'],
                ['mt-60', 'mt-60'],
                ['mt-70', 'mt-70'],
                ['mt-80', 'mt-80'],
                ['mt-90', 'mt-90'],
                ['mt-100', 'mt-100'],
            ],
            'default' => ''
        ]
    ],
    'background' => [
        'exclude' => 1,
        'label' => $ll. 'background',
        'config' => [
            'type' => 'check',
            'items' => [
                ['without background', ''],
            ],
        ]
    ],
    'space_after_class' => [
        'exclude' => true,
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', ''],
                ['mb-10', 'mb-10'],
                ['mb-20', 'mb-20'],
                ['mb-30', 'mb-30'],
                ['mb-40', 'mb-40'],
                ['mb-50', 'mb-50'],
                ['mb-60', 'mb-60'],
                ['mb-70', 'mb-70'],
                ['mb-80', 'mb-80'],
                ['mb-90', 'mb-90'],
                ['mb-100', 'mb-100'],
            ],
            'default' => ''
        ]
    ],
    
    'slider_type' => [
        'exclude' => true,
        'label' => 'Slider type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['slider type (1) Smal box', '1'],
                ['slider type (1) Big box', '2'],
            ],
            'default' => ''
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
            'softref' => 'typolink'
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
    'link_text' => [
        'label' => $ll . 'linkText',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'second_link' => [
        'label' => $ll . 'second_link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'softref' => 'typolink'
        ],
    ],
    'second_link_text' => [
        'label' => $ll . 'second_linkText',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
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
            ('png,jpg,svg')
            /* Enable this line and delete the line above to enable more images extensions */
            // $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
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
    'select_container' => [
        'label' => $ll.'selectContainer',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['No Container', 'no-container'],
                ['Container', 'container'],
                ['Small Container', 'col-md-8 mx-auto'],
            ],
            'default' => 'no-container'
        ]
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
    'calculate_button' => [
        'label' => $ll . 'calculate_button',
        'config' => [
            'eval' => 'trim',
            'type' => 'text',
            'cols' => '',
            'rows' => '1',
        ],
    ],
    'imageh' => [
        'label' => 'Image height',
        'config' => [
            'eval' => 'trim',
            'type' => 'text',
            'cols' => '',
            'rows' => '1',
        ],
    ],
    'imagew' => [
        'label' => 'Image width',
        'config' => [
            'eval' => 'trim',
            'type' => 'text',
            'cols' => '',
            'rows' => '1',
        ],
    ],
    'show_icon' => [
        'label' => $ll . '',
        'config' => [
            'type' => 'check',
            'items' => [
                ['Show Icon', '1'],
            ],
        ]
    ],
 
];

/**
 * OVERRIDE HEADERS PALETTE
 */
$GLOBALS['TCA']['tt_content']['palettes']['headers'] = [
    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
    'showitem' => '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
    ',
];

/**
 * tt_content palette
 */
$GLOBALS['TCA']['tt_content']['palettes']['link'] = [
    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.link',
    'showitem' => '
        link,
        link_text
    ',
];

$GLOBALS['TCA']['tt_content']['palettes']['second_link'] = [
    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.link',
    'showitem' => '
        second_link,
        second_link_text
    ',
];

/**
 *
 * ADD EXTEND COLUMN TO TT_CONTENT
 *
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $columns
);