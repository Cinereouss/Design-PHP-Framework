<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+:400,500,700|Roboto:400,500,700&amp;subset=latin-ext,vietnamese">
    <link rel="icon" type="image/png" sizes="16x16" href="/Public/image/logo.png">
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>

    <title>Guitar-H2D | <?= $data['Title'] ?></title>
</head>
<body>

<?php require_once "header.php" ?>


<?php require_once "./App/Views/".$data['Content']."/index.php" ?>


<?php require_once "footer.php" ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/Public/js/bootstrap.bundle.min.js"></script>
<script src="/Public/js/javascript.js"></script>
</body>
</html>
