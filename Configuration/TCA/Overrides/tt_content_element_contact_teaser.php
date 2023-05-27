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
    if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contactteaser'])) {
        $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contactteaser'] = [];
    }


/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:contactteaser',
        'sandsitepackage_contactteaser',
        'sandsitepackage-contactteaser'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_contactteaser'] = 'sandsitepackage-contactteaser';

/***************
 * Configure element type
 */

    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contactteaser'] = array_replace_recursive(
        $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contactteaser'],
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

    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_contactteaser']['columnsOverrides'] = [
        'tx_sand_sitepackage_teaser_item' => [
            'config' => [
                'overrideChildTca' => [
                    'types' => [
                        '1' => [
                            'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            image,
                            header,
                            subheader,
                            email,
                            tel,
                            link_text,
                            links_title,
                            tx_sand_sitepackage_teaser_item2,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --palette--;;hiddenLanguagePalette,
                        '
                        ],
                    ],
                    'columns' => [
                        'header' => [
                            'label' => $ll . 'name',
                        ],
                        'subheader' => [
                            'label' => $ll . 'address',
                            'config' => [
                                'type' => 'input',
                                'eval' => 'trim',
                            ],
                        ],
                        'link_text' => [
                            'label' => $ll . 'linkedin'
                        ],
                        'tx_sand_sitepackage_teaser_item2' => [
                            'config' => [
                                'overrideChildTca' => [
                                    'types' => [
                                        '1' => [
                                            'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            --palette--;' . $ll . 'link;linkpalette,
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
                    ],
                ],
            ],
        ],

    ];