<?php

declare(strict_types=1);

//namespace Gandalf;

class Router {
    /**
     * Associative array of routes (the routing table)
     * @var array
     */
    protected $routes = [];

    /**
     * Parameters from the matched route
     * @var array
     */
    protected $params = [];

    /**
     * Add a route to the routing table
     *
     * @param string $route     The route URL
     * @param array  $params    Parameters (controller, action, etc...)
     *
     * @return void
     */
    public function add(string $route, array $params = [])
    {
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)}/', '(?P<\1>[a-z-]+)', $route);
        $route = preg_replace('/\{([a-z]+):([^}]+)}/', '(?P<\1>\2)', $route);
        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;
    }

    /**
     *  Get all routes from the routing table
     *
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * Match the route to the routes in the routing table, setting the $params
     * propery if a route is found
     *
     * @param   string $url   The route URL
     *
     * @return  boolean       true if match is found, otherwise false
     */
    public function match(string $url): bool
    {
//        foreach ($this->routes as $route => $params) {
//            if ($url == $route) {
//                $this->params = $params;
//                return true;
//            }
//        }
//        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/i";

        foreach ($this->routes as $route => $params) {
            $matched = preg_match($route, $url, $matches);
            if ($matched) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }

                $this->params = $params;
                return true;
            }
        }

        return false;
    }

    /**
     * Get the currently matched parameters
     *
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}



















