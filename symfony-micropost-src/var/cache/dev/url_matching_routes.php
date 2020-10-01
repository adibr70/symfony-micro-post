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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog-index', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, true, false, null]],
        '/blog/add' => [[['_route' => 'blog-add', '_controller' => 'App\\Controller\\BlogController::add'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'micro_post_index', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
        '/notification/unread-count' => [[['_route' => 'notification_unread', '_controller' => 'App\\Controller\\NotificationController::unreadCount'], null, null, null, false, false, null]],
        '/notification/all' => [[['_route' => 'notification_all', '_controller' => 'App\\Controller\\NotificationController::notifications'], null, null, null, false, false, null]],
        '/notification/acnowledge-all' => [[['_route' => 'notification_acknowledge_all', '_controller' => 'App\\Controller\\NotificationController::acknoledgeAll'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/blog/show/([^/]++)(*:188)'
                .'|/following/(?'
                    .'|follow/([^/]++)(*:225)'
                    .'|unfollow/([^/]++)(*:250)'
                .')'
                .'|/likes/(?'
                    .'|like/([^/]++)(*:282)'
                    .'|unlike/([^/]++)(*:305)'
                .')'
                .'|/edit/([^/]++)(*:328)'
                .'|/delete/([^/]++)(*:352)'
                .'|/user/([^/]++)(*:374)'
                .'|/post/([^/]++)(*:396)'
                .'|/notification/acnowledge/([^/]++)(*:437)'
                .'|/confirm/([^/]++)(*:462)'
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
        188 => [[['_route' => 'blog-show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
        225 => [[['_route' => 'following_follow', '_controller' => 'App\\Controller\\FollowingController::follow'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'following_unfollow', '_controller' => 'App\\Controller\\FollowingController::unfolow'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'likes_like', '_controller' => 'App\\Controller\\LikesController::like'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'likes_unlike', '_controller' => 'App\\Controller\\LikesController::unlike'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete'], ['id'], null, null, false, true, null]],
        374 => [[['_route' => 'micro_post_user', '_controller' => 'App\\Controller\\MicroPostController::userPosts'], ['username'], null, null, false, true, null]],
        396 => [[['_route' => 'micro_post_post', '_controller' => 'App\\Controller\\MicroPostController::post'], ['id'], null, null, false, true, null]],
        437 => [[['_route' => 'notification_acknowledge', '_controller' => 'App\\Controller\\NotificationController::acknowledge'], ['id'], null, null, false, true, null]],
        462 => [
            [['_route' => 'security_confirm', '_controller' => 'App\\Controller\\SecurityController::confirm'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
