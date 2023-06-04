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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e16imageareawithsubmages'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e16imageareawithsubmages'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-15 Image area with sub images',
        'sandsitepackage_e16imageareawithsubmages',
        'sandsitepackage-e16imageareawithsubmages'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e16imageareawithsubmages'] = 'sandsitepackage-e16imageareawithsubmages';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e16imageareawithsubmages'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e16imageareawithsubmages'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header,bodytext,image,tx_sand_sitepackage_teaser_item,
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

$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e16imageareawithsubmages']['columnsOverrides'] = [
    'link_text' => [
        'label' => 'Number',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ], 
    'header' => [
        'label' => 'Top header',
    ],
    'slider_type' => [
        'exclude' => true,
        'label' => 'Box type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Big box', '1'],
                ['Small box', '2'],
            ],
            'default' => ''
        ]
    ],

    'tx_sand_sitepackage_teaser_item' => [
        'config' => [
            'overrideChildTca' => [
                'types' => [
                    '1' => [
                        'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            image,header,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --palette--;;hiddenLanguagePalette,
                        '
                    ],
                ],
            ],
        ],
    ],
];

