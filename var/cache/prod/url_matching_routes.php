<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\Admin\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\Admin\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/commentaires' => [[['_route' => 'app_commentaires_index', '_controller' => 'App\\Controller\\Admin\\CommentairesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/commentaires/new' => [[['_route' => 'app_commentaires_new', '_controller' => 'App\\Controller\\Admin\\CommentairesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team' => [[['_route' => 'app_team_index', '_controller' => 'App\\Controller\\Admin\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/team/new' => [[['_route' => 'app_team_new', '_controller' => 'App\\Controller\\Admin\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Admin\\TeamSecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Admin\\TeamSecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|article/(?'
                        .'|list(?:/([^/]++))?(*:46)'
                        .'|([^/]++)(?'
                            .'|(*:64)'
                            .'|/edit(*:76)'
                            .'|(*:83)'
                        .')'
                    .')'
                    .'|c(?'
                        .'|ategories/([^/]++)(?'
                            .'|(*:117)'
                            .'|/edit(*:130)'
                            .'|(*:138)'
                        .')'
                        .'|ommentaires/([^/]++)(?'
                            .'|(*:170)'
                            .'|/edit(*:183)'
                            .'|(*:191)'
                        .')'
                    .')'
                    .'|team/([^/]++)(?'
                        .'|(*:217)'
                        .'|/edit(*:230)'
                        .'|(*:238)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:263)'
                        .'|/edit(*:276)'
                        .'|(*:284)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'app_article_index', 'categorie' => null, '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], ['categorie'], ['GET' => 0], null, false, true, null]],
        64 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\Admin\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        83 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\Admin\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        138 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_commentaires_show', '_controller' => 'App\\Controller\\Admin\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        183 => [[['_route' => 'app_commentaires_edit', '_controller' => 'App\\Controller\\Admin\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        191 => [[['_route' => 'app_commentaires_delete', '_controller' => 'App\\Controller\\Admin\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        217 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\Admin\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\Admin\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\Admin\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
