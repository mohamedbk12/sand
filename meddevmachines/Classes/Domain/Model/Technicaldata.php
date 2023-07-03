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
 * Technicaldata
 */
class Technicaldata extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * maschinensize
     *
     * @var string
     */
    protected $maschinensize = '';

    /**
     * tablesize
     *
     * @var string
     */
    protected $tablesize = '';

    /**
     * workingrange
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Workingrange>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $workingrange = null;

    /**
     * workpiece
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Workpiece>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $workpiece = null;

    /**
     * maxspeed
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Maxspeed>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $maxspeed = null;

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
        $this->workingrange = $this->workingrange ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->workpiece = $this->workpiece ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->maxspeed = $this->maxspeed ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the maschinensize
     *
     * @return string
     */
    public function getMaschinensize()
    {
        return $this->maschinensize;
    }

    /**
     * Sets the maschinensize
     *
     * @param string $maschinensize
     * @return void
     */
    public function setMaschinensize(string $maschinensize)
    {
        $this->maschinensize = $maschinensize;
    }

    /**
     * Returns the tablesize
     *
     * @return string
     */
    public function getTablesize()
    {
        return $this->tablesize;
    }

    /**
     * Sets the tablesize
     *
     * @param string $tablesize
     * @return void
     */
    public function setTablesize(string $tablesize)
    {
        $this->tablesize = $tablesize;
    }

    /**
     * Adds a Workingrange
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Workingrange $workingrange
     * @return void
     */
    public function addWorkingrange(\Meddev\Meddevmachines\Domain\Model\Workingrange $workingrange)
    {
        $this->workingrange->attach($workingrange);
    }

    /**
     * Removes a Workingrange
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Workingrange $workingrangeToRemove The Workingrange to be removed
     * @return void
     */
    public function removeWorkingrange(\Meddev\Meddevmachines\Domain\Model\Workingrange $workingrangeToRemove)
    {
        $this->workingrange->detach($workingrangeToRemove);
    }

    /**
     * Returns the workingrange
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Workingrange>
     */
    public function getWorkingrange()
    {
        return $this->workingrange;
    }

    /**
     * Sets the workingrange
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Workingrange> $workingrange
     * @return void
     */
    public function setWorkingrange(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $workingrange)
    {
        $this->workingrange = $workingrange;
    }

    /**
     * Adds a Workpiece
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Workpiece $workpiece
     * @return void
     */
    public function addWorkpiece(\Meddev\Meddevmachines\Domain\Model\Workpiece $workpiece)
    {
        $this->workpiece->attach($workpiece);
    }

    /**
     * Removes a Workpiece
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Workpiece $workpieceToRemove The Workpiece to be removed
     * @return void
     */
    public function removeWorkpiece(\Meddev\Meddevmachines\Domain\Model\Workpiece $workpieceToRemove)
    {
        $this->workpiece->detach($workpieceToRemove);
    }

    /**
     * Returns the workpiece
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Workpiece>
     */
    public function getWorkpiece()
    {
        return $this->workpiece;
    }

    /**
     * Sets the workpiece
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Workpiece> $workpiece
     * @return void
     */
    public function setWorkpiece(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $workpiece)
    {
        $this->workpiece = $workpiece;
    }

    /**
     * Adds a Maxspeed
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Maxspeed $maxspeed
     * @return void
     */
    public function addMaxspeed(\Meddev\Meddevmachines\Domain\Model\Maxspeed $maxspeed)
    {
        $this->maxspeed->attach($maxspeed);
    }

    /**
     * Removes a Maxspeed
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Maxspeed $maxspeedToRemove The Maxspeed to be removed
     * @return void
     */
    public function removeMaxspeed(\Meddev\Meddevmachines\Domain\Model\Maxspeed $maxspeedToRemove)
    {
        $this->maxspeed->detach($maxspeedToRemove);
    }

    /**
     * Returns the maxspeed
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Maxspeed>
     */
    public function getMaxspeed()
    {
        return $this->maxspeed;
    }

    /**
     * Sets the maxspeed
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Maxspeed> $maxspeed
     * @return void
     */
    public function setMaxspeed(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $maxspeed)
    {
        $this->maxspeed = $maxspeed;
    }
}
