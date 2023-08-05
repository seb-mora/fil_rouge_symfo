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
        '/account/edit' => [[['_route' => 'public_user_edit', '_controller' => 'App\\Controller\\Account\\AccountController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/public/user' => [[['_route' => 'public_article_index', '_controller' => 'App\\Controller\\Account\\UserPublicController::index'], null, ['GET' => 0], null, true, false, null]],
        '/public/user/new' => [[['_route' => 'public_user_new', '_controller' => 'App\\Controller\\Account\\UserPublicController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Account\\UserSecurityController::logout'], null, null, null, false, false, null]],
        '/visitor/user' => [[['_route' => 'visitor_article_index', '_controller' => 'App\\Controller\\Account\\VisitorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/visitor/user/new' => [[['_route' => 'visitor_user_new', '_controller' => 'App\\Controller\\Account\\VisitorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/comstovalid' => [[['_route' => 'coms_to_validation', '_controller' => 'App\\Controller\\Admin\\AdminController::nbrComsToValid'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ccount/(?'
                        .'|delete/([^/]++)(*:199)'
                        .'|login(?:/([^/]++))?(*:226)'
                    .')'
                    .'|dmin/(?'
                        .'|validCom/([^/]++)(*:260)'
                        .'|deleteCom/([^/]++)(*:286)'
                        .'|article/(?'
                            .'|list(?:/([^/]++))?(*:323)'
                            .'|([^/]++)(?'
                                .'|(*:342)'
                                .'|/edit(*:355)'
                                .'|(*:363)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategories/([^/]++)(?'
                                .'|(*:398)'
                                .'|/edit(*:411)'
                                .'|(*:419)'
                            .')'
                            .'|ommentaires/([^/]++)(?'
                                .'|(*:451)'
                                .'|/edit(*:464)'
                                .'|(*:472)'
                            .')'
                        .')'
                        .'|team/([^/]++)(?'
                            .'|(*:498)'
                            .'|/edit(*:511)'
                            .'|(*:519)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:544)'
                            .'|/edit(*:557)'
                            .'|(*:565)'
                        .')'
                    .')'
                .')'
                .'|/public/user/(?'
                    .'|delete/([^/]++)(*:607)'
                    .'|c(?'
                        .'|ategorie/([^/]++)(*:636)'
                        .'|ommentaires/([^/]++)(*:664)'
                    .')'
                    .'|artice/([^/]++)(*:688)'
                    .'|new/commentaire/([^/]++)(*:720)'
                .')'
                .'|/visitor/user/(?'
                    .'|artice/([^/]++)(*:761)'
                    .'|categorie/([^/]++)(*:787)'
                    .'|([^/]++)(*:803)'
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
        199 => [[['_route' => 'public_user_delete', '_controller' => 'App\\Controller\\Account\\AccountController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        226 => [[['_route' => 'user_login', 'params' => null, '_controller' => 'App\\Controller\\Account\\UserSecurityController::login'], ['params'], null, null, false, true, null]],
        260 => [[['_route' => 'valid_com_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::validCom'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'delete_com_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteCom'], ['id'], ['POST' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_article_index', 'categorie' => null, '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], ['categorie'], ['GET' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\Admin\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        398 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\Admin\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        451 => [[['_route' => 'app_commentaires_show', '_controller' => 'App\\Controller\\Admin\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        464 => [[['_route' => 'app_commentaires_edit', '_controller' => 'App\\Controller\\Admin\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        472 => [[['_route' => 'app_commentaires_delete', '_controller' => 'App\\Controller\\Admin\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        498 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\Admin\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        511 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\Admin\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        519 => [[['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\Admin\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        544 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        565 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        607 => [[['_route' => 'user_commentaires_delete', '_controller' => 'App\\Controller\\Account\\UserPublicController::deleteCom'], ['id'], ['POST' => 0], null, false, true, null]],
        636 => [[['_route' => 'user_categorie_show', '_controller' => 'App\\Controller\\Account\\UserPublicController::showCat'], ['id'], ['GET' => 0], null, false, true, null]],
        664 => [[['_route' => 'user_commentaires', '_controller' => 'App\\Controller\\Account\\UserPublicController::userCommentaires'], ['id'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'user_article_show', '_controller' => 'App\\Controller\\Account\\UserPublicController::showArt'], ['id'], ['GET' => 0], null, false, true, null]],
        720 => [[['_route' => 'user_commentaires_new', '_controller' => 'App\\Controller\\Account\\UserPublicController::newCom'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        761 => [[['_route' => 'visitor_article_show', '_controller' => 'App\\Controller\\Account\\VisitorController::showArt'], ['id'], ['GET' => 0], null, false, true, null]],
        787 => [[['_route' => 'visitor_categorie_show', '_controller' => 'App\\Controller\\Account\\VisitorController::showCat'], ['id'], ['GET' => 0], null, false, true, null]],
        803 => [
            [['_route' => 'visitor_user_delete', '_controller' => 'App\\Controller\\Account\\VisitorController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
