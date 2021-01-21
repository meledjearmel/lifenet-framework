<?php

namespace Lifenet;

use GuzzleHttp\Psr7\MessageTrait;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class App
 *
 * @package Lifenet
 */
class App
{
    /**
     * @param ServerRequestInterface $request
     * @return MessageTrait
     */
    public function run(ServerRequestInterface $request): MessageTrait
    {
        $uri = $request->getUri()->getPath();
        if (!empty($uri) && $uri[-1] === '/') {
            return (new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
        }
        $response = new Response();
        $response->getBody()->write('Bonjour les gens');
        return $response;
    }
}
