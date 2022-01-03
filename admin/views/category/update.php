<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title m-0">CẬP NHẬT DANH MỤC</h3>
            </div>

            <div class="card-body">
                <?php
                extract($list_one_category);
                ?>
                <form action="<?= ADMIN_URL . 'category/update-category' ?>" method="post">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control" name="id" value="<?= $id ?>" disabled="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Tên danh mục <span style="color: red;"></span> </label>
                                <input type="text" class="form-control" name="name" value="<?= $name ?>">
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="d-flex justify-content-end">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <a href="<?= ADMIN_URL . 'category' ?>" class="btn btn-sm btn-danger">Hủy</a>
                        &nbsp;
                        <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>