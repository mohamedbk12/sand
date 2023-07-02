<?php
defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_db.xlf:';

/**
 * Custom FrontEnd User Column
 */
$customColumn = array(

    'praxisname' => [
        'label' => $ll . 'feUsers.field.praxisname',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
);
/**
 * 
 * ADD EXTEND COLUMN TO fe_users
 * 
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'fe_users',
    $customColumn
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'praxisname', '', 'after:company');
