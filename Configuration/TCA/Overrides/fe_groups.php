<?php
defined('TYPO3_MODE') or die();

$temporaryColumns = array(
    'sand_cas_sync_field' => [
        'label' => 'CAS Sync Feld',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            //'readOnly' => true,
        ],
    ],
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_groups', $temporaryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_groups', 'sand_cas_sync_field');