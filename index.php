<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './commons/utils.php';
switch ($url) {
    case 'dangky':
        require_once './client/business/dangky.php';
        dangky();
    default:
        # code...
        break;
}

?>
