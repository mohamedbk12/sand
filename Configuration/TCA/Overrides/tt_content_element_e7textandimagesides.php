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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e7textandimagesides'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e7textandimagesides'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'E-7 text and image sides',
        'sandsitepackage_e7textandimagesides',
        'sandsitepackage-e7textandimagesides'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_e7textandimagesides'] = 'sandsitepackage-e7textandimagesides';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e7textandimagesides'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e7textandimagesides'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            slider_type,background,image,image_position,header,bodytext,link,link_text,
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





$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_e7textandimagesides']['columnsOverrides'] = [
    'slider_type' => [
        'exclude' => true,
        'label' => 'Display type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['6/6', '6/6'],
                ['3/9', '3/9'],
                ['4/8', '4/8'],
                ['8/4', '8/4'],
                ['9/3', '9/3'],
            ],
            'default' => ''
        ]
    ],
    'background' => [
        'exclude' => 1,
        'label' =>  'background',
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
    'image_position' => [
        'label' => 'image Position',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['Left Image', ''],
                ['Right Image', 'reverse'],
            ],
            
        ]
    ],
];


