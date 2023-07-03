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
    protected $name = '';

    /**
     * images
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
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
     * subheader
     *
     * @var string
     */
    protected $subheader = '';

    /**
     * link
     *
     * @var string
     */
    protected $link = '';

    /**
     * linktext
     *
     * @var string
     */
    protected $linktext = '';

    /**
     * video
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $video = null;

    /**
     * videotitel
     *
     * @var string
     */
    protected $videotitel = '';

    /**
     * videotext
     *
     * @var string
     */
    protected $videotext = '';

    /**
     * videolink
     *
     * @var string
     */
    protected $videolink = '';

    /**
     * videolinktext
     *
     * @var string
     */
    protected $videolinktext = '';

    /**
     * subimages
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $subimages = null;

    /**
     * subimagesTitel
     *
     * @var string
     */
    protected $subimagesTitel = '';

    /**
     * caracteristique
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Caracteristique>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $caracteristique = null;

    /**
     * maschineanfragen
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Maschineanfragen>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $maschineanfragen = null;

    /**
     * technicaldata
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Technicaldata>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $technicaldata = null;

    
    /**
     * accessoires
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoires>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $accessoires = null;

    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Category>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $categories;

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
        $this->caracteristique = $this->caracteristique ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->maschineanfragen = $this->maschineanfragen ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->technicaldata = $this->technicaldata ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->accessoires = $this->accessoires ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->images = $this->images ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->subimages = $this->subimages ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the images
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
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
     * Returns the subheader
     *
     * @return string
     */
    public function getSubheader()
    {
        return $this->subheader;
    }

    /**
     * Sets the subheader
     *
     * @param string $subheader
     * @return void
     */
    public function setSubheader(string $subheader)
    {
        $this->subheader = $subheader;
    }

    /**
     * Returns the link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink(string $link)
    {
        $this->link = $link;
    }

    /**
     * Returns the linktext
     *
     * @return string
     */
    public function getLinktext()
    {
        return $this->linktext;
    }

    /**
     * Sets the linktext
     *
     * @param string $linktext
     * @return void
     */
    public function setLinktext(string $linktext)
    {
        $this->linktext = $linktext;
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
     * Returns the videotitel
     *
     * @return string
     */
    public function getVideotitel()
    {
        return $this->videotitel;
    }

    /**
     * Sets the videotitel
     *
     * @param string $videotitel
     * @return void
     */
    public function setVideotitel(string $videotitel)
    {
        $this->videotitel = $videotitel;
    }

    /**
     * Returns the videotext
     *
     * @return string
     */
    public function getVideotext()
    {
        return $this->videotext;
    }

    /**
     * Sets the videotext
     *
     * @param string $videotext
     * @return void
     */
    public function setVideotext(string $videotext)
    {
        $this->videotext = $videotext;
    }

    /**
     * Returns the videolink
     *
     * @return string
     */
    public function getVideolink()
    {
        return $this->videolink;
    }

    /**
     * Sets the videolink
     *
     * @param string $videolink
     * @return void
     */
    public function setVideolink(string $videolink)
    {
        $this->videolink = $videolink;
    }

    /**
     * Returns the videolinktext
     *
     * @return string
     */
    public function getVideolinktext()
    {
        return $this->videolinktext;
    }

    /**
     * Sets the videolinktext
     *
     * @param string $videolinktext
     * @return void
     */
    public function setVideolinktext(string $videolinktext)
    {
        $this->videolinktext = $videolinktext;
    }

    /**
     * Returns the subimages
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    public function getSubimages()
    {
        return $this->subimages;
    }

    /**
     * Sets the subimages
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $subimages
     * @return void
     */
    public function setSubimages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $subimages)
    {
        $this->subimages = $subimages;
    }

    /**
     * Returns the subimagesTitel
     *
     * @return string
     */
    public function getSubimagesTitel()
    {
        return $this->subimagesTitel;
    }

    /**
     * Sets the subimagesTitel
     *
     * @param string $subimagesTitel
     * @return void
     */
    public function setSubimagesTitel(string $subimagesTitel)
    {
        $this->subimagesTitel = $subimagesTitel;
    }

    /**
     * Adds a Caracteristique
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Caracteristique $caracteristique
     * @return void
     */
    public function addCaracteristique(\Meddev\Meddevmachines\Domain\Model\Caracteristique $caracteristique)
    {
        $this->caracteristique->attach($caracteristique);
    }

    /**
     * Removes a Caracteristique
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Caracteristique $caracteristiqueToRemove The Caracteristique to be removed
     * @return void
     */
    public function removeCaracteristique(\Meddev\Meddevmachines\Domain\Model\Caracteristique $caracteristiqueToRemove)
    {
        $this->caracteristique->detach($caracteristiqueToRemove);
    }

    /**
     * Returns the caracteristique
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Caracteristique>
     */
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }

    /**
     * Sets the caracteristique
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Caracteristique> $caracteristique
     * @return void
     */
    public function setCaracteristique(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $caracteristique)
    {
        $this->caracteristique = $caracteristique;
    }

    /**
     * Adds a Maschineanfragen
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Maschineanfragen $maschineanfragen
     * @return void
     */
    public function addMaschineanfragen(\Meddev\Meddevmachines\Domain\Model\Maschineanfragen $maschineanfragen)
    {
        $this->maschineanfragen->attach($maschineanfragen);
    }

    /**
     * Removes a Maschineanfragen
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Maschineanfragen $maschineanfragenToRemove The Maschineanfragen to be removed
     * @return void
     */
    public function removeMaschineanfragen(\Meddev\Meddevmachines\Domain\Model\Maschineanfragen $maschineanfragenToRemove)
    {
        $this->maschineanfragen->detach($maschineanfragenToRemove);
    }

    /**
     * Returns the maschineanfragen
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Maschineanfragen>
     */
    public function getMaschineanfragen()
    {
        return $this->maschineanfragen;
    }

    /**
     * Sets the maschineanfragen
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Maschineanfragen> $maschineanfragen
     * @return void
     */
    public function setMaschineanfragen(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $maschineanfragen)
    {
        $this->maschineanfragen = $maschineanfragen;
    }

    /**
     * Adds a Technicaldata
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Technicaldata $technicaldatum
     * @return void
     */
    public function addTechnicaldatum(\Meddev\Meddevmachines\Domain\Model\Technicaldata $technicaldatum)
    {
        $this->technicaldata->attach($technicaldatum);
    }

    /**
     * Removes a Technicaldata
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Technicaldata $technicaldatumToRemove The Technicaldata to be removed
     * @return void
     */
    public function removeTechnicaldatum(\Meddev\Meddevmachines\Domain\Model\Technicaldata $technicaldatumToRemove)
    {
        $this->technicaldata->detach($technicaldatumToRemove);
    }

    /**
     * Returns the technicaldata
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Technicaldata>
     */
    public function getTechnicaldata()
    {
        return $this->technicaldata;
    }

    /**
     * Sets the technicaldata
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Technicaldata> $technicaldata
     * @return void
     */
    public function setTechnicaldata(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $technicaldata)
    {
        $this->technicaldata = $technicaldata;
    }




    
    /**
     * Adds a Accessoires
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Accessoires $accessoire
     * @return void
     */
    public function addAccessoire(\Meddev\Meddevmachines\Domain\Model\Accessoires $accessoire)
    {
        $this->accessoires->attach($accessoire);
    }

    /**
     * Removes a Accessoires
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Accessoires $accessoireToRemove The Accessoires to be removed
     * @return void
     */
    public function removeAccessoire(\Meddev\Meddevmachines\Domain\Model\Accessoires $accessoireToRemove)
    {
        $this->accessoires->detach($accessoireToRemove);
    }

    /**
     * Returns the accessoires
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoires>
     */
    public function getAccessoires()
    {
        return $this->accessoires;
    }

    /**
     * Sets the accessoires
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Accessoires> $accessoires
     * @return void
     */
    public function setAccessoires(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $accessoires)
    {
        $this->accessoires = $accessoires;
    }




    /**
     * Get categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Meddev\Meddevmachines\Domain\Model\Category>
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set categories
     *
     * @param  \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
     * @return void
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

}