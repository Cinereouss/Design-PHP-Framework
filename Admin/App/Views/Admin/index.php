<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700&amp;amp;subset=latin-ext,vietnamese">

    <link rel="icon" type="image/png" sizes="16x16" href="./public/image/logo.png">

    <title>Guitar-H2D | Dashboard</title>
</head>
<body>

<div class="d-flex" id="wrapper">

    <div id = 'menu'>
        <?php require_once('menu.php') ?>

    </div>
    <div class="clearfix"></div>
    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper">
        <?php require_once('sidebar.php') ?>
        <?php require_once ($data['Content'].'.php')?>
    </div>
</div>

<!-- Footer -->
<div id='footer'>
    <?php require_once ('./App/Views/Master/footer.php')?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./Public/js/bootstrap.bundle.min.js"></script>
<script src="./Public/js/javascript.js"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>
</html>