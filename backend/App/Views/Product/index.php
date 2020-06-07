<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-shopping-cart"></i> <?= $data['Title'] ?>
                </div>
                <div class="actions">
                    <button class="btn default green-stripe CreateOrEdit" data-id="">
                        <i class="fa fa-plus"></i>
                        <span class="hidden-480">
								Thêm mới sản phẩm </span>
                    </button>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover table-striped" style="border: 2px solid #121427">
                        <thead style="background-image: linear-gradient(to right, #121427, #4a144f) ; color: white">
                        <tr style="text-align: center">
                            <th style="width: 3%">#</th>
                            <th style="width: 7%">Mã hàng</th>
                            <th style="width: 20%">Tên sản phẩm</th>
                            <th style="width: 10%">Giá</th>
                            <th style="width: 15%">Thương hiệu</th>
                            <th style="width: 15%">Loại đàn</th>
                            <th style="width: 15%">Status</th>
                            <th style="width: 5%">Active</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['data'] as $value => $item) : ?>
                            <tr>
                                <th>#</th>
                                <th><?= $item->masp ?></th>
                                <th><?= $item->ten ?></th>
                                <th><?= func::formatMoney($item->giasp) . ' vnd' ?></th>
                                <th><?= $item->thuonghieu_id ?></th>
                                <th><?= $item->loaidan_id ?></th>
                                <th> <?= $item->status ?></th>
                                <th><?= $item->hienthi ? "<button id = 'yes' class='btn-hienthi btn btn-default btn-xs green' value='" . $item->id . "'><i
                                                    class='fa fa-check' > YES</i></button>" : "<button id = 'no' class=' btn-hienthi btn btn-default btn-xs red' value='" . $item->id . "'><i
                                                    class='fa fa-xing'> NO</i></button>" ?></th>
                                <th>
                                    <button class="btn btn-default btn-xs purple" style="color: white!important;"
                                            value="<?= $item->id ?>"><i
                                                class="fa fa-edit"> Edit</i></button>
                                    <button class="btn del btn-default btn-xs red" value="<?= $item->id ?>"><i
                                                class="fa fa-trash-o"> Delete</i></button>
                                </th>
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
<?php require_once('modal.php') ?>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>
<script>
    $('#quanlyhethong-li').addClass("active");
    $('#quanlyhethong-span').addClass("selected");
    $('#thongtinsanpham').addClass("active");
    var mota = CKEDITOR.replace('ck-mota',
        {
            skin: 'office2003',
            height: '115px'
        });

    var tomtat = CKEDITOR.replace('ck-tomtat',
        {
            skin: 'office2003',
            height: '115px'
        });

    var thongso = CKEDITOR.replace('ck-thongso');

    $(document).ready(function () {
        $('.del').on('click', function () {
            Swal.fire({
                title: 'Nà ní?',
                text: "Sẽ xóa tất cả thông tin liên quan đến sản phẩm bao gồm cả đơn hàng? !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Chuẩn, chơi đi đừng sợ!',
                cancelButtonText: 'Đâu đùa đấy!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: 'Product/delete',
                        type: 'post',
                        data: {id: $(this).val()},
                        success: function (data) {
                            console.log(data);
                            if (data === "true") {
                                Swal.fire(
                                    'Ok đã xong!',
                                    'Em xóa xong rồi ấy nhé',
                                    'success'
                                ).then(okay => {
                                    if (okay) {
                                        location.reload()
                                    }
                                });
                            } else {
                                Swal.fire(
                                    'Có biến rồi!',
                                    'Bị sao ấy chưa xóa được sếp ạ!',
                                    'error'
                                )
                            }
                        }
                    })
                }
            })
        })

        tomtat.on('change', function () {
            tomtat.updateElement();
        })

        mota.on('change', function () {
            mota.updateElement();
        })

        thongso.on('change', function () {
            thongso.updateElement();
        })

        $('.CreateOrEdit').click(function () {
            $('.CreateOrEdit').prop('disabled', true);
            $.ajax({
                url: 'Product/initModal',
                type: 'post',
                data: {id: $(this).data('id'), Confirm: 'true'},
                success: function (response) {
                    var responseObj = JSON.parse(response);
                    $('#modal-content').text(responseObj.Header);
                    $.each(responseObj.Loaidan, function (key, val) {
                        $('#loaidan').append($('<option>', {
                            value: val.id,
                            text: val.ten,
                        }))
                    })
                    $.each(responseObj.Thuonghieu, function (key, val) {
                        $('#thuonghieu').append($('<option>', {
                            value: val.id,
                            text: val.ten,
                        }))
                    })

                    $('#empModal').modal('show');
                    $('.CreateOrEdit').prop('disabled', false);
                }
            });
        });
        $('.btn-action').on('click', function () {
            var elementInpFile = $(this).siblings('input')[0];
            var elementInpBtn = $(this);
            if (elementInpBtn[0].value != 0) {
                elementInpFile.click();
            } else {
                var index = $(this).siblings('.btn-action')[0].value;
                $(elementInpBtn).addClass('hidden');
                $(elementInpBtn).siblings('.btn-action').removeClass('hidden');
                $('#name-' + index).text('');
                $('#size-' + index).text('');
                $('#preImg-' + index).remove();
                $(elementInpFile).val('');
                if (index == 1) {
                    $('#avt-product').removeClass('hidden');
                }
            }
        })

        $('.inp-Files').on('change', function () {
            var index = $(this).siblings('.btn-uploadFiles')[0].value;
            var elementInpFile = $(this)[0];
            if (elementInpFile.files.length == 1) {
                if (index == 1) {
                    $('#avt-product').addClass('hidden');
                }
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview-' + index).after('<img id="preImg-' + index + '" src="' + e.target.result + '" width="80" height="46"/>');
                    $('#name-' + index).text(elementInpFile.files[0].name);
                    $('#size-' + index).text(((elementInpFile.files[0].size) / 1024).toFixed(2) + ' kb');
                };
                reader.readAsDataURL(elementInpFile.files[0]);
                $(this).siblings('.btn-uploadFiles').addClass('hidden');
                $(this).siblings('.btn-cencalFiles').removeClass('hidden');
            }
        })

        $('.btn-hienthi').on('click', function () {
            console.log('ok');
            var idd = $(this).val();
            $.ajax({
                url: 'Product/hienthi',
                data: {
                    id: idd,
                    action : $(this).attr('id')
                },
                type: 'post',
                success: function (data) {
                    if (data === 'true') {
                        location.reload()
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Thất bại, vui lòng liên hệ quản trị viên',
                        });
                    }
                }
            })
        })

        $('#form-Product').ajaxForm({
            url: 'Product/create',
            type: 'POST',
            success: function (data) {
                $('#empModal').modal('toggle');
                if (data === 'true') {
                    Swal.fire({
                        icon: 'success',
                        title: 'WOW!',
                        text: 'Thêm mặt hàng thành công',
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
    });
</script>
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>