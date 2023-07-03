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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\Domain\Model\Category
{

     /**
     * template
     *
     * @var string
     */
    protected $template = null;




    /**
     * Returns the template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets the template
     *
     * @param string $template
     * @return void
     */
    public function setTemplate(string $template)
    {
        $this->template = $template;
    }
    
}
