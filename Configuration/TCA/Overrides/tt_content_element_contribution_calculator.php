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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contributioncalculator'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contributioncalculator'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:contributioncalculator',
        'sandsitepackage_contributioncalculator',
        'sandsitepackage-contributioncalculator'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_contributioncalculator'] = 'sandsitepackage-contributioncalculator';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contributioncalculator'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contributioncalculator'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        header,subheader,show_icon,bodytext,--palette--;' . $ll . 'palette.link;link,calculate_button,
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

$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contributioncalculator']['columnsOverrides'] = [

    'bodytext' => [
        'label' => 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:placeholder',
        'config' => [
            'eval' => 'trim',
            'type' => 'text',
            'cols' => '6',
            'rows' => '1',
        ],
    ],
];