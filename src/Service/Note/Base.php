<?php

declare(strict_types=1);

namespace App\Service\Note;

use App\Entity\Note;
use App\Repository\NoteRepository;
use App\Service\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    private const REDIS_KEY = 'note:%s';

    /** @var NoteRepository */
    protected $noteRepository;

    public function __construct(
        NoteRepository $noteRepository
    ) {
        $this->noteRepository = $noteRepository;
    }

    protected static function validateNoteName(string $name): string
    {
        if (! v::length(1, 50)->validate($name)) {
            throw new \App\Exception\Note('The name of the note is invalid.', 400);
        }

        return $name;
    }

    protected function getOneFromDb(int $noteId): Note
    {
        return $this->noteRepository->checkAndGetNote($noteId);
    }
}
