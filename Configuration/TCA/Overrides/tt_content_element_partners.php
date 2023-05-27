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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_partners'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_partners'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:partners',
        'sandsitepackage_partners',
        'sandsitepackage-partners'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_partners'] = 'sandsitepackage-partnerse';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_partners'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_partners'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header,header_layout,show_icon,
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



$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_partners']['columnsOverrides'] = [
    'show_icon' => [
        'label' => 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:container',
        'config' => [
            'type' => 'check',
            'items' => [
                ['Container for Images', '1'],
            ],
        ]
    ],
    'tx_sand_sitepackage_teaser_item' => [
        'config' => [
            'overrideChildTca' => [
                'types' => [
                    '1' => [
                        'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            image,
                            link,
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
