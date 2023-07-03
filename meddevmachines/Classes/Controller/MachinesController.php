<?php

declare(strict_types=1);

namespace Meddev\Meddevmachines\Controller;

use Meddev\Meddevmachines\Domain\Repository\MachinesRepository;
use Meddev\Meddevmachines\Domain\Repository\CategoryRepository;

/**
 * This file is part of the "machines" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2023 
 */

/**
 * MachinesController
 */
class MachinesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * CategoryRepository
     *
     * @var CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @var MachinesRepository
     */
    public $machinesRepository;

    /**
     * Inject the repository
     *
     * @param MachinesRepository $machinesRepository
     */
    public function __construct(MachinesRepository $machinesRepository
    , CategoryRepository $categoryRepository)
    {
        $this->machinesRepository = $machinesRepository;
        $this->categoryRepository = $categoryRepository;
    }



    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $machines = $this->machinesRepository->findAll();
        $this->view->assign('machines', $machines);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Machines $machines
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Meddev\Meddevmachines\Domain\Model\Machines $machines): \Psr\Http\Message\ResponseInterface
    {
        debug( $machines);
        $this->view->assign('machines', $machines);
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
     * @param \Meddev\Meddevmachines\Domain\Model\Machines $newMachines
     */
    public function createAction(\Meddev\Meddevmachines\Domain\Model\Machines $newMachines)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->machinesRepository->add($newMachines);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Machines $machines
     * @TYPO3\CMS\Extbase\Annotation\IgnoreValidation("machines")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function editAction(\Meddev\Meddevmachines\Domain\Model\Machines $machines): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('machines', $machines);
        return $this->htmlResponse();
    }

    /**
     * action update
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Machines $machines
     */
    public function updateAction(\Meddev\Meddevmachines\Domain\Model\Machines $machines)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->machinesRepository->update($machines);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \Meddev\Meddevmachines\Domain\Model\Machines $machines
     */
    public function deleteAction(\Meddev\Meddevmachines\Domain\Model\Machines $machines)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/p/friendsoftypo3/extension-builder/master/en-us/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->machinesRepository->remove($machines);
        $this->redirect('list');
    }
}