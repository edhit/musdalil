<?php

declare(strict_types=1);

namespace App\Controller\Page;

use Slim\Http\Request;
use Slim\Http\Response;

final class Delete extends Base
{
    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $input = (array) $request->getParsedBody();
        $pageId = (int) $args['id'];
        $userId = $this->getAndValidateUserId($input);
        $this->getPageService()->delete($pageId, $userId);

        return $this->jsonResponse($response, 'success', null, 204);
    }
}
