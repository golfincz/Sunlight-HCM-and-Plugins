<?php

use Sunlight\Database\Database as DB;
use Sunlight\GenericTemplates;
use Sunlight\Comment\Comment;
use Sunlight\Router;
use Sunlight\User;
use Sunlight\Util\Arr;
use Sunlight\Util\StringManipulator;

return function ($uid = null) {
    $result = "";
    $uid = (int) $uid;
    $query = DB::query("SELECT * FROM sn_online_status");
    while ($item = DB::row($query)) {

        $result .= "<table>\n";
		$result .= "<tr><td>Serv name</td><td>" . $item["servname"] . "</td></tr>\n";
		$result .= "<tr><td>version</td><td>" . $item["version"] . "</td></tr>\n";
		$result .= "<tr><td>ServIP</td><td>" . $item["servip"] . "</td></tr>\n";
		$result .= "<tr><td>ServPort</td><td>" . $item["servport"] . "</td></tr>\n";
		$result .= "<tr><td>AdminEmail</td><td>" . $item["adminemail"] . "</td></tr>\n";
		$result .= "<tr><td>age</td><td>" . $item["age"] . "</td></tr>\n";
		$result .= "<tr><td>accounts</td><td>" . $item["accounts"] . "</td></tr>\n";
		$result .= "<tr><td>chars</td><td>" . $item["chars"] . "</td></tr>\n";
		$result .= "<tr><td>guilds</td><td>" . $item["guilds"] . "</td></tr>\n";
		$result .= "<tr><td>items</td><td>" . $item["items"] . "</td></tr>\n";
		$result .= "<tr><td>clients</td><td>" . $item["clients"] . "</td></tr>\n";
        $result .= "</table>\n";
    }

    return $result;
};