<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title-m-0">CẬP NHẬT SẢN PHẨM</h4>
            </div>

            <div class="card-body">
                <?php extract($list_one_product);
                $hinhpath = $image;
                $hinhpath1 = $image1;
                $hinhpath2 = $image2;
                $hinhpath3 = $image3;
                if (empty($hinhpath)) {
                    $image = "NO photo";
                } else {
                    $image = "<img src='" . $hinhpath . "' width='100px' height='60px'>";
                }
                if (empty($hinhpath1)) {
                    $image1 = "NO photo";
                } else {
                    $image1 = "<img src='" . $hinhpath1 . "' width='100px' height='60px'>";
                }
                if (empty($hinhpath2)) {
                    $image2 = "NO photo";
                } else {
                    $image2 = "<img src='" . $hinhpath2 . "' width='100px' height='60px'>";
                }
                if (empty($hinhpath3)) {
                    $image3 = "NO photo";
                } else {
                    $image3 = "<img src='" . $hinhpath3 . "' width='100px' height='60px'>";
                }
                ?>
                <form action="<?= ADMIN_URL . 'product/update-product' ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" name="id" disabled value="<?= $id ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>TÊN SẢN PHẨM <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm....." value="<?= $name ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="id_cate">
                                    <?php
                                    foreach ($list_category as $category) {
                                        extract($category);
                                        echo '<option value="' . $id . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label> GIÁ <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="price" placeholder="Nhập giá....." value="<?= $price ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>GIẢM GIÁ <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="promotional_price" placeholder="Nhập giá....." value="<?= $promotional_price ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 1<span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image">
                                <?= $image ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 2 <span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image1">
                                <?= $image1 ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 3 <span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image2">
                                <?= $image2 ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 4 <span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image3">
                                <?= $image3 ?>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>SỐ LƯỢT XEM </label>
                                <input type="text" class="form-control" name="view" value="0" readonly value="<?= $view ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NGÀY THÊM </label>
                                <input type="text" class="form-control" name="date" value="<?= $date ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>MÔ TẢ <span style="color: red;">*</span></label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Mô tả sản phẩm..."><?= $description ?></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <a href="<?= ADMIN_URL . 'product' ?>" class="btn btn-sm btn-danger">Hủy</a>
                        &nbsp;
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>