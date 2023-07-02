<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_meddevmachines_domain_model_categories', 'EXT:meddevmachines/Resources/Private/Language/locallang_csh_tx_meddevmachines_domain_model_categories.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_meddevmachines_domain_model_categories');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_meddevmachines_domain_model_groupes', 'EXT:meddevmachines/Resources/Private/Language/locallang_csh_tx_meddevmachines_domain_model_groupes.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_meddevmachines_domain_model_groupes');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_meddevmachines_domain_model_machines', 'EXT:meddevmachines/Resources/Private/Language/locallang_csh_tx_meddevmachines_domain_model_machines.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_meddevmachines_domain_model_machines');
})();
