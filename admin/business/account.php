<?php
//phần câu lệnh hàm SQL trang admin quản lý khách hàng
// hàm load tất cả danh sách khách hàng trong database
function loadAll_account()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from account where name like '%$keyword%'";
    $list_account = pdo_query($sql);
    admin_render(
        'account/index.php',
        compact('list_account', 'keyword'),
        'admin-assets/custom/account_index.js'
    );
}
// ------------------------------------------------
// Hàm xóa account
function  account_remove()
{
    $id = $_GET['id'];
    $sql = "delete from account where id = $id";
    pdo_query($sql);
    header("location:" . ADMIN_URL . 'account');
}

// hàm thêm mới tài khoản vào danh sách khách hàng trong database
function add_account()
{
    admin_render('account/add.php', [], 'admin-assets/custom/account_add.js');
}
// ------------------------------------------------
// hàm lưu thêm mới tài khoản vào danh sách khách hàng trong database
function save_add_account()
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $file = $_FILES['image'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/upload/' . $filename);
        $filename = 'upload/' . $filename;
        $image = PUBLIC_URL . $filename;
    }
    $role = $_POST['role'];
    $sql = "insert into account(email, password, name, address, phone, image, role) value('$email', '$pass', '$name', '$address', '$phone', '$image', '$role')";
    pdo_execute($sql);
    header("location:" . ADMIN_URL . 'account');
}
function load_one_account()
{
    $id = $_GET['id'];
    $sql = "select * from account where id=$id";
    $list_one_account = pdo_query_one($sql);

    admin_render('account/update.php', compact('list_one_account'));
}
function update_account()
{
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $file = $_FILES['image'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/upload/' . $filename);
        $filename = 'upload/' . $filename;
        $image = PUBLIC_URL . $filename;
    }
    $role = $_POST['role'];
    if ($image != "") {
        $sql = "update account set email='$email', password='$pass', name='$name', address='$address', phone=$phone, image='$image', role='$role' where id=$id";
    } else {
        $sql = "update account set email='$email', password='$pass', name='$name', address='$address', phone=$phone, role='$role' where id=$id";
    }
    pdo_execute($sql);
    header("location:" . ADMIN_URL . 'account');
}
// ------------------------------------------------
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