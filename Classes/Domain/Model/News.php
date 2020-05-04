<?php

declare(strict_types=1);

/*
 * This file is part of TYPO3 CMS-based extension "simplenews" by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

namespace B13\Simplenews\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * An object holding all information about a news
 */
class News extends AbstractEntity
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $contents;

    /**
     * @var \DateTime
     */
    protected $publishedon;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContents(): string
    {
        return $this->contents;
    }

    public function getPublishedon(): \DateTime
    {
        return $this->publishedon;
    }
}
