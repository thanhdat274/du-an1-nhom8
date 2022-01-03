<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h4 class="card-title-m-0">THÊM MỚI SẢN PHẨM</h4>
            </div>

            <div class="card-body">
                <form action="<?= ADMIN_URL . 'product/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" name="id" disabled>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>TÊN SẢN PHẨM <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm.....">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="id_cate">
                                    <?php
                                    foreach ($list_danhmuc as $category) {
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
                                <input type="text" class="form-control" name="price" placeholder="Nhập giá.....">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>GIẢM GIÁ <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="promotional_price" placeholder="Nhập giá.....">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 1<span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 2 <span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image1">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 3 <span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image2">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ẢNH 4 <span style="color: red;">*</span> </label>
                                <input type="file" class="form-control" name="image3">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>SỐ LƯỢT XEM </label>
                                <input type="text" class="form-control" name="view" value="0" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>NGÀY THÊM </label>
                                <input type="text" class="form-control" name="date">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>MÔ TẢ <span style="color: red;">*</span></label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Mô tả sản phẩm..."></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="<?= ADMIN_URL . 'product' ?>" class="btn btn-sm btn-danger">Hủy</a>
                        &nbsp;
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>