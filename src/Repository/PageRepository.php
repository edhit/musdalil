<?php

declare(strict_types=1);

namespace App\Repository;

use App\Entity\Page;

final class PageRepository extends BaseRepository
{
    public function checkAndGetPage(int $pageId, int $userId): Page
    {
        $query = '
          SELECT * FROM `pages` WHERE `id` = :id AND `userId` = :userId
      ';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $pageId);
        $statement->bindParam('userId', $userId);
        $statement->execute();
        $page = $statement->fetchObject(Page::class);
        if (! $page) {
            throw new \App\Exception\Page('Page not found.', 404);
        }

        return $page;
    }

    public function getPageByUrl(string $pageUrl): Page
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

    public function delete(int $pageId, int $userId): void
    {
        $query = 'DELETE FROM `pages` WHERE `id` = :id AND `userId` = :userId';
        $statement = $this->getDb()->prepare($query);
        $statement->bindParam('id', $pageId);
        $statement->bindParam('userId', $userId);
        $statement->execute();
    }
}
