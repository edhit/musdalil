<?php

declare(strict_types=1);

namespace App\Controller\Page;

use App\Controller\BaseController;
use App\Exception\Page;
use App\Service\Page\PageService;

abstract class Base extends BaseController
{
    protected function getPageService(): PageService
    {
        return $this->container->get('page_service');
    }

    protected function getAndValidateUserId(array $input): int
    {
        if (isset($input['decoded']) && isset($input['decoded']->sub)) {
            return (int) $input['decoded']->sub;
        }

        throw new Page('Invalid user. Permission failed.', 400);
    }
}
