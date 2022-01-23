<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group([
    'prefix' => 'api/v1'
], function ($router) {
    $router->post('add_to_cart', ['uses' => 'AddToCartAction']);
    $router->get('cart/detail/{user_id}', ['uses' => 'ShowCartDetailAction']);
    $router->post('cart/checkout', ['uses' => 'CheckOutCartAction']);
});
