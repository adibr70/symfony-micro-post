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
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, false, false, null]],
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
                .'|/(en|fr|nl)(?'
                    .'|/(?'
                        .'|blog(?'
                            .'|(*:194)'
                            .'|/(?'
                                .'|add(*:209)'
                                .'|show/([^/]++)(*:230)'
                            .')'
                        .')'
                        .'|following/(?'
                            .'|follow/([^/]++)(*:268)'
                            .'|unfollow/([^/]++)(*:293)'
                        .')'
                        .'|l(?'
                            .'|ikes/(?'
                                .'|like/([^/]++)(*:327)'
                                .'|unlike/([^/]++)(*:350)'
                            .')'
                            .'|og(?'
                                .'|in(*:366)'
                                .'|out(*:377)'
                            .')'
                        .')'
                        .'|add(*:390)'
                        .'|edit/([^/]++)(*:411)'
                        .'|delete/([^/]++)(*:434)'
                        .'|user/([^/]++)(*:455)'
                        .'|post/([^/]++)(*:476)'
                        .'|notification/(?'
                            .'|unread\\-count(*:513)'
                            .'|a(?'
                                .'|ll(*:527)'
                                .'|cnowledge(?'
                                    .'|/([^/]++)(*:556)'
                                    .'|\\-all(*:569)'
                                .')'
                            .')'
                        .')'
                        .'|register(*:588)'
                        .'|confirm/([^/]++)(*:612)'
                    .')'
                    .'|(*:621)'
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
        194 => [[['_route' => 'blog-index', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        209 => [[['_route' => 'blog-add', '_controller' => 'App\\Controller\\BlogController::add', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        230 => [[['_route' => 'blog-show', '_controller' => 'App\\Controller\\BlogController::show', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        268 => [[['_route' => 'following_follow', '_controller' => 'App\\Controller\\FollowingController::follow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        293 => [[['_route' => 'following_unfollow', '_controller' => 'App\\Controller\\FollowingController::unfolow', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        327 => [[['_route' => 'likes_like', '_controller' => 'App\\Controller\\LikesController::like', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        350 => [[['_route' => 'likes_unlike', '_controller' => 'App\\Controller\\LikesController::unlike', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        366 => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        377 => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        390 => [[['_route' => 'micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        411 => [[['_route' => 'micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        434 => [[['_route' => 'micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        455 => [[['_route' => 'micro_post_user', '_controller' => 'App\\Controller\\MicroPostController::userPosts', '_locale' => 'en'], ['_locale', 'username'], null, null, false, true, null]],
        476 => [[['_route' => 'micro_post_post', '_controller' => 'App\\Controller\\MicroPostController::post', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        513 => [[['_route' => 'notification_unread', '_controller' => 'App\\Controller\\NotificationController::unreadCount', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        527 => [[['_route' => 'notification_all', '_controller' => 'App\\Controller\\NotificationController::notifications', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        556 => [[['_route' => 'notification_acknowledge', '_controller' => 'App\\Controller\\NotificationController::acknowledge', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        569 => [[['_route' => 'notification_acknowledge_all', '_controller' => 'App\\Controller\\NotificationController::acknoledgeAll', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        588 => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\RegisterController::register', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        612 => [[['_route' => 'security_confirm', '_controller' => 'App\\Controller\\SecurityController::confirm', '_locale' => 'en'], ['_locale', 'token'], null, null, false, true, null]],
        621 => [
            [['_route' => 'micro_post_index', '_controller' => 'App\\Controller\\MicroPostController::index', '_locale' => 'en'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
