<!-- Page Navi -->
<section class="page-navi-panel-btl">
    <div class="container">
        <ul>
            <li>
                <a href="#">Trang chủ</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="#">Sản phẩm</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
            <li>
                <a href="#">Đàn guitar</a>
                <ion-icon class="chevron-forward" name="chevron-forward"></ion-icon>
            </li>
        </ul>
    </div>
</section>
<!--End Page Navi -->

<!-- Order Detail -->
<div class="container">
    <form class="form-order-detal" action="#" method="POST">
        <div class="row">

            <div class="left-form col-12 col-lg-6 col-md-6 col-sm-12">
                <h1>THÔNG TIN KHÁCH HÀNG</h1>
                <hr>
                <div class="form-group mb-2">
                    <label for="fullname">Họ tên</label>
                    <input class="form-control" type="text" maxlength="100" name="fullname" value="">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" value="" maxlength="100" name="email">
                </div>

                <div class="form-group mb-2">
                    <label for="address">Địa chỉ</label>
                    <input class="form-control" type="text" maxlength="200" name="address" value="">
                    <label for="phone">Số điện thoại</label>
                    <input class="form-control" type="tel" maxlength="13" name="phone" value="">
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
                        <td>GREG BENNETT GD-100SCE <span class="product-quantity">x2</span></td>
                        <td>10.710.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>GREG BENNETT GD-100SCE <span class="product-quantity">x1</span></td>
                        <td>10.710.000 VNĐ</td>
                    </tr>
                    <tr>
                        <th scope="col">TỔNG ĐƠN HÀNG</th>
                        <th scope="col">40.970.000 VNĐ</th>
                    </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-secondary mb-2">ĐẶT HÀNG</button>
            </div>

        </div>
    </form>
</div>
<!-- End Order Detail -->
