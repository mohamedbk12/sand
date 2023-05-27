<?php
defined('TYPO3_MODE') or die();
$ll = 'LLL:EXT:sand_sitepackage/Resources/Private/Language/locallang_be.xlf:';

$temporaryColumns = array(
    'companycasid' => [
        'label' => 'Company CAS ID',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            //'readOnly' => true,
        ],
    ],
    'casid' => [
        'label' => 'CAS ID',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            //'readOnly' => true,
        ],
    ],
    'title' => array(
        'target'=> '',
        'exclude' => 1,
        'label' => $ll.'fe_users.title',
        'config' => array(
            'type' => 'input',
            'size' => 20,
            'max' => 20,
            'eval' => 'trim',
        )
    ),
    'position' => array(
        'target'=> '',
        'exclude' => 1,
        'label' => $ll.'fe_users.position',
        'config' => array(
            'type' => 'input',
            'size' => 20,
            'max' => 20,
            'eval' => 'trim',
        )
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $temporaryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'title');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'position');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', '--palette--;CAS;casPalette', '', 'after:company');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'fe_users',
    'casPalette',
    'companycasid, casid',
    ''
);
