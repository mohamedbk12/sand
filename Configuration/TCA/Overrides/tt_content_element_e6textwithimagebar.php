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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e6textwithimagebar'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e6textwithimagebar'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-6 text with image',
        'sandsitepackage_e6textwithimagebar',
        'sandsitepackage-e6textwithimagebar'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e6textwithimagebar'] = 'sandsitepackage-e6textwithimagebar';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e6textwithimagebar'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e6textwithimagebar'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            background,image,header,bodytext,link,link_text,
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





$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e6textwithimagebar']['columnsOverrides'] = [
    'background' => [
        'exclude' => 1,
        'label' =>  'background color',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['blue', 'blue'],
                ['grey', 'grey'],
                ['white', 'white'],
                ['truiceblue', 'truiceblue'],
                ['green', 'green'],
            ],
        ]
    ],
];


