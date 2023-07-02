<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Meddevmachines',
        'Machines',
        [
            \Meddev\Meddevmachines\Controller\MachinesController::class => 'list, show'
        ],
        // non-cacheable actions
        [
            \Meddev\Meddevmachines\Controller\MachinesController::class => 'list, show'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    machines {
                        iconIdentifier = meddevmachines-plugin-machines
                        title = LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_machines.name
                        description = LLL:EXT:meddevmachines/Resources/Private/Language/locallang_db.xlf:tx_meddevmachines_machines.description
                        tt_content_defValues {
                            CType = list
                            list_type = meddevmachines_machines
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
