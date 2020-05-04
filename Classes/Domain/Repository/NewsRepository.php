<?php

declare(strict_types=1);

/*
 * This file is part of TYPO3 CMS-based extension "simplenews" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

namespace B13\Simplenews\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class NewsRepository extends Repository
{
    protected $defaultOrderings = [
        'publishedon' => QueryInterface::ORDER_DESCENDING
    ];

    public function findForList()
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalNot(
                $query->equals('publishedon', 0)
            ),
            $query->lessThanOrEqual('publishedon', $GLOBALS['EXEC_TIME'])
        );
        return $query->execute();
    }
}
