<?php
// ******************************************************************
// Ulo�eno v ANSI k�dov�n�
// ******************************************************************
// HCM pro zobrazen� Online hr��� hry Ultima Online
// Vytvo�eno pro sphereserver
// Nutno vytvo�it tabulku v DB sn_players_online
/** CREATE TABLE IF NOT EXISTS `sn_players_online` (
 * `uid` int(11) NOT NULL AUTO_INCREMENT,
 * `name` varchar(50) DEFAULT NULL,
 * `race` varchar(50) DEFAULT NULL,
 * `job` varchar(50) DEFAULT NULL,
 * `karma` int(5) NOT NULL,
 * `fame` int(5) NOT NULL,
 * `skilltotal` varchar(7) DEFAULT NULL,
 * PRIMARY KEY (`uid`)
 * ) ENGINE=MyISAM AUTO_INCREMENT=8092 DEFAULT CHARSET=utf8;
*/
// Created by Golfin eranova.cz
// ******************************************************************
// Posledn� aktualizace souboru: 17.9.2021

use Sunlight\Database\Database as DB;

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