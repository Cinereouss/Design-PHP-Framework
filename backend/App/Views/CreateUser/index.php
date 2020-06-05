<div class="row">
    <div class="col-md-12">
        <!-- Begin: life time stats -->
        <div class="portlet">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-key"></i>Tao tài khoản
                </div>
            </div>
            <form action="CreateUser/register" method="post" id="form-dangky">
                <div class="form-group form-md-line-input has-info">
                    <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email"
                           required>
                    <label for="nhaplai">Email <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" maxlength="15"
                           required>
                    <label for="matkhaucu">Username <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-success">
                    <input type="password" class="form-control" id="password"
                           placeholder="Nhập mật khẩu mới (> 8 ký tự)" name="password"
                           required>
                    <label for="matkhaumoi">Nhập mật khẩu mới <sup style="color: red">(*)</sup></label>
                </div>
                <div class="form-group form-md-line-input has-error">
                    <input type="password" class="form-control" id="re-password" placeholder="Nhập lại mật khẩu"
                           name="re-password"
                           required>
                    <label for="nhaplai">Nhập lại mật khẩu <sup style="color: red">(*)</sup></label>
                </div>
                <button id="btn-submit" type="submit" class="btn btn-primary" name="btnSubmit">Đăng ký</button>
            </form>
        </div>
    </div>
</div>
<script src="/backend/Public/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/backend/Public/js/jquery.form.min.js" type="text/javascript"></script>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>
<script>
    $('#quanlyuser-li').addClass("active");
    $('#quanlyuser-span').addClass("selected");
    $('#taotaikhoan').addClass("active");

    $('#username').focusout(function () {
        $.ajax({
            type: 'POST',
            url: 'CreateUser/checkUser',
            data: {
                'username' : $('#username').val()
            },
            success: function (data) {
                console.log(data);
                if (data === 'false') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Tên đăng nhập đã tồn tại !',
                    });
                    $('#username').val('');
                    $('#username').focus()
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

    $('#form-dangky').ajaxForm({
        url : 'CreateUser/register',
        type: 'POST',
        success : function (data) {
           if(data === 'true'){
               Swal.fire({
                   icon: 'success',
                   title: 'Thông báo',
                   text: 'Tạo tài khoản thành công',
               });
               $('#username').val('');
               $('#email').val('');
               $('#password').val('');
               $('#re-password').val('');
               $('#username').focus()
           }else {
               Swal.fire({
                   icon: 'error',
                   title: 'Oops...',
                   text: 'Tạo tài khoản thất bại vui lòng liên hệ quản tri viên',
               });
               $('#username').val('');
               $('#email').val('');
               $('#password').val('');
               $('#re-password').val('');
               $('#username').focus()
           }
        }
    })
</script>