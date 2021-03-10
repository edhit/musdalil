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

    /** @var string */
    private $url;

    /** @var string|null */
    private $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
