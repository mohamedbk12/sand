<?php
/*
*Extend News configuration
*/
defined('TYPO3_MODE') or die();
$ll = 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:';
$llNews = 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:';

$GLOBALS['TCA']['tx_news_domain_model_news']['columns']['tt_address'] = [
    'exclude' => true,
    'label' => 'LLL:EXT:tt_address/Resources/Private/Language/locallang_db.xlf:tt_address',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tt_address',
        'foreign_table_where' => 'AND tt_address.deleted = 0 AND tt_address.hidden = 0 ORDER BY tt_address.last_name ASC',
        'minitems' => 0,
        'maxitems' => 1,
        'default' => 0,
    ],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_news_domain_model_news',
    [
        'old_uid' => [
            'exclude' => true,
            'label' => 'Old UID',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'readOnly' => 1
            ],
        ],
        'old_type' => [
            'exclude' => true,
            'label' => 'Old Type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'readOnly' => 1
            ],
        ],
        'tt_address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:tt_address/Resources/Private/Language/locallang_db.xlf:tt_address',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_address',
                'foreign_table_where' => 'AND tt_address.deleted = 0 AND tt_address.hidden = 0 ORDER BY tt_address.last_name ASC',
                'minitems' => 0,
                'emptyOption' => 1,
                'maxitems' => 1,
                'default' => 0,
                'items' => [
                    ['', ''],
                ]
            ],
        ],

        'displayorderview' => [
            'exclude' => true,
            'label' => 'Display Order',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Text First', 'Text-First'],
                    ['Image First', 'Image-First'],
                ],
                'default' => 'Text-First',
            ],
        ],
        //         'press_releases' => [
        //             'exclude' => true,
        //             'label' => $ll. 'tx_news_domain_model_news.pressreleases',
        //             'config' => [
        //                 'type' => 'check',
        //                 'renderType' => 'checkboxToggle',
        //                 'items' => [
        //                     [
        //                         0 => '',
        //                         1 => '',
        //                     ]
        //                 ],
        //             ],
        //         ],
        //         'statement' => [
        //             'exclude' => true,
        //             'label' => $ll . 'tx_news_domain_model_news.statement',
        //             'config' => [
        //                 'type' => 'check',
        //                 'renderType' => 'checkboxToggle',
        //                 'items' => [
        //                     [
        //                         0 => '',
        //                         1 => '',
        //                     ]
        //                 ],
        //             ],
        //         ],
        //         'market_data' => [
        //             'exclude' => true,
        //             'label' => $ll . 'tx_news_domain_model_news.market_data',
        //             'config' => [
        //                 'type' => 'check',
        //                 'renderType' => 'checkboxToggle',
        //                 'items' => [
        //                     [
        //                         0 => '',
        //                         1 => '',
        //                     ]
        //                 ],
        //             ],
        //         ],


    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'displayorderview,tt_address', '', 'after:bodytext');
