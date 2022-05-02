<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'order_id' => [['id'], ['_controller' => 'App\\Controller\\OrderController::getaorder'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/order']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::display_user'], [], [['text', '/api/users']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/api/login']], [], [], []],
    'add_product' => [[], ['_controller' => 'App\\Controller\\ProductController::add_product'], [], [['text', '/api/products']], [], [], []],
    'edit_product' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit_product'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/products']], [], [], []],
    'delete_product' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete_product'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/products']], [], [], []],
    'product_all' => [[], ['_controller' => 'App\\Controller\\ProductController::display_product'], [], [['text', '/api/products']], [], [], []],
    'product_id' => [['id'], ['_controller' => 'App\\Controller\\ProductController::getaproducts'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/products']], [], [], []],
    'register_user' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/api/register']], [], [], []],
    'app_user_modify' => [['id'], ['_controller' => 'App\\Controller\\UserController::modify_user'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], [], []],
    'secure_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/api/login']], [], [], []],
];