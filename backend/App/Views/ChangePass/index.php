
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>

<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-key"></i>Đổi mật khẩu
                </div>
            </div>
            <form action="#" method="post" id="form-change-password">
                <div class="form-group form-md-line-input">
                    <input type="password" class="form-control" id="oldpassword" placeholder="Mật khẩu cũ" name="oldPassword"
                           required>
                    <label for="matkhaucu">Mật khẩu cũ <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-success">
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu mới (> 8 ký tự)" name="newPassword"
                           required>
                    <label for="matkhaumoi">Nhập mật khẩu mới <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-error">
                    <input type="password" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu"
                           required>
                    <label for="nhaplai">Nhập lại mật khẩu <sup style="color: red">(*)</sup></label>
                </div>
                <button id="btn-submit" type="submit" class="btn btn-primary" name="btnSubmit">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
</div>

    <script>
        $('#quanlyuser-li').addClass("active");
        $('#quanlyuser-span').addClass("selected");
        $('#doimatkhau').addClass("active");

        $('#oldpassword').focusout(function () {
            $.ajax({
                type: 'POST',
                url: 'ChangePass/checkPassword',
                data: {
                    'password' : $('#oldpassword').val()
                },
                success: function (data) {
                    console.log(data);
                    if (data == 'false') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Mật khẩu không chính xác !',
                        });
                        $('#oldpassword').val('');
                        $('#oldpassword').css('background-color', 'white');
                    }
                    else {
                        $('#oldpassword').css('background-color', '#a9f1ab');
                    }
                }
            });
        });
        $('#password').focusout(function () {
            if($('#password').val().length < 8){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Mật khẩu quá ngắn, vui lòng nhập nhiều hơn 8 ký tự !',
                });
                $('#password').val('');
            }
        });
        $('#re-password').focusout(function () {
            if($('#password').val() !== $('#re-password').val() ){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Mật khẩu không trùng nhau, vui lòng kiểm tra lại !',
                });
                $('#re-password').val('');
            }
        });

        $('#form-change-password').ajaxForm({
            url : 'ChangePass/changePassword',
            type: 'POST',
            success : function (data) {
                if(data === 'true'){
                    Swal.fire({
                        icon: 'success',
                        title: 'Thông báo',
                        text: 'Đổi mật khẩu thành công',
                    });
                    $('#oldpassword').val('');
                    $('#password').val('');
                    $('#re-password').val('');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Thất bại, vui lòng liên hệ quản trị viên',
                    });
                }
            }
        })
    </script>