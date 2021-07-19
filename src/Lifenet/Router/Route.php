<?php

namespace Lifenet\Router;

use Mezzio\Router\RouteResult;

/**
 * Describe a matched route
 * Class Route
 * @package Lifenet\Router
 */
class Route
{

    /**
     * @var RouteResult|null
     */
    private ?RouteResult $route;

    public function __construct(RouteResult $route = null)
    {
        $this->route = $route;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->route->getMatchedRouteName();
    }

    /**
     * @return callable
     */
    public function getCallback(): callable
    {

    }

    /**
     * Retrieve url parameters
     * @return string[]
     */
    public function getParameters(): array
    {
        return $this->route->getMatchedParams();
    }
}
