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
 * GroupesController
 */
class GroupesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $groupes = $this->groupesRepository->findAll();
        $this->view->assign('groupes', $groupes);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Groupes $groupes
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Meddev\Meddevmachines\Domain\Model\Groupes $groupes): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('groupes', $groupes);
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
     * @param \Meddev\Meddevmachines\Domain\Model\Groupes $newGroupes
     */
    public function createAction(\Meddev\Meddevmachines\Domain\Model\Groupes $newGroupes)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->groupesRepository->add($newGroupes);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Groupes $groupes
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("groupes")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Meddev\Meddevmachines\Domain\Model\Groupes $groupes): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('groupes', $groupes);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Groupes $groupes
     */
    public function updateAction(\Meddev\Meddevmachines\Domain\Model\Groupes $groupes)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->groupesRepository->update($groupes);
        $this->redirect('list');
    }
}
