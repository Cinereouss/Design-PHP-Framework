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
                                <th style="vertical-align: middle"><img src="/Common/imgSlide/<?= $item->img ?>" style="width: 180px; height: 80px"></th>
                                <th style="vertical-align: middle"><?= $item->img ?></th>
                                <th style="vertical-align: middle"><?= $item->alt ?></th>
                                <th style="vertical-align: middle"><?= $item->active ? "<button class='btn btn-default btn-xs green' value='" . $item->id . "'><i
                                                    class='fa fa-check' > YES</i></button>" : "<button class='btn btn-default btn-xs red' value='" . $item->id . "'><i
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
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>
<script>
    $('#cauhinh-li-li').addClass("active");
    $('#cauhinh-span').addClass("selected");
    $('#slides').addClass("active");
   </script>
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>