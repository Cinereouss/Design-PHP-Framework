<?php
if (isset($_SESSION['username'])) {
    header('Location: Home');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/backend/App/Views/User/css/style.css">
</head>
<body>
<div class="form">
    <h1>User Login</h1>
    <div class="line"></div>
    <div class="form-inner">
        <label for="Username-label">Username</label><br/>
        <div class="space"></div>
        <input required type="text" id="user" placeholder="username" autofocus/><br/>
        <div class="space"></div>
        <label for="Username-label">Password</label><br/>
        <div class="space"></div>
        <input required type="password" id="pass" placeholder="password"/><br/>

        <button class="submit-btn" type="submit" id="btn-login">Sign In</button>
    </div>
    <div class="space"></div>
    <p style=" margin-top: 40px ; color: white; text-align: center">&copy; 2020 Bài tập lớn | Design by H2D</p>
</div>

<div id="particles-js"></div>
<!-- scripts -->
<script src="/backend/App/Views/User/particles.js"></script>
<script src="/backend/App/Views/User/js/app.js"></script>
<script src="./public/js/jquery.min.js"></script>
<script src="/backend/App/Views/User/js/sweetalert2.all.min.js"></script>
<script src="./public/js/bootstrap.bundle.min.js"></script>
<script src="./public/js/javascript.js"></script>
<!-- stats.js -->
<script src="/backend/App/Views/User/js/lib/stats.js"></script>

</body>
</html>
<script>
    $(document).ready(function () {
        $("#btn-login").on('click', function () {
            if ($("#user").val() != '' && $("#pass").val() != '') {
                $('#btn-login').prop('disabled', true);
                var data = {
                    'btn-login': true,
                    'username': $("#user").val(),
                    'password': $("#pass").val()
                };
                $.ajax({
                    type: 'POST',
                    url: 'User/userLogin',
                    data: data,
                    success: function (data) {
                        if (data === 'true') {
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Thông tin đăng nhập không chính xác, vui lòng kiểm tra lại!',
                            });
                            $('#btn-login').prop('disabled', false);
                        }
                    }
                });
                return false;
            } else {
                $("#user").val() != '' ? Swal.fire({
                    icon: 'info',
                    title: 'Ê đồng chí!',
                    text: 'Username không được để trống nhé!',
                }) : Swal.fire({
                    icon: 'info',
                    title: 'Ê đồng chí!',
                    text: 'Password không được để trống nhé!',
                });
            }
        });
    })
</script>
