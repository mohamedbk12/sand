<?php

declare(strict_types=1);

namespace Meddev\Meddevmachines\Domain\Model;


/**
 * This file is part of the "machines" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * Machines
 */
class Machines extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = null;

    /**
     * desc
     *
     * @var string
     */
    protected $desc = null;

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $images = null;

    /**
     * video
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $video = null;

    /**
     * group
     *
     * @var \Meddev\Meddevmachines\Domain\Model\Groupes
     */
    protected $group = null;

    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Categories>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $category = null;

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
        $this->category = $this->category ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Sets the desc
     *
     * @param string $desc
     * @return void
     */
    public function setDesc(string $desc)
    {
        $this->desc = $desc;
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
     * Returns the video
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Sets the video
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $video
     * @return void
     */
    public function setVideo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $video)
    {
        $this->video = $video;
    }

    /**
     * Returns the group
     *
     * @return \Meddev\Meddevmachines\Domain\Model\Groupes
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets the group
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Groupes $group
     * @return void
     */
    public function setGroup(\Meddev\Meddevmachines\Domain\Model\Groupes $group)
    {
        $this->group = $group;
    }

    /**
     * Adds a Categories
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $category
     * @return void
     */
    public function addCategory(\Meddev\Meddevmachines\Domain\Model\Categories $category)
    {
        $this->category->attach($category);
    }

    /**
     * Removes a Categories
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $categoryToRemove The Categories to be removed
     * @return void
     */
    public function removeCategory(\Meddev\Meddevmachines\Domain\Model\Categories $categoryToRemove)
    {
        $this->category->detach($categoryToRemove);
    }

    /**
     * Returns the category
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Categories>
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Categories> $category
     * @return void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category)
    {
        $this->category = $category;
    }
}
