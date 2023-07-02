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
 * Groupes
 */
class Groupes extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * groupnames
     *
     * @var string
     */
    protected $groupnames = null;

    /**
     * titel
     *
     * @var string
     */
    protected $titel = null;

    /**
     * Returns the groupnames
     *
     * @return string
     */
    public function getGroupnames()
    {
        return $this->groupnames;
    }

    /**
     * Sets the groupnames
     *
     * @param string $groupnames
     * @return void
     */
    public function setGroupnames(string $groupnames)
    {
        $this->groupnames = $groupnames;
    }

    /**
     * Returns the titel
     *
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * Sets the titel
     *
     * @param string $titel
     * @return void
     */
    public function setTitel(string $titel)
    {
        $this->titel = $titel;
    }
}
