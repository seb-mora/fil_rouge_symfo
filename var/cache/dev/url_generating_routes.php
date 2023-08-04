<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_account' => [[], ['_controller' => 'App\\Controller\\Account\\AccountController::index'], [], [['text', '/account/']], [], [], []],
    'app_account_commentaires' => [['id'], ['_controller' => 'App\\Controller\\Account\\AccountController::userCommentaires'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/account/commentaires']], [], [], []],
    'public_user_edit' => [[], ['_controller' => 'App\\Controller\\Account\\AccountController::edit'], [], [['text', '/account/edit']], [], [], []],
    'public_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Account\\AccountController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/account/delete']], [], [], []],
    'public_article_index' => [[], ['_controller' => 'App\\Controller\\Account\\UserPublicController::index'], [], [['text', '/public/user/']], [], [], []],
    'public_user_new' => [[], ['_controller' => 'App\\Controller\\Account\\UserPublicController::new'], [], [['text', '/public/user/new']], [], [], []],
    'user_commentaires_delete' => [['id'], ['_controller' => 'App\\Controller\\Account\\UserPublicController::deleteCom'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/public/user/delete']], [], [], []],
    'user_categorie_show' => [['id'], ['_controller' => 'App\\Controller\\Account\\UserPublicController::showCat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/public/user/categorie']], [], [], []],
    'user_article_show' => [['id'], ['_controller' => 'App\\Controller\\Account\\UserPublicController::showArt'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/public/user/artice']], [], [], []],
    'user_commentaires_new' => [['id'], ['_controller' => 'App\\Controller\\Account\\UserPublicController::newCom'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/public/user/new/commentaire']], [], [], []],
    'user_login' => [['params'], ['params' => null, '_controller' => 'App\\Controller\\Account\\UserSecurityController::login'], [], [['variable', '/', '[^/]++', 'params', true], ['text', '/account/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\Account\\UserSecurityController::logout'], [], [['text', '/account/logout']], [], [], []],
    'visitor_article_index' => [[], ['_controller' => 'App\\Controller\\Account\\VisitorController::index'], [], [['text', '/visitor/user/']], [], [], []],
    'visitor_article_show' => [['id'], ['_controller' => 'App\\Controller\\Account\\VisitorController::showArt'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/visitor/user/artice']], [], [], []],
    'visitor_categorie_show' => [['id'], ['_controller' => 'App\\Controller\\Account\\VisitorController::showCat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/visitor/user/categorie']], [], [], []],
    'visitor_user_new' => [[], ['_controller' => 'App\\Controller\\Account\\VisitorController::new'], [], [['text', '/visitor/user/new']], [], [], []],
    'visitor_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Account\\VisitorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/visitor/user']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin/']], [], [], []],
    'valid_com_admin' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AdminController::validCom'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/validCom']], [], [], []],
    'app_article_index' => [['categorie'], ['categorie' => null, '_controller' => 'App\\Controller\\Admin\\ArticleController::index'], [], [['variable', '/', '[^/]++', 'categorie', true], ['text', '/admin/article/list']], [], [], []],
    'app_article_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::new'], [], [['text', '/admin/article/new']], [], [], []],
    'app_article_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_article_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_article_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/article']], [], [], []],
    'app_categories_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], [], [['text', '/admin/categories/']], [], [], []],
    'app_categories_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::new'], [], [['text', '/admin/categories/new']], [], [], []],
    'app_categories_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'app_categories_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'app_categories_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/categories']], [], [], []],
    'app_commentaires_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CommentairesController::index'], [], [['text', '/admin/commentaires/']], [], [], []],
    'app_commentaires_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CommentairesController::new'], [], [['text', '/admin/commentaires/new']], [], [], []],
    'app_commentaires_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentairesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commentaires']], [], [], []],
    'app_commentaires_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentairesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commentaires']], [], [], []],
    'app_commentaires_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentairesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/commentaires']], [], [], []],
    'app_team_index' => [[], ['_controller' => 'App\\Controller\\Admin\\TeamController::index'], [], [['text', '/admin/team/']], [], [], []],
    'app_team_new' => [[], ['_controller' => 'App\\Controller\\Admin\\TeamController::new'], [], [['text', '/admin/team/new']], [], [], []],
    'app_team_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TeamController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/team']], [], [], []],
    'app_team_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TeamController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/team']], [], [], []],
    'app_team_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TeamController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/team']], [], [], []],
    'admin_login' => [[], ['_controller' => 'App\\Controller\\Admin\\TeamSecurityController::login'], [], [['text', '/admin/login']], [], [], []],
    'admin_logout' => [[], ['_controller' => 'App\\Controller\\Admin\\TeamSecurityController::logout'], [], [['text', '/admin/logout']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/admin/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::new'], [], [['text', '/admin/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
];
