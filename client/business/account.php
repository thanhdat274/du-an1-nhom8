<?php
function login_from()
{
  client_render('account/signin.php', []);
}
// hàm check thông tin đăng nhập có giống trong database hay không
function ckeckuser($email, $pass)
{
  $sql = "select * from account where email='$email' and password='$pass' ";
  $account = pdo_query_one($sql);
  return $account;
}
//------------------------------------------------
function check_login()
{
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $ckeckuser = ckeckuser($email, $pass);
  if (is_array($ckeckuser)) {
    $_SESSION['user'] = $ckeckuser;
    header('location: home');
  } else {
    header('location:' . USER_URL . 'login-from');
  }
}
//------------------------------------------------
//hàm đăng xuất
function logout()
{
  session_unset();
  header('location: home');
}
//------------------------------------------------
function register_from()
{
  client_render('account/register.php', []);
}
// hàm thêm mới tài khoản khách hàng vào bảng account trong databasse
function save_register()
{
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $sql = "insert into account(email, password, name, address, phone) value('$email', '$pass', '$name', '$address', '$phone')";
  pdo_execute($sql);
  header('location: home');
}
//------------------------------------------------
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