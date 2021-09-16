<?php

use Sunlight\Post\PostService;
use Sunlight\Database\Database as DB;
use Sunlight\GenericTemplates;
use Sunlight\Post\Post;
use Sunlight\Router;
use Sunlight\User;
use Sunlight\Util\Arr;
use Sunlight\Util\StringManipulator;

return function ($limit = null, $stranky = "", $typ = null) {
    // priprava
    $result = "";
    if (isset($limit) && (int) $limit >= 1) {
        $limit = abs((int) $limit);
    } else {
        $limit = 10;
    }
    $post_types =  [
        'topic' => Post::FORUM_TOPIC,
    ];

    // nastaveni filtru
    if (!empty($stranky)) {
        $homes = Arr::removeValue(explode('-', $stranky), '');
    } else {
        $homes = [];
    }

    if (!empty($typ)) {
        if (isset($post_types[$typ])) {
            $typ = $post_types[$typ];
        } elseif (!in_array($typ, $post_types)) {
            $typ = Post::SECTION_COMMENT;
        }
        $types = [$typ];
    } else {
        $types = $post_types;
    }

    // dotaz
    [$columns, $joins, $cond] = Post::createFilter('post', $types, $homes);
    $userQuery = User::createQuery('post.author');
    $columns .= ',' . $userQuery['column_list'];
    $joins .= ' ' . $userQuery['joins'];
    $query = DB::query("SELECT " . $columns . " FROM " . DB::table('post') . " post " . $joins . " WHERE " . $cond . " ORDER BY id DESC LIMIT " . $limit);

    while ($item = DB::row($query)) {
        [$homelink, $hometitle] = Router::post($item);

        if ($item['author'] != -1) {
            $authorname = Router::userFromQuery($userQuery, $item);
        } else {
            $authorname = PostService::renderGuestName($item['guest']);
        }


		$result .= "<p class='answer-latest'><a href='" . _e($homelink) . "'>" . StringManipulator::ellipsis(strip_tags(Post::render($hometitle)), 20) . "</a>\n";
		$result .= "<br><small><em>" .  $authorname . "</em>\n";
		$result .= "" . GenericTemplates::renderTime($item['time'], 'post') . "</p>\n";

    }

    return $result;
};