<?php

declare(strict_types=1);

namespace App\Service\Order;

use App\Entity\Order;

final class OrderService extends Base
{
    public function create(array $input): object
    {
        $data = json_decode((string) json_encode($input), false);
        return $data;
    }

    public function delete(int $pageId, int $userId): void
    {
        $this->pageRepository->checkAndGetPage($pageId, $userId);
        $this->pageRepository->delete($pageId, $userId);
    }
}
