<?php

/*
 * This file is part of the package Meddev/sand_sitepackage
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */














defined('TYPO3_MODE') || die();

$ll = 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:';

/***************
 * Add Content Element
 */
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e39images2'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e39images2'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-39 images 2',
        'sandsitepackage_e39images2',
        'sandsitepackage-e39images2'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e39images2'] = 'sandsitepackage-e39images2';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e39images2'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e39images2'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            tx_sand_sitepackage_teaser_item,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        '
    ]
);




$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e39images2']['columnsOverrides'] = [
    'tx_sand_sitepackage_teaser_item' => [
        'config' => [
            'overrideChildTca' => [
                'types' => [
                    '1' => [
                        'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            ,image_position,image,tx_sand_sitepackage_teaser_item2,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --palette--;;hiddenLanguagePalette,
                        '
                    ],
                ],
                'columns' => [
                    'image_position' => [
                        'label' => 'style',
                        'config' => [
                            'type' => 'select',
                            'renderType' => 'selectSingle',
                            'items' => [
                                ['col-span-3', 'content-img col-span-3'],
                                ['col-span-6', 'content-img col-span-6'],
                                ['grid gap-4 grid-cols-12', 'col-span-6 grid gap-4 grid-cols-12'],
                            ],
                        ]
                    ],
                    'tx_sand_sitepackage_teaser_item2' => [
                        'config' => [
                            'overrideChildTca' => [
                                'types' => [
                                    '1' => [
                                        'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            color_select,image,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --palette--;;hiddenLanguagePalette,
                        '
                                    ],
                                ],
                                'columns' => [
                                    'color_select' => [
                                        'label' => 'style',
                                        'config' => [
                                            'type' => 'select',
                                            'renderType' => 'selectSingle',
                                            'items' => [
                                                ['col-span-6', 'content-img col-span-6'],
                                                ['col-span-12', 'content-img col-span-12'],
                                            ],
                                        ]
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
            ],
        ],
    ],
];