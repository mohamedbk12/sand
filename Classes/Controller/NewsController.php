<?php

namespace Meddev\SandSitepackage\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use GeorgRinger\News\Event\NewsSearchResultActionEvent;
use GeorgRinger\News\Pagination\QueryResultPaginator;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use GeorgRinger\News\Domain\Model\Dto\Search;
use GeorgRinger\News\Event\NewsSearchFormActionEvent;

/**
 * Controller of news records
 *
 */
class NewsController extends \GeorgRinger\News\Controller\NewsController
 {
//     /**
//      * @var \Meddev\SandSitepackage\Domain\Repository\NewsRepository
//      */
//     protected $newsRepository;
//     /**
//      * Display the search form
//      *
//      * @param \GeorgRinger\News\Domain\Model\Dto\Search $search
//      * @param array $overwriteDemand
//      *
//      * @return void
//      */
//     public function searchFormAction(
//         Search $search = null,
//         array $overwriteDemand = []
//     ): void {
//         //init values
//         $checksearchAction = null;
//         $control = null;
//         $searchcateg = array();
//         $selected = null;
//         $date = array();
//         $request = $this->request->getArguments();
//         if ($request) $checksearchAction  = 1;
//         $categories = $this->categoryRepository->findAll();
//         if ($this->request->hasArgument('control')) {
//             $control = $this->request->getArgument('control');
//         }
//         $this->settings['categories'] = $this->settings['categoriesfilter'];
//         $demand = $this->createDemandObjectFromSettings($this->settings);
//         $demand->setActionAndClass(__METHOD__, __CLASS__);
//         if ($this->settings['disableOverrideDemand'] != 1 && $overwriteDemand !== null) {
//             $demand = $this->overwriteDemandObject($demand, $overwriteDemand);
//         }
//         if ($this->request->hasArgument('searchcateg')) {
//             $searchcateg = $this->request->getArgument('searchcateg');
//         }
//         if ($categories) {
//             foreach ($categories as $val => $categorie) {
//                 if (isset($searchcateg['category']) && $searchcateg['category']) {
//                     if (in_array($categorie->getUid(), $searchcateg['category'])) {
//                         $selected[$val] = 'selected';
//                     }
//                 }
//             }
//         }


//         if (is_null($search)) {
//             $search = GeneralUtility::makeInstance(Search::class);
//         }
//         if (isset($request['minimumDate']) && !$this->request->hasArgument('reset')) {
//             $date['minimumDate'] = $request['minimumDate'];
//         }
//         if (isset($request['maximumDate']) && !$this->request->hasArgument('reset')) {
//             $date['maximumDate'] = $request['maximumDate'];
//         }
//         if ($this->request->hasArgument('reset')) {
//             $selected = null;
//             $search->setSubject('');
//         }
//         $demendedCategories = count($demand->getCategories());
//         $demand->setSearch($search);
//         $assignedValues = [
//             'searchcateg' => $searchcateg,
//             'selected' => $selected,
//             'search' => $search,
//             'date' => $date,
//             'overwriteDemand' => $overwriteDemand,
//             'demand' => $demand,
//             'categories' => $categories,
//             'control' => $control,
//             'checksearchAction' => $checksearchAction,
//             'demendedCategories' => $demendedCategories,
//             'settings' => $this->settings

//         ];

//         $event = $this->eventDispatcher->dispatch(new NewsSearchFormActionEvent($this, $assignedValues, $this->request));

//         $this->view->assignMultiple($event->getAssignedValues());
//     }



//     /**
//      * Displays the search result
//      *
//      * @param \Meddev\SandSitepackage\Domain\Model\Dto $search
//      * @param array $overwriteDemand
//      *
//      * @return void
//      */
//     public function searchResultAction(
//         Search $search = null,
//         array $overwriteDemand = []
//     ): void {
//         $showDefaultCategorie = false;
//         $serchVal = '';
//         $settings = $this->settings;
//         $recordNumber = 0;
//         $request = $this->request->getArguments();
//         if ($this->request->hasArgument('search')) {
//             if ($this->request->hasArgument('searchcateg')) {
//                 $searchcateg = $this->request->getArgument('searchcateg');
//             }
//             if (isset($searchcateg['category']) && is_array($searchcateg['category'])) {
//                 foreach ($searchcateg['category'] as $key => $val) {
//                     $serchVal .= $val . ',';
//                 }
//                 $serchVal =  rtrim($serchVal, ",");
//             } else {
//                 $showDefaultCategorie = true;
//             }
//             if ($serchVal) {

//                 $settings['categories'] = $serchVal;
//             }
//         } else {
//             $showDefaultCategorie = true;
//         }
//         if ($this->request->hasArgument('reset')) {
//             $showDefaultCategorie = true;
//             $search->setSubject('');
//         }


//         $demand = $this->createDemandObjectFromSettings($settings);
//         $demand->setActionAndClass(__METHOD__, __CLASS__);
//         if ($this->settings['disableOverrideDemand'] != 1 && $overwriteDemand !== null) {
//             $demand = $this->overwriteDemandObject($demand, $overwriteDemand);
//         }
//         if (!is_null($search)) {
//             if ($request['minimumDate'] && !$this->request->hasArgument('reset')) {
//                 $search->setMinimumDate(str_replace("/", "-", $request['minimumDate']));
//             } else {
//                 $search->setMinimumDate("");
//             }
//             if ($request['maximumDate'] && !$this->request->hasArgument('reset')) {
//                 $search->setMaximumDate(str_replace("/", "-", $request['maximumDate']));
//             } else {
//                 $search->setMaximumDate("");
//             }
//             $search->setFields($this->settings['search']['fields']);
//             $search->setDateField($this->settings['dateField']);
//             $search->setSplitSubjectWords((bool)$this->settings['search']['splitSearchWord']);
//         }
//         $demand->setSearch($search);
//         if ($showDefaultCategorie && !empty($this->settings['categoriesfilter'])) {
//             $categories_arr = preg_split("/\,/", $this->settings['categoriesfilter']);
//             $demand->setCategories($categories_arr);
//         }
//         $newsRecords = $this->newsRepository->findDemanded($demand);
//         $recordNumber = count($newsRecords);
//         //pagination
//         $paginationConfiguration = $this->settings['search']['paginate'] ?? [];
//         $itemsPerPage = 10;
//         if ($this->settings['list']['paginate']['itemsPerPage']) {
//             $itemsPerPage = $this->settings['list']['paginate']['itemsPerPage'];
//         }
//         $maximumNumberOfLinks = (int)($paginationConfiguration['maximumNumberOfLinks'] ?? 0);
//         $currentPage = max(1, $this->request->hasArgument('currentPage') ? (int)$this->request->getArgument('currentPage') : 1);
//         $paginator = GeneralUtility::makeInstance(QueryResultPaginator::class, $newsRecords, $currentPage, $itemsPerPage, (int)($this->settings['limit'] ?? 0), (int)($this->settings['offset'] ?? 0));
//         $paginationClass = $paginationConfiguration['class'] ?? SimplePagination::class;
//         $pagination = $this->getPagination($paginationClass, $maximumNumberOfLinks, $paginator);

//         $assignedValues = [
//             'news' => $newsRecords,
//             'overwriteDemand' => $overwriteDemand,
//             'recordNumber' => $recordNumber,
//             'search' => $search,
//             'demand' => $demand,
//             'settings' => $this->settings,
//             'pagination' => [
//                 'currentPage' => $currentPage,
//                 'paginator' => $paginator,
//                 'pagination' => $pagination,
//             ]
//         ];
//         $event = $this->eventDispatcher->dispatch(new NewsSearchResultActionEvent($this, $assignedValues, $this->request));

//         $this->view->assignMultiple($event->getAssignedValues());
//     }
}
