<?php
// Hàm list danh mục
function loadAll_category()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from category where name like '%$keyword%'";
    $list_category = pdo_query($sql);
    admin_render('category/index.php', compact('list_category', 'keyword'), 'admin-assets/custom/category_index.js');
}
//---------------------------------------------
// Hàm thêm danh mục
function add_category()
{
    admin_render('category/add.php', []);
}
//---------------------------------------------
// Hàm lưu tạo mới danh mục
function save_add_category()
{
    $name = $_POST['name'];
    $sql = "insert into category(name) value('$name')";
    pdo_execute($sql);
    header("location:" . ADMIN_URL . 'category');
}
//---------------------------------------------
// Hàm xóa danh mục
function  category_remove()
{
    $id = $_GET['id'];
    $sql = "delete from category where id = $id";
    pdo_query($sql);
    header("location:" . ADMIN_URL . 'category');
}
//---------------------------------------------
// Hàm edit danh mục
function load_one_category()
{
    $id = $_GET['id'];
    $sql = "select * from category where id=$id";
    $list_one_category = pdo_query_one($sql);

    admin_render('category/update.php', compact('list_one_category'));
}
//---------------------------------------------
// Hàm update category
function  update_category()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "update category set name ='$name' where id = $id";
    pdo_execute($sql);
    header("location:" . ADMIN_URL . 'category');
}
//---------------------------------------------
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