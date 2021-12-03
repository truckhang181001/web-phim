<?php
    !defined('PRONAME') && define('PRONAME', "/".basename(getcwd()));
    // !defined('PRONAME') && define('PRONAME', "/web_php/gr08");
    !defined('CURLINK') && define('CURLINK', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    !defined('DOMAIN') && define('DOMAIN', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]");
    if (!defined("HOST")) define("HOST", "125.234.104.133");
    if (!defined("DB")) define("DB", "webgr08");
    if (!defined("USER")) define("USER", "webgr08");
    if (!defined("PASSWORD")) define("PASSWORD", "MswMBY7lt9jHSP62");
?>