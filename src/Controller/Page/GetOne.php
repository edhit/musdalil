<?php

declare(strict_types=1);

namespace App\Controller\Page;

use Slim\Http\Request;
use Slim\Http\Response;

final class GetOne extends Base
{
    public function __invoke(
        Request $request,
        Response $response,
        array $args
    ): Response {
        $page = $this->getPageService()->getOneByUrl((string) $args['url']);

        return $this->jsonResponse($response, 'success', $page, 200);
    }
}
