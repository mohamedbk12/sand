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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e20contentimg2'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e20contentimg2'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-20 content image 2',
        'sandsitepackage_e20contentimg2',
        'sandsitepackage-e20contentimg2'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e20contentimg2'] = 'sandsitepackage-e20contentimg2';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e20contentimg2'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e20contentimg2'],
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

$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e20contentimg2']['columnsOverrides'] = [
    'slider_type' => [
        'config' => [
            'items' => [
                ['bleu', 'content-bg py-14 lg:px-14 px-5 bg-color-blue lg:absolute static left-20 top-2/4 lg:-translate-y-2/4 lg:max-w-[700px]'],
                ['blure', 'col-span-12 xl:col-span-4 flex items-center content-bg-blur-2xl left-white lg:absolute static left-32 top-2/4 lg:-translate-y-2/4 lg:max-w-[700px] lg:bg-color-transparent bg-color-blue'],
                 ['white', 'content-bg py-14 lg:px-14 px-5 bg-color-white lg:absolute static left-32 top-2/4 lg:-translate-y-2/4 lg:max-w-[400px]'],
           ],
        ],
    ],
];