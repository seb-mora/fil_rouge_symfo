<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\Account\\AccountController::index'], null, null, null, true, false, null]],
        '/public/user' => [[['_route' => 'public_article_index', '_controller' => 'App\\Controller\\Account\\UserPublicController::index'], null, ['GET' => 0], null, true, false, null]],
        '/public/user/new' => [[['_route' => 'public_user_new', '_controller' => 'App\\Controller\\Account\\UserPublicController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Account\\UserSecurityController::logout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\Admin\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\Admin\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/commentaires' => [[['_route' => 'app_commentaires_index', '_controller' => 'App\\Controller\\Admin\\CommentairesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/commentaires/new' => [[['_route' => 'app_commentaires_new', '_controller' => 'App\\Controller\\Admin\\CommentairesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team' => [[['_route' => 'app_team_index', '_controller' => 'App\\Controller\\Admin\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/team/new' => [[['_route' => 'app_team_new', '_controller' => 'App\\Controller\\Admin\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\Admin\\TeamSecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\Admin\\TeamSecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/public/user/([^/]++)(?'
                    .'|/edit(*:198)'
                    .'|(*:206)'
                .')'
                .'|/a(?'
                    .'|ccount/login(?:/([^/]++))?(*:246)'
                    .'|dmin/(?'
                        .'|article/(?'
                            .'|list(?:/([^/]++))?(*:291)'
                            .'|([^/]++)(?'
                                .'|(*:310)'
                                .'|/edit(*:323)'
                                .'|(*:331)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategories/([^/]++)(?'
                                .'|(*:366)'
                                .'|/edit(*:379)'
                                .'|(*:387)'
                            .')'
                            .'|ommentaires/([^/]++)(?'
                                .'|(*:419)'
                                .'|/edit(*:432)'
                                .'|(*:440)'
                            .')'
                        .')'
                        .'|team/([^/]++)(?'
                            .'|(*:466)'
                            .'|/edit(*:479)'
                            .'|(*:487)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:512)'
                            .'|/edit(*:525)'
                            .'|(*:533)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'public_user_edit', '_controller' => 'App\\Controller\\Account\\UserPublicController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        206 => [[['_route' => 'public_user_delete', '_controller' => 'App\\Controller\\Account\\UserPublicController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        246 => [[['_route' => 'user_login', 'params' => null, '_controller' => 'App\\Controller\\Account\\UserSecurityController::login'], ['params'], null, null, false, true, null]],
        291 => [[['_route' => 'app_article_index', 'categorie' => null, '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], ['categorie'], ['GET' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\Admin\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\Admin\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        387 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_commentaires_show', '_controller' => 'App\\Controller\\Admin\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'app_commentaires_edit', '_controller' => 'App\\Controller\\Admin\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        440 => [[['_route' => 'app_commentaires_delete', '_controller' => 'App\\Controller\\Admin\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\Admin\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\Admin\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        487 => [[['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\Admin\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        512 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        525 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        533 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
