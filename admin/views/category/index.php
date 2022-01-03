<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Danh sách danh mục</h2><br><br>
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
                        <th>Danh mục</th>
                        <th colspan="2">Action</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'category/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($list_category as $category) {
                            extract($category);

                        ?>

                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $name ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'category/edit-category?id=' . $id ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'category/xoa?id=' . $id ?>', '<?= $name ?>')" class="btn btn-sm btn-danger">
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