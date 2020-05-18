<!-- Page Navi -->
<section class="page-navi-panel-btl">
    <div class="container">
        <ul>
            <li>
                <a href="/Home">Trang chủ</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="javascript:history.back()">Chi tiết sản phẩm</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="#">Đặt hàng</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="/Product/showDetail/<?php echo $data['DBData'][0]->id ?>"><?php echo $data['DBData'][0]->ten ?></a>
            </li>
        </ul>
    </div>
</section>
<!--End Page Navi -->

<!-- Order Detail -->
<div class="container">
    <?php
    echo '<form class="form-order-detal" action="/Order/executeOneProductOrder/'.$data['DBData'][0]->id.'" method="POST">';
    ?>
        <div class="row">

            <div class="left-form col-12 col-lg-6 col-md-6 col-sm-12">
                <h1>THÔNG TIN KHÁCH HÀNG</h1>
                <hr>
                <div class="form-group mb-2">
                    <label for="fullname">Họ tên</label>
                    <input class="form-control" type="text" maxlength="100" name="fullname" value="" required oninvalid="this.setCustomValidity('Không được để trống trường này')"
                           oninput="setCustomValidity('')">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" value="" maxlength="100" name="email" required oninvalid="this.setCustomValidity('Không được để trống trường này')"
                           oninput="setCustomValidity('')">
                </div>

                <div class="form-group mb-2">
                    <label for="address">Địa chỉ</label>
                    <input class="form-control" type="text" maxlength="200" name="address" value="" required oninvalid="this.setCustomValidity('Không được để trống trường này')"
                           oninput="setCustomValidity('')">
                    <label for="phone">Số điện thoại</label>
                    <input class="form-control" type="tel" maxlength="13" name="phone" value="" required oninvalid="this.setCustomValidity('Không được để trống trường này')"
                           oninput="setCustomValidity('')">
                </div>

                <div class="form-group mb-2">
                    <label for="notes">Ghi chú</label>
                    <textarea class="form-control" name="note"></textarea>
                </div>
            </div>

            <div class="right-form col-12 col-lg-6 col-md-6 col-sm-12">
                <h1>THÔNG TIN ĐƠN HÀNG</h1>
                <hr>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">SẢN PHẨM</th>
                        <th scope="col">TỔNG</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <?php
                            echo '<td>'.$data['DBData'][0]->ten.' <span class="product-quantity"><strong> x 1 sản phẩm</strong></span></td>';
                            echo '<td><span class="home-price">'.$data['DBData'][0]->giasp.'</span> VNĐ</td>';
                        ?>
                    </tr>
                    <tr>
                        <th scope="col">TỔNG ĐƠN HÀNG</th>
                        <?php
                            echo '<th scope="col"><span class="home-price">'.$data['DBData'][0]->giasp.'</span> VNĐ</th>';
                        ?>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-secondary mb-2" name="datHang">ĐẶT HÀNG</button>
            </div>

        </div>
    </form>
</div>
<!-- End Order Detail -->
