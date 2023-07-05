<?php
namespace Meddev\SandSitepackage\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Core\Imaging\ImageManipulation\CropVariantCollection;
use TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\ProcessedFile;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Service\ImageService;
use TYPO3\CMS\Frontend\Resource\FileCollector;

final class DevisionViewHelper extends AbstractViewHelper
{


   public function initializeArguments()
   {
       // registerArgument($name, $type, $description, $required, $defaultValue, $escape)
       $this->registerArgument('data', 'string', '');
   }

   public function render() {
    $arguments = $this->arguments['data'];
    $arguments = $arguments/2;
    return  ceil($arguments) ;
   }
  
}