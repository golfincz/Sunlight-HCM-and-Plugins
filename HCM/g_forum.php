<?php

defined('_root') or exit;

return function ($min_uroven = 0, $Skupina_PJ = "", $Prazdne = "") {
    if (_priv_level >= (int) $min_uroven) {
        return $Skupina_PJ;
    } else {
        return $Prazdne;
    }
};
