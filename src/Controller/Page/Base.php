<?php

declare(strict_types=1);

namespace App\Controller\Page;

use App\Controller\BaseController;
use App\Service\Page\PageService;

abstract class Base extends BaseController
{
    protected function getPageService(): PageService
    {
        return $this->container->get('page_service');
    }
}
