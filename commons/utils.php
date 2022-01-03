<?php

const BASE_URL = "http://localhost:81/Du-an1-nhom8/";
const ADMIN_URL = BASE_URL . 'cp-admin/';
const USER_URL = BASE_URL . 'home/';
const PUBLIC_URL = BASE_URL . 'public/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const USER_ASSET = BASE_URL . 'public/user-assets/';

function client_render($view, $sql_args)
{
    extract($sql_args);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}
function admin_render($view, $sql_args, $jsFile = null)
{
    extract($sql_args);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
?>