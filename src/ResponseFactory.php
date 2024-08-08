<?php

declare(strict_types=1);

namespace PHP94\Factory;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

class ResponseFactory implements
    ResponseFactoryInterface
{

    public function createResponse(int $code = 200, string $reasonPhrase = ''): ResponseInterface
    {
        return new Response($code, [], null, '1.1', $reasonPhrase);
    }
}
