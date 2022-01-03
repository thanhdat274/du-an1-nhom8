<?php
session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/pdo.php';
switch ($url) {
        // phần chức năng của user
    case 'home':
        require_once "./client/business/trangchu.php";
        home();
        break;
    case 'home/login-from':
        require_once "./client/business/account.php";
        login_from();
        break;
    case 'home/check-login':
        require_once "./client/business/account.php";
        check_login();
        break;
    case 'home/logout':
        require_once "./client/business/account.php";
        logout();
        break;
    case 'home/register-from':
        require_once "./client/business/account.php";
        register_from();
        break;
    case 'home/save-register':
        require_once "./client/business/account.php";
        save_register();
        break;
    case 'home/spct':
        require_once "./client/business/trangchu.php";
        sp_ct();
        break;
        //-------------------------

        //phần chức năng của admin
    case 'cp-admin':
        require_once "./admin/business/account.php";
        loadAll_account();
        break;
    case 'cp-admin/account':
        require_once "./admin/business/account.php";
        loadAll_account();
        break;
    case 'cp-admin/account/xoa':
        require_once "./admin/business/account.php";
        account_remove();
        break;
    case 'cp-admin/account/tao-moi':
        require_once "./admin/business/account.php";
        add_account();
        break;
    case 'cp-admin/account/luu-tao-moi':
        require_once "./admin/business/account.php";
        save_add_account();
        break;
    case 'cp-admin/account/sua-account':
        require_once "./admin/business/account.php";
        load_one_account();
        break;
    case 'cp-admin/account/update-account':
        require_once "./admin/business/account.php";
        update_account();
        break;

        // Case category
    case 'cp-admin/category':
        require_once "./admin/business/category.php";
        loadAll_category();
        break;
    case 'cp-admin/category/tao-moi':
        require_once "./admin/business/category.php";
        add_category();
        break;
    case 'cp-admin/category/luu-tao-moi':
        require_once "./admin/business/category.php";
        save_add_category();
        break;
    case 'cp-admin/category/xoa':
        require_once "./admin/business/category.php";
        category_remove();
        break;
    case 'cp-admin/category/edit-category':
        require_once "./admin/business/category.php";
        load_one_category();
        break;
    case 'cp-admin/category/update-category':
        require_once "./admin/business/category.php";
        update_category();
        break;

        // chức năng về product 
    case 'cp-admin/product':
        require_once "./admin/business/product.php";
        loadAll_product();
        break;
    case 'cp-admin/product/tao-moi':
        require_once "./admin/business/product.php";
        add_product();
        break;
    case 'cp-admin/product/luu-tao-moi':
        require_once "./admin/business/product.php";
        save_add_product();
        break;
    case 'cp-admin/product/xoa':
        require_once "./admin/business/product.php";
        remove_product();
        break;
    case 'cp-admin/product/sua-product':
        require_once "./admin/business/product.php";
        load_one_product();
        break;
    case 'cp-admin/product/update-product':
        require_once "./admin/business/product.php";
        update_product();
        break;
        //----------------------------------------------------

    default:
        require_once "./client/business/trangchu.php";
        home();
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>