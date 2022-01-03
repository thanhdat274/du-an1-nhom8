<header>
    <div class="Top_header animate__animated animate__fadeInDown">
        <div class="sub_header animate__animated animate__fadeInDown">
            <div class="Sub_phone sub_header_item animate__animated animate__fadeInDown animate__delay-0.7s">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p> HOTLINE: 0392948888</p>
            </div>
            <div class="Sub_address sub_header_item animate__animated animate__fadeInDown animate__delay-1s">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <P>119 Trung Hòa, Cầu Giấy, Hà Nội</P>
            </div>
        </div>
    </div>

    <div class="header_container">
        <div class="Logo animate__animated animate__backInLeft"><a href="<?= USER_URL ?>"><img src="<?= USER_ASSET ?>img/Baby Toys.png" alt=""></a></div>
        <div class="search animate__animated animate__fadeInUp animate__delay-1s">
            <input type="text" class="bnt__search" placeholder="Tìm kiếm sản phẩm....">
        </div>
        <div class="header_right">
            <div class="header_account  animate__animated animate__backInRight animate__delay-0.5s" style="animation-delay: 0.5s;">
                <div class="content content1">
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <div class="content_heading">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <p class="">HI,<?= $name ?></p>
                        </div>
                        <ul class="dropdown">
                            <li><a href="#">Tài khoản</a></li>
                            <?php if ($role == 1) { ?>
                                <li><a href="<?= ADMIN_URL ?>">Quản trị admin</a></li>
                            <?php } ?>
                            <li><a href="<?= USER_URL . 'logout' ?>">Đăng xuất</a></li>
                        </ul>

                    <?php
                    } else {
                    ?>
                        <div class="content_heading">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <p class="">Account</p>
                        </div>
                        <ul class="dropdown">
                            <li><a href="<?= USER_URL . 'login-from' ?>">Đăng Nhập</a></li>
                            <li><a href="<?= USER_URL . 'register-from' ?>">Đăng Ký</a></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="header_cart  animate__animated animate__backInRight animate__delay-0.8s" style="animation-delay: 0.8s;">
                <div class="content content_heading">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <p class="">Cart</p>
                </div>
            </div>
        </div>
    </div>

    <nav class="animate__animated animate__fadeInUp animate__delay-1s">
        <ul>
            <li class="animate__animated animate__backInLeft animate__delay-1s" style="animation-delay: 1s;"><a href="#">Hàng Mới</a></li>
            <li class="animate__animated animate__backInLeft animate__delay-1.2s" style="animation-delay: 1.2s;"><a href="#">Sản Phẩm</a></li>
            <li class="animate__animated animate__backInRight animate__delay-1s" style="animation-delay: 1s;"><a href="#">Giới Tính</a></li>
            <li class="animate__animated animate__backInRight animate__delay-1.2s" style="animation-delay: 1.2s;"><a href="#">Độ Tuổi</a></li>
            <li class="animate__animated animate__backInRight animate__delay-1.5s" style="animation-delay: 1.5s;"><a href="#">Khuyến Mãi</a></li>
        </ul>
    </nav>

</header>