<div class="container-fluid">
    <div class="dashboard-container">
        <!-- Page Content -->

        <form style="margin-bottom: 15px;" class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Tìm kiếm</button>
        </form>
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            Thêm sản phẩm
        </button>
            <a href="Product/test"> Hello </a>
        <div class="table-responsive-md">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">MÃ</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">GIÁ BÁN</th>
                    <th scope="col">SỐ LƯỢNG</th>
                    <th scope="col">THƯƠNG HIỆU</th>
                    <th scope="col">LOẠI</th>
                    <th scope="col">CÔNG CỤ</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($data['data'] as $datas):

                ?>
                <tr>
                    <td><?= $datas->masp ?></td>
                    <td><?= $datas->ten ?></span></td>
                    <td><?= $datas->giasp ?></td>
                    <td><?= $datas->soluong ?></td>
                    <td><?= $datas->thuonghieu_id ?></td>
                    <td><?= $datas->loaidan_id ?></td>
                    <td style="text-align: center; font-size: 130%;">
                        <a href="#"><ion-icon name="trash-outline"></ion-icon></a>
                        <a href="./edit-product.html"><ion-icon name="create-outline"></ion-icon></a>
                    </td>
                </tr>
                <?php endforeach;?>

                <tr>
                    <td>KEO-502</td>
                    <td>GREG BENNETT GD-100SCE</span></td>
                    <td>10.710.000 VNĐ</td>
                    <td>360</td>
                    <td>FENDER</td>
                    <td>CLASSIC</td>
                    <td style="text-align: center; font-size: 130%;">
                        <a href="#"><ion-icon name="trash-outline"></ion-icon></a>
                        <a href="./edit-product.html"><ion-icon name="create-outline"></ion-icon></a>
                    </td>
                </tr>

                <tr>
                    <td>KEO-502</td>
                    <td>GREG BENNETT GD-100SCE</span></td>
                    <td>10.710.000 VNĐ</td>
                    <td>360</td>
                    <td>FENDER</td>
                    <td>CLASSIC</td>
                    <td style="text-align: center; font-size: 130%;">
                        <a href="#"><ion-icon name="trash-outline"></ion-icon></a>
                        <a href="./edit-product.html"><ion-icon name="create-outline"></ion-icon></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- End page content -->
    </div>
</div>

<?php require_once ('createmodal.php')?>
