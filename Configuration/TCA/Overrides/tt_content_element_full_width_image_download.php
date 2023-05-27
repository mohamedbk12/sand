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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_fullwidthimagedownload'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_fullwidthimagedownload'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:fullwidthimagedownload',
        'sandsitepackage_fullwidthimagedownload',
        'sandsitepackage-fullwidthimagedownload'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_fullwidthimagedownload'] = 'sandsitepackage-fullwidthimagedownload';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_fullwidthimagedownload'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_fullwidthimagedownload'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        header,subheader,image,
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

$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_fullwidthimagedownload']['columnsOverrides'] = [
    'header' => [
        'label' => 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:figcaption',
    ],
    'subheader' => [
        'label' => 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:copyright',
    ],
];