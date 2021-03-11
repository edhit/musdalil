<?php

declare(strict_types=1);

namespace App\Service\Order;

use App\Entity\Order;
use App\Repository\OrderRepository;
use App\Service\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    /** @var OrderRepository */
    protected $orderRepository;

    public function __construct(
        OrderRepository $orderRepository
    ) {
        $this->orderRepository = $orderRepository;
    }
}
