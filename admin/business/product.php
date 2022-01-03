<?php
// hàm load tất cả danh mục trong databasse lên trang thêm sp
function loadAll_category()
{
    $sql = "select * from category";
    $list_category = pdo_query($sql);
    return $list_category;
}
// ------------------------------------------------
// load sản phẩm 
function loadAll_product()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from products where name like '%$keyword%'";
    $list_product = pdo_query($sql);
    admin_render(
        'product/index.php',
        compact('list_product', 'keyword'),
        'admin-assets/custom/product_index.js'
    );
}
// ------------------------------------------------
// hàm xóa sản phẩm
function remove_product()
{
    $id = $_GET['id'];
    $sql = "delete from products where id = $id";
    pdo_query($sql);
    header("location:" . ADMIN_URL . 'product');
}
//----------------------------------------------------------
// hiển thị form add sản phẩm
function add_product()
{
    $sql = "select * from category";
    $list_danhmuc = pdo_query($sql);
    admin_render('product/add.php', compact('list_danhmuc'));
}
// ------------------------------------------------
// lưu sản phẩm đã add 
function save_add_product()
{
    $id_cate = $_POST['id_cate'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $promotional_price = $_POST['promotional_price'];
    $file = $_FILES['image'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/upload/' . $filename);
        $filename = 'upload/' . $filename;
        $image = PUBLIC_URL . $filename;
    }
    $file1 = $_FILES['image1'];
    $filename1 = "";
    if ($file1['size'] > 0) {
        $filename1 = uniqid() . '-' . $file1['name'];
        move_uploaded_file($file1['tmp_name'], './public/upload/' . $filename1);
        $filename1 = 'upload/' . $filename1;
        $image1 = PUBLIC_URL . $filename1;
    }
    $file2 = $_FILES['image2'];
    $filename2 = "";
    if ($file2['size'] > 0) {
        $filename2 = uniqid() . '-' . $file2['name'];
        move_uploaded_file($file2['tmp_name'], './public/upload/' . $filename2);
        $filename2 = 'upload/' . $filename2;
        $image2 = PUBLIC_URL . $filename2;
    }
    $file3 = $_FILES['image3'];
    $filename3 = "";
    if ($file3['size'] > 0) {
        $filename3 = uniqid() . '-' . $file3['name'];
        move_uploaded_file($file3['tmp_name'], './public/upload/' . $filename3);
        $filename3 = 'upload/' . $filename3;
        $image3 = PUBLIC_URL . $filename3;
    }
    $description = $_POST['description'];
    $date = date('d/m/Y');
    $view = $_POST['view'];
    $sql = "insert into products(name, price, image, image1, image2, image3, promotional_price, description, date, view, id_cate) value('$name', '$price', '$image', '$image1', '$image2', '$image3', '$promotional_price', '$description','$date','$view','$id_cate')";
    pdo_execute($sql);
    header("location:" . ADMIN_URL . 'product');
}
// ------------------------------------------------
// load 1 sản phẩm
function load_one_product()
{
    $id = $_GET['id'];
    $sql = "select * from products where id=$id";
    $list_one_product = pdo_query_one($sql);
    $list_category = loadAll_category();
    admin_render('product/update.php', compact('list_one_product', 'list_category'));
}
// -----------------------------------------------
// update sản phẩm 
function update_product()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $file = $_FILES['image'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/upload/' . $filename);
        $filename = 'upload/' . $filename;
        $image = PUBLIC_URL . $filename;
    }
    $file1 = $_FILES['image1'];
    $filename1 = "";
    if ($file1['size'] > 0) {
        $filename1 = uniqid() . '-' . $file1['name'];
        move_uploaded_file($file1['tmp_name'], './public/upload/' . $filename1);
        $filename1 = 'upload/' . $filename1;
        $image1 = PUBLIC_URL . $filename1;
    }
    $file2 = $_FILES['image2'];
    $filename2 = "";
    if ($file2['size'] > 0) {
        $filename2 = uniqid() . '-' . $file2['name'];
        move_uploaded_file($file2['tmp_name'], './public/upload/' . $filename2);
        $filename2 = 'upload/' . $filename2;
        $image2 = PUBLIC_URL . $filename2;
    }
    $file3 = $_FILES['image3'];
    $filename3 = "";
    if ($file3['size'] > 0) {
        $filename3 = uniqid() . '-' . $file3['name'];
        move_uploaded_file($file3['tmp_name'], './public/upload/' . $filename3);
        $filename3 = 'upload/' . $filename3;
        $image3 = PUBLIC_URL . $filename3;
    }
    $promotional_price = $_POST['promotional_price'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $id_cate = $_POST['id_cate'];
    if ($image && $image1 && $image2 && $image3 != "") {
        $sql = "update products set name='$name', price='$price', image='$image', image1='$image1', image2='$image2', image3='$image3', promotional_price='$promotional_price', description='$description', date='$date', id_cate='$id_cate' where id=$id";
    } else {
        $sql = "update products set name='$name', price='$price', promotional_price='$promotional_price', description='$description', date='$date', id_cate='$id_cate' where id=$id";
    }
    pdo_execute($sql);
    header("location:" . ADMIN_URL . 'product');
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