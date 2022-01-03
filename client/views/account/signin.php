<div class="header">
  <div class="container1">
    <div class="title-logo">
      <span>Đăng nhập</span>
    </div>
  </div>
</div>
<main>
  <div class="container1">
    <form action="<?= USER_URL . 'check-login' ?>" method="post" class="form">
      <div class="form-login">
        <table>
          <tr>
            <p class="p-nd">Địa chỉ email <span style="color: red;">*</span></p>
            <input type="email" class="control-login" name="email" placeholder=" Nhập email....." style="margin-bottom: 20px">
          </tr>
          <tr>
            <p class="p-nd"> Mật khẩu <span style="color: red;">*</span></p>
            <input type="password" class="control-login" name="pass" placeholder=" Nhập mật khẩu....." style="margin-bottom: 20px">
          </tr>
          <tr>
            <div class="login">
              <input class="login btn btn-light" type="submit" name="login" value="Đăng nhập">
            </div>
          </tr>
          <tr><br>
            <p class="p-last"> Quên mật khẩu? Khôi phục mật khẩu <a href="#" class="register">Tại đây</a></p>
          </tr>

          <tr>
            <div class="or">
              <hr>
              <span>hoặc</span>
              <hr>
            </div>
          </tr>
          <tr>
            <p class="p-last"> Bạn chưa có tài khoản? <a href="<?= USER_URL . 'register-from' ?>" class="register">Đăng ký </a></p>
          </tr>
        </table>
      </div>
    </form>
  </div>
</main>
<div class="container1" style="width:95% !important">
  <div id="backtop">
    <i class='bx bxs-up-arrow-circle'></i>
  </div>
</div>