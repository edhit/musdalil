<?php

declare(strict_types=1);

namespace App\Controller\Order;

use App\Controller\BaseController;
use App\Exception\Order;
use App\Service\Order\OrderService;

abstract class Base extends BaseController
{
    protected function getOrderService(): OrderService
    {
        return $this->container->get('order_service');
    }

    protected function getAndValidateUserId(array $input): int
    {
        if (isset($input['decoded']) && isset($input['decoded']->sub)) {
            return (int) $input['decoded']->sub;
        }

        throw new Page('Invalid user. Permission failed.', 400);
    }
}
