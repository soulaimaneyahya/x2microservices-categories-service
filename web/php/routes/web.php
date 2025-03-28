<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/**
 * Categories
 */
$router->get('/categories', [
    'as' => 'categories.index',
    'uses' => 'GetCategoriesListController'
]);

$router->get('/', function () use ($router) {
    return $router->app->version();
});
