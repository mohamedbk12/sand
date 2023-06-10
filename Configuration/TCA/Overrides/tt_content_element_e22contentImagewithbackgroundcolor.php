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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e22contentImagewithbackgroundcolor'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e22contentImagewithbackgroundcolor'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-21 Content image With background color',
        'sandsitepackage_e22contentImagewithbackgroundcolor',
        'sandsitepackage-e22contentImagewithbackgroundcolor'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e22contentImagewithbackgroundcolor'] = 'sandsitepackage-e22contentImagewithbackgroundcolor';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e22contentImagewithbackgroundcolor'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e22contentImagewithbackgroundcolor'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
           image,slider_type,bodytext,
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
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e22contentImagewithbackgroundcolor']['columnsOverrides'] = [
    'slider_type' => [
        'lable'=> 'backgriund color',
        'config' => [
            'items' => [
                ['white', 'white'],
                ['yellow', 'truyellow'],
                 ['blue', 'blue'],
           ],
        ],
    ],
];