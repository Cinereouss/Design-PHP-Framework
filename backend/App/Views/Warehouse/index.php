<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-shopping-cart"></i><?= $data['Title'] ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover table-striped" style="border: 2px solid #121427">
                        <thead style="background-image: linear-gradient(to right, #121427, #4a144f) ; color: white">
                        <tr style="text-align: center; vertical-align: middle">
                            <td style="width: 3%">#</td>
                            <td style="width: 10%">Hình ảnh</td>
                            <td style="width: 7%">Mã hàng</td>
                            <td style="width: 20%">Tên sản phẩm</td>
                            <td style="width: 10%">Giá</td>
                            <td style="width: 10%">Số lượng trong kho</td>
                            <td style="width: 15%">Status</td>
                            <td style="width: 15%">Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['data'] as $value => $item) : ?>
                            <tr style="text-align: center;">
                                <td style="vertical-align: middle">#</td>
                                <td style="vertical-align: middle"><img src="/Common/image/<?= $item->image ?>"
                                                                        style="width: 80px; height: 80px"></td>
                                <td style="vertical-align: middle"><?= $item->masp ?></td>
                                <td style="vertical-align: middle"><?= $item->ten ?></td>
                                <td style="vertical-align: middle"><?= func::formatMoney($item->giasp) . ' vnd' ?></td>
                                <td style="vertical-align: middle"><?= $item->soluong ?></td>
                                <td style="vertical-align: middle"> <?= $item->status ?></td>
                                <td style="vertical-align: middle">
                                    <button class="btn btn-default btn-xs purple" style="color: white!important;"
                                            value="<?= $item->id ?>" id="nhaphang"><i class="fa fa-download"> Nhập
                                            hàng</i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End: life time stats -->
    </div>
</div>
<style>
    th {
        text-align: center;
    }
</style>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>
<script>
    $('#quanlyhethong-li').addClass("active");
    $('#quanlyhethong-span').addClass("selected");
    $('#khohang').addClass("active");

    $(document).ready(function () {
        $('#nhaphang').on('click', function () {
            console.log('ok');
            var id_product = $(this).val();
            Swal.fire({
                title: "Nhập hàng!",
                text: "Nhập số lượng bạn muốn nhập:",
                input: 'number',
                showCancelButton: true,
                confirmButtonColor: 'green'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url : 'Warehouse/nhaphang',
                        type : 'post',
                        data: {
                            id : id_product,
                            soluong : result.value
                        },
                        success : function () {
                            if ('true' === 'true') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'WOW!',
                                    text: 'Nhập hàng hàng thành công',
                                }).then(okay => {
                                    if (okay) {
                                        location.reload()
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Thất bại, vui lòng liên hệ quản trị viên',
                                });
                            }
                        }
                    })
                }
            });
        })
    })
</script>
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>