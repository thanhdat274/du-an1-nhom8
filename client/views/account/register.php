<div class="header">
  <div class="container1">
    <div class="title-logo">
      <span>Đăng kí</span>
    </div>
  </div>
</div>
<main>
  <div class="container1">
    <form action="<?= USER_URL . 'save-register' ?>" method="post" class="form">
      <div class="form-register">
        <table>
          <tr>
            <p class="p-nd">Địa chỉ email <span style="color: red;">*</span></p>
            <input type="email" class="control-login" name="email" placeholder="Nhập email....." style="margin-bottom: 20px">
          </tr>
          <tr>
            <p class="p-nd"> Mật khẩu <span style="color: red;">*</span></p>
            <input type="password" class="control-login" name="pass" placeholder="Nhập mật khẩu....." style="margin-bottom: 20px">
          </tr>
          <tr>
            <p class="p-nd"> Họ và tên <span style="color: red;">*</span></p>
            <input type="text" class="control-login" name="name" placeholder="Nhập họ và tên....." style="margin-bottom: 20px">
          </tr>
          <tr>
            <p class="p-nd">Số diện thoại <span style="color: red;">*</span></p>
            <input type="text" class="control-login" name="phone" placeholder="Nhập số điện thoại....." style="margin-bottom: 20px">
          </tr>
          <tr>
            <p class="p-nd">Địa chỉ <span style="color: red;">*</span></p>
            <input type="text" class="control-login" name="address" placeholder="Nhập địa chỉ....." style="margin-bottom: 20px">
          </tr>

          <tr>
            <div class="register">
              <input class="login btn btn-light" type="submit" name="register" value="Đăng kí">
            </div>
          </tr>

          <tr>
            <div class="or">
              <hr>
              <span>hoặc</span>
              <hr>
            </div>
          </tr>

          <tr>
            <p class="p-last"> Bạn đã có tài khoản? <a href="<?= USER_URL . 'login-from' ?>" class="register">Đăng nhập </a></p>
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