<?php

declare(strict_types=1);

/*
 * This file is part of TYPO3 CMS-based extension "simplenews" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

namespace B13\Simplenews\Controller;

use B13\Simplenews\Domain\Model\News;
use B13\Simplenews\Domain\Repository\NewsRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class MainController extends ActionController
{
    /**
     * @var NewsRepository
     */
    protected $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function listAction()
    {
        $news = $this->newsRepository->findForList();
        $this->view->assign('news', $news);
    }

    public function detailAction(News $news)
    {
        $this->view->assign('news', $news);
    }
}
