<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './commons/utils.php';
switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
        
        break;
    case 'dangki':
        require_once './client/business/homepage.php';
        
    default:
        # code...
        break;
}

?>
