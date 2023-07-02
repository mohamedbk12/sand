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

final class GetPageImageViewHelper extends AbstractViewHelper
{


   public function initializeArguments()
   {
       // registerArgument($name, $type, $description, $required, $defaultValue, $escape)
       $this->registerArgument('data', 'array', '');
   }

   public function render() {
    $arguments = $this->arguments['data'];

    if (!empty($arguments['image'])) {
        $fileCollector = GeneralUtility::makeInstance(FileCollector::class);
        $fileCollector->addFilesFromRelation('pages', 'image', $arguments);
        $image =  $fileCollector->getFiles();
       $imagePath = $image[0]->getOriginalFile()->getIdentifier();
    }



       return  $imagePath ;
   }
  
}