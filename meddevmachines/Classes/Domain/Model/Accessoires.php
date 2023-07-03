<?php

declare(strict_types=1);

namespace Meddev\Meddevmachines\Domain\Model;


/**
 * This file is part of the "products2" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */


/**
 * Accessoires
 */
class Accessoires extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * accessoireimages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoireimages>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $accessoireimages = null;

    /**
     * accessoiretext
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoiretext>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $accessoiretext = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->accessoireimages = $this->accessoireimages ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->accessoiretext = $this->accessoiretext ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Accessoireimages
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Accessoireimages $accessoireimage
     * @return void
     */
    public function addAccessoireimage(\Meddev\Meddevmachines\Domain\Model\Accessoireimages $accessoireimage)
    {
        $this->accessoireimages->attach($accessoireimage);
    }

    /**
     * Removes a Accessoireimages
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Accessoireimages $accessoireimageToRemove The Accessoireimages to be removed
     * @return void
     */
    public function removeAccessoireimage(\Meddev\Meddevmachines\Domain\Model\Accessoireimages $accessoireimageToRemove)
    {
        $this->accessoireimages->detach($accessoireimageToRemove);
    }

    /**
     * Returns the accessoireimages
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoireimages>
     */
    public function getAccessoireimages()
    {
        return $this->accessoireimages;
    }

    /**
     * Sets the accessoireimages
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoireimages> $accessoireimages
     * @return void
     */
    public function setAccessoireimages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $accessoireimages)
    {
        $this->accessoireimages = $accessoireimages;
    }

    /**
     * Adds a Accessoiretext
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Accessoiretext $accessoiretext
     * @return void
     */
    public function addAccessoiretext(\Meddev\Meddevmachines\Domain\Model\Accessoiretext $accessoiretext)
    {
        $this->accessoiretext->attach($accessoiretext);
    }

    /**
     * Removes a Accessoiretext
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Accessoiretext $accessoiretextToRemove The Accessoiretext to be removed
     * @return void
     */
    public function removeAccessoiretext(\Meddev\Meddevmachines\Domain\Model\Accessoiretext $accessoiretextToRemove)
    {
        $this->accessoiretext->detach($accessoiretextToRemove);
    }

    /**
     * Returns the accessoiretext
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoiretext>
     */
    public function getAccessoiretext()
    {
        return $this->accessoiretext;
    }

    /**
     * Sets the accessoiretext
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoiretext> $accessoiretext
     * @return void
     */
    public function setAccessoiretext(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $accessoiretext)
    {
        $this->accessoiretext = $accessoiretext;
    }
}
