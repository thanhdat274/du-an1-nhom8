<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title m-0">THÊM MỚI DANH MỤC</h3>
            </div>

            <div class="card-body">
                <form action="<?= ADMIN_URL . 'category/luu-tao-moi' ?>" method="post">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" name="id" disabled="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tên danh mục <span style="color: red;">*</span> </label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục.....">
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="d-flex justify-content-end">
                        <a href="<?= ADMIN_URL . 'category' ?>" class="btn btn-sm btn-danger">Hủy</a>
                        &nbsp;
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>