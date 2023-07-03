<?php

defined('TYPO3_MODE') or die();


/**
 * Add extra fields to the sys_category record
 */
$newSysCategoryColumns = [

    'template' =>[
        'exclude' => true,
        'label' => 'Select template for Products',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
              '0' => [
                '0' => 'Template 1',
                '1' => 1,
              ],
              '1' => [
                '0' => 'Template 2',
                '1' => 2,
              ],
              '2' => [
                '0' => 'Template 3',
                '1' => 3,
              ],
            ],
          ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $newSysCategoryColumns);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'sys_category',
    'template',
    '',
    'after:title'
);
