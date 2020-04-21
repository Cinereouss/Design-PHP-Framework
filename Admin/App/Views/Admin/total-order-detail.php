<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <a class="navbar-brand sidebar-heading" href="./index.html"><ion-icon class="logo-image-btl" name="musical-notes-outline"></ion-icon> Guitar-H2D</a>
        <div class="list-group list-group-flush">
            <a href="../Dashboard/index.php" class="list-group-item list-group-item-action">Tổng quan</a>
            <a href="total-product.php" class="list-group-item list-group-item-action">Sản phẩm</a>
            <a href="total-order.php" class="list-group-item list-group-item-action active">Đơn đặt hàng</a>
            <a href="./create-product.html" class="list-group-item list-group-item-action">Thêm sản phẩm</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark border-bottom">
            <button class="btn btn-outline-warning" id="menu-toggle">Bật/tắt menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Chào Dương Đình <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="dashboard-container">
                <!-- Page Content -->
                <h5>CHI TIẾT KHÁCH HÀNG</h5>
                <div class="table-responsive-md">
                    <table class="table table-admin-cart">
                        <thead>
                        <tr class="table-warning">
                            <th scope="col">STT</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="./public/image/product-1.jpg" alt="product-1"></td>
                            <td>GREG BENNETT GD-100SCE</td>
                            <td>10.710.000 VNĐ</td>
                            <td>1</td>
                            <td>10.710.000 VNĐ</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img src="./public/image/product-2.jpg" alt="product-1"></td>
                            <td>GREG BENNETT GD-100SCE</td>
                            <td>10.710.000 VNĐ</td>
                            <td>1</td>
                            <td>10.710.000 VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <h5>CHI TIẾT ĐƠN HÀNG</h5>
                <div class="table-responsive-md">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">Họ tên</th>
                            <td>Đắc Hiếu</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>dachieu@gmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">Địa chỉ</th>
                            <td>Lê Chân, Hải Phòng</td>
                        </tr>
                        <tr>
                            <th scope="row">Số điện thoại</th>
                            <td>0369877865</td>
                        </tr>
                        <tr>
                            <th scope="row">Tổng tiền</th>
                            <td>40.000.000 VNĐ</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <form class="form-inline">
                    <select class="custom-select">
                        <option selected>Chọn trạng thái cho đơn hàng này</option>
                        <option value="1">Hủy đơn hàng</option>
                        <option value="2">Chưa giao hàng</option>
                        <option value="3">Đã giao hàng</option>
                    </select>
                    <button type="submit" class="btn btn-secondary">CẬP NHẬT TRẠNG THÁI MỚI</button>
                </form>
                <!-- End page content -->
            </div>
        </div>
    </div>
</div>