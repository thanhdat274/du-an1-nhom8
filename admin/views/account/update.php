<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title-m-0">CẬP NHẬT TÀI KHOẢN KHÁCH HÀNG</h4>
            </div>

            <div class="card-body">
                <?php extract($list_one_account);
                $hinhpath = $image;
                if (empty($hinhpath)) {
                    $image = "NO photo";
                } else {
                    $image = "<img src='" . $hinhpath . "' width='100px' height='60px'>";
                }
                ?>
                <form action="<?= ADMIN_URL . 'account/update-account' ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" name="id" disabled value="<?= $id ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>EMAIL <span style="color: red;">*</span> </label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập email....." value="<?= $email ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>MẬT KHẨU <span style="color: red;">*</span> </label>
                                <input type="password" class="form-control" name="pass" placeholder="Nhập mật khẩu....." value="<?= $password ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>HỌ VÀ TÊN <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên....." value="<?= $name ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ĐỊA CHỈ <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ....." value="<?= $address ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>SỐ ĐIỆN THOẠI <span style="color: red;">*</span> </label>
                                <input type="phone" class="form-control" name="phone" placeholder="Nhập số điện thoại....." value="<?= $phone ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>HÌNH ẢNH <span style="color: red;">*</span> </label>
                                <div class="form-control">
                                    <input type="file" name="image"><br>
                                    <?= $image ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>VAI TRÒ <span style="color: red;">*</span> </label>
                                <div class="custom-control custom-radio form-control">
                                    <label><input name="role" value="0" type="radio" <?= $role ? '' : 'checked' ?>>&nbsp;Khách hàng</label>&nbsp;&nbsp;&nbsp;
                                    <label><input name="role" value="1" type="radio" <?= $role ? 'checked' : '' ?>>&nbsp;Nhân viên</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <a href="<?= ADMIN_URL . 'account' ?>" class="btn btn-sm btn-danger">Hủy</a>
                        &nbsp;
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>