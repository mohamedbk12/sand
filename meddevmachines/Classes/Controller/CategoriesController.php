<?php

declare(strict_types=1);

namespace Meddev\Meddevmachines\Controller;


/**
 * This file is part of the "machines" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * CategoriesController
 */
class CategoriesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $categories = $this->categoriesRepository->findAll();
        $this->view->assign('categories', $categories);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $categories
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Meddev\Meddevmachines\Domain\Model\Categories $categories): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('categories', $categories);
        return $this->htmlResponse();
    }

    /**
     * action new
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function newAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action create
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $newCategories
     */
    public function createAction(\Meddev\Meddevmachines\Domain\Model\Categories $newCategories)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoriesRepository->add($newCategories);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $categories
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("categories")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Meddev\Meddevmachines\Domain\Model\Categories $categories): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('categories', $categories);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $categories
     */
    public function updateAction(\Meddev\Meddevmachines\Domain\Model\Categories $categories)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoriesRepository->update($categories);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Categories $categories
     */
    public function deleteAction(\Meddev\Meddevmachines\Domain\Model\Categories $categories)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->categoriesRepository->remove($categories);
        $this->redirect('list');
    }
}
