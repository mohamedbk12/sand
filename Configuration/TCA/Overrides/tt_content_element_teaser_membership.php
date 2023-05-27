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
if (!isset($GLOBALS['TCA']['tt_content']['types']['sandsitepackage_teasermembership'])) {
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_teasermembership'] = [];
}

/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:teasermembership',
        'sandsitepackage_teasermembership',
        'sandsitepackage-teasermembership'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['sandsitepackage_teasermembership'] = 'sandsitepackage-teasermembership';

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_teasermembership'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['sandsitepackage_teasermembership'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header,header_layout,
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

$GLOBALS['TCA']['tt_content']['types']['sandsitepackage_teasermembership']['columnsOverrides'] = [
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
                            tx_sand_sitepackage_teaser_item2,
                            link_text,
                            email,
                            file,
                            bodytext,
                            tel,
                            link,
                            buttonslanguage,
                            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                            --palette--;;hiddenLanguagePalette,
                        '
                    ],
                ],
                'columns' => [    
                    'link_text' => [
                        'label' => $ll . 'linksHeader',
                    ],
                    'email' => [
                        'label' => $ll . 'askConditionAndService',
                    ], 
                    'file' => [
                        'label' => $ll . 'paticipationCondition',
                    ],
                    'bodytext' => [
                        'label' => $ll . 'downloadPdf',
                        'config' => [
                            'type' => 'input',
                            'size' => 50,
                            'max' => 1024,
                        ],
                    ],                
                    'tel' => [
                        'label' => $ll . 'learnMore',
                        'config' => [
                            'type' => 'input',
                            'renderType' => 'inputLink',
                            'size' => 50,
                            'max' => 1024,
                            'eval' => 'trim',
                        ],
                    ],
                    'link' => [
                        'label' => $ll . 'applicationAdmission',
                    ],  
                    'tx_sand_sitepackage_teaser_item2' => [
                        'config' => [
                            'overrideChildTca' => [
                                'types' => [
                                    '1' => [
                                        'showitem' => '
                            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            header,
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
                ]
            ],
        ],
    ],

];
