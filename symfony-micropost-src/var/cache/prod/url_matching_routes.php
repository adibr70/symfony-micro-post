<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog' => [[['_route' => 'blog-index', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, true, false, null]],
        '/blog/add' => [[['_route' => 'blog-add', '_controller' => 'App\\Controller\\BlogController::add'], null, null, null, false, false, null]],
        '/micro-post' => [[['_route' => 'micro_post_index', '_controller' => 'App\\Controller\\MicroPostController::index'], null, null, null, true, false, null]],
        '/micro-post/add' => [[['_route' => 'micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'], null, null, null, false, false, null]],
        '/notification/unread-count' => [[['_route' => 'notification_unread', '_controller' => 'App\\Controller\\NotificationController::unreadCount'], null, null, null, false, false, null]],
        '/notification/all' => [[['_route' => 'notification_all', '_controller' => 'App\\Controller\\NotificationController::notifications'], null, null, null, false, false, null]],
        '/notification/acnowledge-all' => [[['_route' => 'notification_acknowledge_all', '_controller' => 'App\\Controller\\NotificationController::acknoledgeAll'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/blog/show/([^/]++)(*:26)'
                .'|/following/(?'
                    .'|follow/([^/]++)(*:62)'
                    .'|unfollow/([^/]++)(*:86)'
                .')'
                .'|/likes/(?'
                    .'|like/([^/]++)(*:117)'
                    .'|unlike/([^/]++)(*:140)'
                .')'
                .'|/micro\\-post/(?'
                    .'|edit/([^/]++)(*:178)'
                    .'|delete/([^/]++)(*:201)'
                    .'|user/([^/]++)(*:222)'
                    .'|([^/]++)(*:238)'
                .')'
                .'|/notification/acnowledge/([^/]++)(*:280)'
                .'|/confirm/([^/]++)(*:305)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'blog-show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], null, null, false, true, null]],
        62 => [[['_route' => 'following_follow', '_controller' => 'App\\Controller\\FollowingController::follow'], ['id'], null, null, false, true, null]],
        86 => [[['_route' => 'following_unfollow', '_controller' => 'App\\Controller\\FollowingController::unfolow'], ['id'], null, null, false, true, null]],
        117 => [[['_route' => 'likes_like', '_controller' => 'App\\Controller\\LikesController::like'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'likes_unlike', '_controller' => 'App\\Controller\\LikesController::unlike'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'], ['id'], null, null, false, true, null]],
        201 => [[['_route' => 'micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'micro_post_user', '_controller' => 'App\\Controller\\MicroPostController::userPosts'], ['username'], null, null, false, true, null]],
        238 => [[['_route' => 'micro_post_post', '_controller' => 'App\\Controller\\MicroPostController::post'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'notification_acknowledge', '_controller' => 'App\\Controller\\NotificationController::acknowledge'], ['id'], null, null, false, true, null]],
        305 => [
            [['_route' => 'security_confirm', '_controller' => 'App\\Controller\\SecurityController::confirm'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
