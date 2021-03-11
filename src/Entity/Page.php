<?php

declare(strict_types=1);

namespace App\Entity;

use App\Traits\ArrayOrJsonResponse;

final class Page
{
    use ArrayOrJsonResponse;

    /** @var int */
    private $id;

    /** @var int */
    private $category;

    /** @var string */
    private $name;

    /** @var string */
    private $url;

    /** @var string */
    private $title;

    /** @var string|null */
    private $description;

    /** @var string */
    private $tags;

    /** @var int */
    private $userId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCategory(): int
    {
        return $this->category;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getTags(): string
    {
        return $this->tags;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
