<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="row">
                <div class="col-md-6">
                    <div style="border-bottom: 3px solid #0a6aa1; margin-bottom: 2%">
                        <h3>Thông tin đơn hàng</h3>
                    </div>

                    <div class="form-group form-md-line-input">
                        <input type="text" class="form-control" id="ngaydat" placeholder="Ngày đặt" name="ngaydat"
                               required value="<?= $data['Data'][0]->ngay ?>">
                        <label for="ngaydat">Ngày đặt hàng <sup style="color: red">(*)</sup></label>
                    </div>
                    <div class="form-group form-md-line-input has-success">
                        <input type="text" class="form-control" id="password" placeholder="Ghi chú của khách hàng"
                               name="ghichu"
                               required value="<?= $data['Data'][0]->ghichu ?>">
                        <label for="ghichu">Ghi chú đặt hàng <sup style="color: red">(*)</sup></label>
                    </div>
                    <div class="form-group form-md-line-input has-error">
                        <input type="text" class="form-control" id="sum" placeholder="Tổng giá trị đơn hàng"
                               required value="<?= func::formatMoney($data['Data'][0]->tongtien) . " vnd" ?>">
                        <label for="sum">Tổng giá trị đơn hàng <sup style="color: red">(*)</sup></label>
                    </div>
                </div>
                <div class="col-md-6" style="border-left: 2px solid #0f0f0f">
                    <div style="border-bottom: 3px solid #0a6aa1; margin-bottom: 2%">
                        <h3>Thông tin người đặt</h3>
                    </div>

                    <div class="form-group form-md-line-input">
                        <input type="text" class="form-control" id="tenkhach" placeholder="Tên khách hàng" name="name"
                               required value="<?= $data['Khachhang'][0]->ten ?>">
                        <label for="tenkhach">Tên khách hàng <sup style="color: red">(*)</sup></label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-success">
                                <input type="text" class="form-control" id="phone"
                                       placeholder="Số điện thoại" name="phone"
                                       required value="<?= $data['Khachhang'][0]->sdt ?>">
                                <label for="phone">Số điện thoại <sup style="color: red">(*)</sup></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-md-line-input has-error">
                                <input type="text" class="form-control" id="email"
                                       placeholder="Địa chỉ email"
                                       required value="<?= $data['Khachhang'][0]->mail ?>">
                                <label for="email">Địa chỉ email <sup style="color: red">(*)</sup></label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group form-md-line-input has-error" style="margin-top: 4.5%">
                        <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ liên hệ"
                               required value="<?= $data['Khachhang'][0]->diachi ?>">
                        <label for="diachi">Địa chỉ liên hệ <sup style="color: red">(*)</sup></label>
                    </div>
                </div>
            </div>
            <div class="table-container"
                 style="margin-top: 10px; height: 45vh;border: 2px solid #121427; overflow-y:auto;">
                <table class="table table-bordered table-hover table-striped">
                    <thead style="background-image: linear-gradient(to right, #121427, #4a144f) ; color: white">
                    <tr style="text-align: center; vertical-align: middle">
                        <td style="width: 10%">Hình ảnh</td>
                        <td style="width: 7%">Mã hàng</td>
                        <td style="width: 20%">Tên sản phẩm</td>
                        <td style="width: 10%">Giá</td>
                        <td style="width: 10%">Số lượng mua</td>
                        <td style="width: 15%">Tổng giá</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data['Sanpham'] as $value => $item) : ?>
                        <tr style="text-align: center;">
                            <td style="vertical-align: middle"><img src="/Common/image/<?= $item->image ?>"
                                                                    style="width: 80px; height: 80px"></td>
                            <td style="vertical-align: middle"><?= $item->masp ?></td>
                            <td style="vertical-align: middle"><?= $item->ten ?></td>
                            <td style="vertical-align: middle"><?= func::formatMoney($item->giasp) . ' vnd' ?></td>
                            <td style="vertical-align: middle"><?= $item->soluongdat ?></td>
                            <td style="vertical-align: middle">
                                <?= func::formatMoney($item->soluongdat * $item->giasp) . ' vnd' ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 3vh; padding-left: 30%  ">
                <a href="tel: <?= $data['Khachhang'][0]->sdt ?>">
                    <button id="phone" type="button" class="btn btn-primary green" name="btnSubmit">Liên hệ điện thoại
                    </button>
                </a>
                <a href="mailto: <?= $data['Khachhang'][0]->mail ?>">
                    <button id="mail" type="button" class="btn  btn-primary yellow" name="btnSubmit">Soạn email</button>
                </a>
                <button id="confirm" type="button" class="btn  btn-primary" name="btnSubmit"
                        value="<?= $data['Data'][0]->id ?>">Xác nhận đơn hàng
                </button>
                <button id="cancel" type="button" class="btn btn-primary red" name="btnSubmit"
                        value="<?= $data['Data'][0]->id ?>" style="margin-left: 0">Hủy bỏ đơn hàng
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#confirm").on('click', function () {
            Swal.fire({
                title: 'Nà ní?',
                text: "Xác nhận gửi đơn hàng này? !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Chuẩn, chơi đi đừng sợ!',
                cancelButtonText: 'Đâu đùa đấy!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/admin/Xulydonhang/xacnhan',
                        type: 'post',
                        data: {
                            id: $(this).val(),
                        },
                        success: function (data) {
                            if (data === "true") {
                                Swal.fire(
                                    'Ok đã xong!',
                                    'Em xóa xong rồi ấy nhé',
                                    'success'
                                ).then(okay => {
                                    if (okay) {
                                        window.top.close();
                                    }
                                });
                            }
                            if (data === "full") {
                                Swal.fire(
                                    'Từ từ',
                                    'Có một mặt hàng không đủ trong kho. Vui lòng kiểm tra lại!',
                                    'warning'
                                ).then(okay => {
                                    if (okay) {
                                        location.reload()
                                    }
                                });
                            }
                            if (data === "false") {
                                Swal.fire(
                                    'Có biến rồi!',
                                    'Bị sao ấy chưa hủy được sếp ạ!',
                                    'error'
                                )
                            }
                        }
                    })
                }
            })
        })

        $("#cancel").on('click', function () {
            Swal.fire({
                title: 'Nà ní?',
                text: "Sẽ hủy đơn hàng này? !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Chuẩn, chơi đi đừng sợ!',
                cancelButtonText: 'Đâu đùa đấy!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '/admin/Xulydonhang/huydon',
                        type: 'post',
                        data: {id: $(this).val()},
                        success: function (data) {
                            if (data === "true") {
                                Swal.fire(
                                    'Ok đã xong!',
                                    'Em xóa xong rồi ấy nhé',
                                    'success'
                                ).then(okay => {
                                    if (okay) {
                                        window.top.close();
                                    }
                                });
                            } else {
                                Swal.fire(
                                    'Có biến rồi!',
                                    'Bị sao ấy chưa hủy được sếp ạ!',
                                    'error'
                                ).then(okay => {
                                    if (okay) {
                                        window.top.close();
                                    }
                                });
                            }
                        }
                    })
                }
            })
        })
    })
</script>