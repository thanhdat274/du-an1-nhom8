<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title-m-0">DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</h4><br>
                <form action="" method="get">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control" placeholder="Tìm kiếm..." aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>ID</th>
                        <th>ĐỊA CHỈ EMAIL</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>HÌNH ẢNH</th>
                        <th>VAI TRÒ</th>
                        <th colspan="2">Action</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'account/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($list_account as $account) {
                            extract($account);
                            $hinhpath = $image;
                            if (empty($hinhpath)) {
                                $image = "NO photo";
                            } else {
                                $image = "<img src='" . $hinhpath . "' width='150px' height='100px'>";
                            }
                        ?>

                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $email ?></td>
                                <td><?= $name ?></td>
                                <td><?= $address ?></td>
                                <td><?= $phone ?></td>
                                <td><?= $image ?></td>
                                <td><?= $role == 1 ? 'Nhân viên' : 'Khách hàng'; ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'account/sua-account?id=' . $id ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'account/xoa?id=' . $id ?>', '<?= $name ?>')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>