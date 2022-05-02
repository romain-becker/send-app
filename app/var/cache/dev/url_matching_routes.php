<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/users' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::display_user'], null, ['GET' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/products' => [
            [['_route' => 'add_product', '_controller' => 'App\\Controller\\ProductController::add_product'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'product_all', '_controller' => 'App\\Controller\\ProductController::display_product'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/register' => [[['_route' => 'register_user', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['GET' => 0], null, false, false, null]],
        '/api/orders' => [[['_route' => 'order_all', '_controller' => 'App\\Controller\\OrderController::display_orders'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|products/([^/]++)(?'
                        .'|(*:70)'
                    .')'
                    .'|users/([^/]++)(*:92)'
                    .'|orders/([^/]++)(*:114)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [
            [['_route' => 'edit_product', '_controller' => 'App\\Controller\\ProductController::edit_product'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_product', '_controller' => 'App\\Controller\\ProductController::delete_product'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'product_id', '_controller' => 'App\\Controller\\ProductController::getaproduct'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        92 => [[['_route' => 'app_user_modify', '_controller' => 'App\\Controller\\UserController::modify_user'], ['id'], ['PUT' => 0], null, false, true, null]],
        114 => [
            [['_route' => 'order_id', '_controller' => 'App\\Controller\\OrderController::getaorder'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
