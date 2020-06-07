<!-- Page Navi -->
<section class="page-navi-panel-btl">
    <div class="container">
        <ul>
            <li>
                <a href="/Home">Trang chủ</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="/Cart">Giỏ hàng</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="/Order">Đặt hàng</a>
            </li>
        </ul>
    </div>
</section>
<!--End Page Navi -->

<!-- Order Detail -->
<div class="container">
    <form class="form-order-detal" action="/Order/executeOrder" method="POST">
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

                    <?php
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $idProduct => $detail) {
                            echo '<tr>';
                            echo '<td>'.$detail['ten'].' <span class="product-quantity"><strong> x '.$detail['soluongdat'].' sản phẩm </strong></span></td>';
                            echo '<td><span class="home-price">'.$detail['giasp'].'</span> VNĐ</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '';
                    }
                    ?>

                    <tr>
                        <th scope="col">TỔNG ĐƠN HÀNG</th>

                        <?php
                        $totalPrice = 0;
                        if(!empty($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as $idProduct => $details) {
                                $totalPrice += $details['thanhtien'];
                            }
                        }
                        echo '<th scope="col"><span class="home-price">'.$totalPrice.'</span> VNĐ</th>';
                        ?>

                    </tr>
                    </tbody>
                </table>

                <?php
                if (!empty($_SESSION['cart'])) {
                    echo '<button type="submit" class="btn btn-secondary mb-2" name="datHang">ĐẶT HÀNG</button>';
                } else {
                    echo '<button type="submit" class="btn btn-secondary mb-2" name="datHang" disabled>ĐẶT HÀNG</button>';
                }
                ?>
            </div>

        </div>
    </form>
</div>
<!-- End Order Detail -->
