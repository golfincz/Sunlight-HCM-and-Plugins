<?php

use Sunlight\Database\Database as DB;
use Sunlight\GenericTemplates;
use Sunlight\Comment\Comment;
use Sunlight\Router;
use Sunlight\User;
use Sunlight\Util\Arr;
use Sunlight\Util\StringManipulator;

defined('_root') or exit;

return function ($uid = null) {
    $result = "<table id='status'><tr><th>Name</th><th>Race</th><th>Job</th><th>Karma</th><th>Fame</th><th>Skill Total</th></tr></table>";
    $uid = (int) $uid;
    $query = DB::query("SELECT * FROM sn_players_online");
    while ($item = DB::row($query)) {

        $result .= "<table id='status'><tr><td>" . $item["name"] . "</td><td>" .$item["race"] . "</td><td>" . $item["job"] . "</td><td>" . $item["karma"] . "</td><td>" . $item["fame"] . "</td><td>" . $item["skilltotal"] . "</td></tr>\n";
        $result .= "</table>\n";
    }

    return $result;
};