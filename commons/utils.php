<?php

const BASE_URL = "nhom4-duan1";
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';


function account_render($view, $data = []){
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}
?>