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
 * Accessoiretext
 */
class Accessoiretext extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * text
     *
     * @var string
     */
    protected $text = '';

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
}
