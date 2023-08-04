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
                        .'|commentaires/([^/]++)(*:205)'
                        .'|delete/([^/]++)(*:228)'
                        .'|login(?:/([^/]++))?(*:255)'
                    .')'
                    .'|dmin/(?'
                        .'|validCom/([^/]++)(*:289)'
                        .'|deleteCom/([^/]++)(*:315)'
                        .'|article/(?'
                            .'|list(?:/([^/]++))?(*:352)'
                            .'|([^/]++)(?'
                                .'|(*:371)'
                                .'|/edit(*:384)'
                                .'|(*:392)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategories/([^/]++)(?'
                                .'|(*:427)'
                                .'|/edit(*:440)'
                                .'|(*:448)'
                            .')'
                            .'|ommentaires/([^/]++)(?'
                                .'|(*:480)'
                                .'|/edit(*:493)'
                                .'|(*:501)'
                            .')'
                        .')'
                        .'|team/([^/]++)(?'
                            .'|(*:527)'
                            .'|/edit(*:540)'
                            .'|(*:548)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:573)'
                            .'|/edit(*:586)'
                            .'|(*:594)'
                        .')'
                    .')'
                .')'
                .'|/public/user/(?'
                    .'|delete/([^/]++)(*:636)'
                    .'|categorie/([^/]++)(*:662)'
                    .'|artice/([^/]++)(*:685)'
                    .'|new/commentaire/([^/]++)(*:717)'
                .')'
                .'|/visitor/user/(?'
                    .'|artice/([^/]++)(*:758)'
                    .'|categorie/([^/]++)(*:784)'
                    .'|([^/]++)(*:800)'
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
        205 => [[['_route' => 'app_account_commentaires', '_controller' => 'App\\Controller\\Account\\AccountController::userCommentaires'], ['id'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'public_user_delete', '_controller' => 'App\\Controller\\Account\\AccountController::deleteUser'], ['id'], ['POST' => 0], null, false, true, null]],
        255 => [[['_route' => 'user_login', 'params' => null, '_controller' => 'App\\Controller\\Account\\UserSecurityController::login'], ['params'], null, null, false, true, null]],
        289 => [[['_route' => 'valid_com_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::validCom'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'delete_com_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::deleteCom'], ['id'], ['POST' => 0], null, false, true, null]],
        352 => [[['_route' => 'app_article_index', 'categorie' => null, '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], ['categorie'], ['GET' => 0], null, false, true, null]],
        371 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\Admin\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        392 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        427 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\Admin\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        440 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        448 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_commentaires_show', '_controller' => 'App\\Controller\\Admin\\CommentairesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        493 => [[['_route' => 'app_commentaires_edit', '_controller' => 'App\\Controller\\Admin\\CommentairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [[['_route' => 'app_commentaires_delete', '_controller' => 'App\\Controller\\Admin\\CommentairesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        527 => [[['_route' => 'app_team_show', '_controller' => 'App\\Controller\\Admin\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        540 => [[['_route' => 'app_team_edit', '_controller' => 'App\\Controller\\Admin\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        548 => [[['_route' => 'app_team_delete', '_controller' => 'App\\Controller\\Admin\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        573 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        586 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        594 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        636 => [[['_route' => 'user_commentaires_delete', '_controller' => 'App\\Controller\\Account\\UserPublicController::deleteCom'], ['id'], ['POST' => 0], null, false, true, null]],
        662 => [[['_route' => 'user_categorie_show', '_controller' => 'App\\Controller\\Account\\UserPublicController::showCat'], ['id'], ['GET' => 0], null, false, true, null]],
        685 => [[['_route' => 'user_article_show', '_controller' => 'App\\Controller\\Account\\UserPublicController::showArt'], ['id'], ['GET' => 0], null, false, true, null]],
        717 => [[['_route' => 'user_commentaires_new', '_controller' => 'App\\Controller\\Account\\UserPublicController::newCom'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        758 => [[['_route' => 'visitor_article_show', '_controller' => 'App\\Controller\\Account\\VisitorController::showArt'], ['id'], ['GET' => 0], null, false, true, null]],
        784 => [[['_route' => 'visitor_categorie_show', '_controller' => 'App\\Controller\\Account\\VisitorController::showCat'], ['id'], ['GET' => 0], null, false, true, null]],
        800 => [
            [['_route' => 'visitor_user_delete', '_controller' => 'App\\Controller\\Account\\VisitorController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
