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
								Thêm mới banner </span>
                    </button>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover table-striped" style="border: 2px solid #121427">
                        <thead style="background-image: linear-gradient(to right, #121427, #4a144f) ; color: white">
                        <tr style="text-align: center">
                            <th style="width: 3%">#</th>
                            <th style="width: 7%">Images</th>
                            <th style="width: 20%">Tên banner</th>
                            <th style="width: 10%">Mô tả</th>
                            <th style="width: 10%">Hiển thị</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['data'] as $value => $item) : ?>
                            <tr>
                                <th style="vertical-align: middle">#</th>
                                <th style="vertical-align: middle"><img src="/Common/imgSlide/<?= $item->img ?>"
                                                                        style="width: 180px; height: 80px"></th>
                                <th style="vertical-align: middle"><?= $item->img ?></th>
                                <th style="vertical-align: middle"><?= $item->alt ?></th>
                                <th style="vertical-align: middle"><?= $item->active ? "<button id = 'yes' class='btn-hienthi btn btn-default btn-xs green' value='" . $item->id . "'><i
                                                    class='fa fa-check' > YES</i></button>" : "<button id = 'no' class=' btn-hienthi btn btn-default btn-xs red' value='" . $item->id . "'><i
                                                    class='fa fa-xing'> NO</i></button>" ?></th>
                                <th style="vertical-align: middle">
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
    $('#cauhinh-li').addClass("active");
    $('#cauhinh-span').addClass("selected");
    $('#slides').addClass("active");

    $(document).ready(function () {

        $('#form-Slide').ajaxForm({
            url: 'Slides/create',
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


        $('.CreateOrEdit').click(function () {
            $('.CreateOrEdit').prop('disabled', true);
            $('#empModal').modal('show');
            $('.CreateOrEdit').prop('disabled', false);
        });

        $('.btn-hienthi').on('click', function () {
            console.log('ok');
            var idd = $(this).val();
            $.ajax({
                url: 'Slides/hienthi',
                data: {
                    id: idd,
                    action: $(this).attr('id')
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

        $('.del').on('click', function () {
            Swal.fire({
                title: 'Nà ní?',
                text: "Xóa slide này ? !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Chuẩn, chơi đi đừng sợ!',
                cancelButtonText: 'Đâu đùa đấy!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: 'Slides/delete',
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
    })
</script>
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>