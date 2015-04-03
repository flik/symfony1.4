<?php
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'] : "http://".$_SERVER['SERVER_NAME'];
    defined('BASE_URL')
        || define('BASE_URL', $url.'/vmproject/' );
 
define('RUNNING_FROM_ROOT', true);
include 'web/index.php';

