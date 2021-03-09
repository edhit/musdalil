<?php

declare(strict_types=1);

namespace App\Entity;

use App\Traits\ArrayOrJsonResponse;

final class Page
{
    use ArrayOrJsonResponse;

    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string|null */
    private $description;

}
