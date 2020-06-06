
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-key"></i><?= $data['Title'] ?>
                </div>
            </div>
            <form action="#" method="post" id="form-change-password">
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="oldpassword" placeholder="Mật khẩu cũ" name="oldPassword"
                           required value="<?= $data['data'][0]->website ?>">
                    <label for="matkhaucu">Địa chỉ website <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-success">
                    <input type="text" class="form-control" id="password" placeholder="Nhập mật khẩu mới (> 8 ký tự)" name="newPassword"
                           required value="<?= $data['data'][0]->facebook ?>">
                    <label for="matkhaumoi">Địa chỉ facebook <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-error">
                    <input type="text" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu"
                           required value="<?= $data['data'][0]->diachi ?>">
                    <label for="nhaplai">Địa chỉ làm việc <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-error">
                    <input type="text" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu"
                           required value="<?= $data['data'][0]->phone ?>">
                    <label for="nhaplai">Số điện thoại <sup style="color: red">(*)</sup></label>
                </div>
                <button id="btn-submit" type="submit" class="btn btn-primary" name="btnSubmit">Cập nhật thông tin liên hệ</button>
            </form>
        </div>
    </div>
</div>

<script>
    $('#cauhinh-li-li').addClass("active");
    $('#cauhinh-span').addClass("selected");
    $('#contact').addClass("active");
</script><?php
