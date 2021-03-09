<?php

declare(strict_types=1);

namespace App\Service\Page;

use App\Entity\Page;

final class PageService extends Base
{
    public function getAllPages(): array
    {
        //return $this->getPageRepository()->getAllPages();
    }

    public function getOne(int $pageId): object
    {

        return $pageId;
    }
}
