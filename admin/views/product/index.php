<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title-m-0">DANH SÁCH SẢN PHẨM</h4><br>
                <form action="<?= ADMIN_URL . 'product' ?>" method="get">
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
                        <th>TÊN SẢN PHẨM</th>
                        <th>GIÁ GỐC</th>
                        <th>GIÁ ĐÃ GIẢM</th>
                        <th>ẢNH SẢN PHẨM</th>
                        <th>MÔ TẢ SẢN PHẨM</th>
                        <th colspan="2">Action</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'product/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($list_product as $product) {
                            extract($product);
                            $hinhpath = $image;
                            if (empty($hinhpath)) {
                                $image = "NO photo";
                            } else {
                                $image = "<img src='" . $hinhpath . "' width='150px' height='100px'>";
                            }
                        ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $name ?></td>
                                <td><?= $price ?></td>
                                <td><?= $promotional_price ?></td>
                                <td><?= $image ?></td>
                                <td><?= $description ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'product/sua-product?id=' . $id ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'product/xoa?id=' . $id ?>', '<?= $name ?>')" class="btn btn-sm btn-danger">
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