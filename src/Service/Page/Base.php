<?php

declare(strict_types=1);

namespace App\Service\Page;

use App\Entity\Page;
use App\Repository\PageRepository;
use App\Service\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    /** @var PageRepository */
    protected $pageRepository;

    public function __construct(
        PageRepository $pageRepository
    ) {
        $this->pageRepository = $pageRepository;
    }

    protected function getPageRepository(): PageRepository
    {
        return $this->pageRepository;
    }
}
