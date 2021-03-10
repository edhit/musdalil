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

    public function getOneByUrl(string $pageUrl): object
    {
        return $this->pageRepository->getPageByUrl($pageUrl)->toJson();
    }

    public function delete(int $pageId, int $userId): void
    {
        $this->pageRepository->checkAndGetPage($pageId, $userId);
        $this->pageRepository->delete($pageId, $userId);
    }
}
