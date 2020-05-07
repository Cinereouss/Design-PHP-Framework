<script src="/backend/Public/js/jquery.min.js" type="text/javascript"></script>
<script src="/backend/Public/ckeditor/ckeditor.js"></script>
<script>
    $('#quanlyhethong-li').addClass("active");
    $('#quanlyhethong-span').addClass("selected");
    $('#thongtinsanpham').addClass("active");
</script>

<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-shopping-cart"></i>Danh mục sản phẩm
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
                                <th><?= $item->hienthi ? '<a class="btn btn-default btn-xs green""><i
                                                    class="fa fa-check"> YES</i></a>' : '<a class="btn btn-default btn-xs red""><i
                                                    class="fa fa-xing"> NO</i></a>' ?></th>
                                <th>
                                        <a class="btn btn-default btn-xs purple" style="color: white!important;"><i
                                                    class="fa fa-edit"> Edit</i></a>
                                        <a class="btn btn-default btn-xs red"><i class="fa fa-trash-o"> Delete</i></a>
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
<script src="/backend/Public/js/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        $('.CreateOrEdit').click(function () {
            $('.CreateOrEdit').prop('disabled', true);
            $.ajax({
                url: 'Product/createOrEdit',
                type: 'post',
                data: {id: $(this).data('id'), Confirm: 'true'},
                success: function (response) {
                    var responseArr = JSON.parse(response);
                    $('.modal-header').html(responseArr.Header);
                    // $('.modal-body').html(responseArr.Body);
                    // Display Modal
                    $('#empModal').modal('show');
                    $('.CreateOrEdit').prop('disabled', false);
                }
            });
        });
    });
</script>