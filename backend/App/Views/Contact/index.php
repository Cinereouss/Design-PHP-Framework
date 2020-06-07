
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
            <form action="Contact/update" method="post" id="form-contact">
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="website" placeholder="Địa chỉ website" name="Website"
                           required value="<?= $data['data'][0]->website ?>">
                    <label for="website">Địa chỉ website <sup style="color: red">(*)</sup></label>
                </div>
                <div class="row">
                    <div class="form-group form-md-line-input has-success col-md-6">
                        <input type="text" class="form-control" id="facebook" placeholder="Địa chỉ facebook" name="Facebook"
                               required value="<?= $data['data'][0]->facebook ?>">
                        <label for="facebook" style="padding-left: 16px">Địa chỉ facebook <sup style="color: red">(*)</sup></label>
                    </div>
                    <div class="form-group form-md-line-input has-success col-md-6">
                        <input type="text" class="form-control" id="email" placeholder="Địa chỉ email" name="Email"
                               required value="<?= $data['data'][0]->email ?>">
                        <label for="email" style="padding-left: 16px">Địa chỉ email <sup style="color: red">(*)</sup></label>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="form-group form-md-line-input has-error">
                    <input type="text" class="form-control" id="copyright" placeholder="Copyright" name="Copyright"
                           required value="<?= $data['data'][0]->diachi ?>">
                    <label for="copyright">Copyright content<sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-error">
                    <input type="text" class="form-control" id="phone" placeholder="Telephone" name="Phone"
                           required value="<?= $data['data'][0]->phone ?>">
                    <label for="phone">Số điện thoại <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group">
                    <label for="infor">Content <sup style="color: red">(*)</sup></label>
                    <textarea type="text" class="ckeditor" id="infor" name="Content"
                              required ><?= $data['data'][0]->infor ?></textarea>
                </div>
                <button id="btn-submit" type="submit" class="btn btn-primary" name="btnSubmit">Cập nhật thông tin liên hệ</button>
            </form>
        </div>
    </div>
</div>
<script src="/backend/Public/ckeditor/ckeditor.js"></script>
<script>
    $('#cauhinh-li  ').addClass("active");
    $('#cauhinh-span').addClass("selected");
    $('#contact').addClass("active");
    var info = CKEDITOR.replace('infor');
    $(document).ready(function () {
        info.on('change', function () {
            info.updateElement();
        })

        $('#form-contact').ajaxForm({
            url: 'Contact/update',
            type: 'POST',
            success: function (data) {
                if (data === 'true') {
                    Swal.fire({
                        icon: 'success',
                        title: 'WOW!',
                        text: 'Cập nhật thông tin thành công',
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
    })
</script>
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>
