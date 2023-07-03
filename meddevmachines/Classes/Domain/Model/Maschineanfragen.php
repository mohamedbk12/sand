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
 * Maschineanfragen
 */
class Maschineanfragen extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $images = null;

    /**
     * header
     *
     * @var string
     */
    protected $header = '';

    /**
     * text
     *
     * @var string
     */
    protected $text = '';

    /**
     * machineinfo
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Machineinfo>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $machineinfo = null;

    /**
     * cuttinginformation
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Cuttinginformation>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $cuttinginformation = null;

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
        $this->machineinfo = $this->machineinfo ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->cuttinginformation = $this->cuttinginformation ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the header
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets the header
     *
     * @param string $header
     * @return void
     */
    public function setHeader(string $header)
    {
        $this->header = $header;
    }

    /**
     * Returns the text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * Adds a Machineinfo
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Machineinfo $machineinfo
     * @return void
     */
    public function addMachineinfo(\Meddev\Meddevmachines\Domain\Model\Machineinfo $machineinfo)
    {
        $this->machineinfo->attach($machineinfo);
    }

    /**
     * Removes a Machineinfo
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Machineinfo $machineinfoToRemove The Machineinfo to be removed
     * @return void
     */
    public function removeMachineinfo(\Meddev\Meddevmachines\Domain\Model\Machineinfo $machineinfoToRemove)
    {
        $this->machineinfo->detach($machineinfoToRemove);
    }

    /**
     * Returns the machineinfo
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Machineinfo>
     */
    public function getMachineinfo()
    {
        return $this->machineinfo;
    }

    /**
     * Sets the machineinfo
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Machineinfo> $machineinfo
     * @return void
     */
    public function setMachineinfo(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $machineinfo)
    {
        $this->machineinfo = $machineinfo;
    }

    /**
     * Adds a Cuttinginformation
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Cuttinginformation $cuttinginformation
     * @return void
     */
    public function addCuttinginformation(\Meddev\Meddevmachines\Domain\Model\Cuttinginformation $cuttinginformation)
    {
        $this->cuttinginformation->attach($cuttinginformation);
    }

    /**
     * Removes a Cuttinginformation
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Cuttinginformation $cuttinginformationToRemove The Cuttinginformation to be removed
     * @return void
     */
    public function removeCuttinginformation(\Meddev\Meddevmachines\Domain\Model\Cuttinginformation $cuttinginformationToRemove)
    {
        $this->cuttinginformation->detach($cuttinginformationToRemove);
    }

    /**
     * Returns the cuttinginformation
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Cuttinginformation>
     */
    public function getCuttinginformation()
    {
        return $this->cuttinginformation;
    }

    /**
     * Sets the cuttinginformation
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Cuttinginformation> $cuttinginformation
     * @return void
     */
    public function setCuttinginformation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $cuttinginformation)
    {
        $this->cuttinginformation = $cuttinginformation;
    }
}
