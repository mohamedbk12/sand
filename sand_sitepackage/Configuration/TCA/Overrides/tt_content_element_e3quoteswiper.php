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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e3quoteswiper'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e3quoteswiper'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-3 quote Swiper',
        'sandsitepackage_e3quoteswiper',
        'sandsitepackage-e3quoteswiper'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e3quoteswiper'] = 'sandsitepackage-e3quoteswiper';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e3quoteswiper'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e3quoteswiper'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            slider_type,image,link,link_text,tx_sand_sitepackage_teaser_item,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                        rowDescription,        
            --div--;spacement,
            space_before_class,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        '
    ]
);


$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e3quoteswiper']['columnsOverrides'] = [
    'tx_sand_sitepackage_teaser_item' => [
        'config' => [
            'overrideChildTca' => [
                'types' => [
                    '1' => [
                        'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            image,header,bodytext,link,link_text,
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



$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e3quoteswiper']['columnsOverrides'] = [

    'slider_type' => [
        'config' => [
            'items' => [
                ['slider type (3) Big text small image', '3'],
                ['slider type (4) equal image and text box', '4'],
            ],
        ],
    ],
];