<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Page;

final class PageRepository extends BaseRepository
{
    public function checkAndGetPage(string $pageUrl): Page
    {
        $query = 'SELECT * FROM `pages` WHERE `url` = :url';
        $statement = $this->database->prepare($query);
        $statement->bindParam(':url', $pageUrl);
        $statement->execute();
        $page = $statement->fetchObject(Page::class);
        if (! $page) {
            throw new \App\Exception\Page('Page not found.', 404);
        }

        return $page;
    }
}
