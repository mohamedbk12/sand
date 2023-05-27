<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['sand_sitepackage'] = 'EXT:sand_sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:sand_sitepackage/Configuration/TsConfig/Page/All.tsconfig">');

// extend sf register classes
// $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['sf_register']['extender'][\Evoweb\SfRegister\Domain\Model\FrontendUser::class]['SandSitepackage'] = 'EXT:sand_sitepackage/Classes/Domain/Model/FrontendUser.php';
// $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['sf_register']['extender'][\Evoweb\SfRegister\Domain\Repository\FrontendUserRepository::class]['SandSitepackage'] = 'EXT:sand_sitepackage/Classes/Domain/Repository/FrontendUserRepository.php';

// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
//     '@import \'EXT:sand_sitepackage/Configuration/TypoScript/Extension/SfRegister/Fields.typoscript\''
//     );
/**************************
 * Register Icons
 **************************/
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconsContentElements = ['partners', 'hero', 'socialmediawall', 'teasergrid','download','contactteaser', 'sharelinks', 'stickylinks', 'newsletterplaceholder' , 'jumpmarks', 'subpageheader', 'twocolumnteasers', 'quoteteaser', 'text', 'downloadlist', 'sidebardownloadlist', 'fullwidthimagedownload', 'contributioncalculator', 'teasermembership', 'internalexternallinks', 'registerconfirm'];
$iconsExtensions = [''];

/* Register ContentElements Icons */
foreach ($iconsContentElements as $icon) {
    $iconRegistry->registerIcon(
        'sandsitepackage-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:sand_sitepackage/Resources/Public/Icons/ContentElements/' . $icon . '.svg']
    );
}

/* Register Extension Icons */
foreach ($iconsExtensions as $icon) {
    $iconRegistry->registerIcon(
        'sandsitepackage-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:sand_sitepackage/Resources/Public/Icons/Extension/' . $icon . '.svg']
    );
}


/**EXTEND felogin  **/
// if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('felogin')) {


//     /**Extend felogin Language Files */
//     $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:felogin/Resources/Private/Language/locallang.xlf'][] = 'EXT:sand_sitepackage/Resources/Private/Language/felogin/locallang.xlf';
// }

/***************
 * FlexForms Extend
 */
// $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][]
// = \Meddev\SandSitepackage\Hooks\Backend\FlexForms\FlexFormHook::class;

/****************************
 ** Extend News Extension **
 ***************************/
// if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')) {

//     $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'sand_sitepackage';
//     $GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/Dto/Search'][] = 'sand_sitepackage';

//     $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['GeorgRinger\\News\\Domain\\Repository\\NewsRepository'] = array(
//         'className' => 'Meddev\\SandSitepackage\\Domain\\Repository\\NewsRepository'
//     );

//     // Extend News Controller
//     $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['GeorgRinger\\News\\Controller\\NewsController'] = array(
//         'className' => 'Meddev\\SandSitepackage\\Controller\\NewsController'
//     );
// }

// /**EXTEND Sf_register **/
//  if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('sf_register')) {
//     // $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['sf_register']['extender'][\Evoweb\SfRegister\Domain\Model\FrontendUser::class]['sand_sitepackage'] =
//     // 'EXT:sand_sitepackage/Classes/Domain/Model/FrontendUser.php';

//     //Register New field
//     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
//         '@import \'EXT:sand_sitepackage/Configuration/TypoScript/Extension/SfRegister/Fields.typoscript\''
//     );

//     //Extend Language Sf_register
//     /**Extend LAnguage Files */
    //  $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:sf_register/Resources/Private/Language/locallang.xlf'][] = 'EXT:sand_sitepackage/Resources/Private/Language/sf_register/locallang.xlf';
//  }


/****************************
 ** Extend tt_address Extension **
 ***************************/
// if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('tt_address')) {
//     // Extend News Controller
//     $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['FriendsOfTYPO3\\TtAddress\\Controller\\AddressController'] = array(
//         'className' => 'Meddev\\SandSitepackage\\Controller\\AddressController'
//     );
// }