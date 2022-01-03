<?php
// Hàm list danh mục ra trang chủ
function loadAll_category()
{
  $sql = "select * from category where 1 order by id desc limit 0,5";
  $list_category = pdo_query($sql);
  return $list_category;
}
//---------------------------------------------
// load sản phẩm ra trang chủ
function loadAll_product()
{
  $sql = "select * from products where 1 order by id desc limit 0,12";
  $list_product = pdo_query($sql);
  return $list_product;
}
// ------------------------------------------------
function home()
{
  $spnew = loadAll_product();
  $dscate = loadAll_category();
  client_render('trangchu/home.php', compact('spnew', 'dscate'));
}
function sp_ct()
{
  client_render('trangchu/sanphamct.php', []);
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