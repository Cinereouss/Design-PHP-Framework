Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore

@Cinereouss
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.


FresherDuong
/
front_end_btl_web
1
00
Code Issues 0 Pull requests 0 Actions Projects 0 Wiki Security Insights
front_end_btl_web/index.html
@FresherDuong FresherDuong polish and add login form
db1de19 20 hours ago
501 lines (474 sloc)  26.1 KB

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700&amp;amp;subset=latin-ext,vietnamese">

    <link rel="icon" type="image/png" sizes="16x16" href="./public/image/logo.png">

    <title>Guitar-H2D | Bán guitar uy tín</title>
</head>
<body>


<div id='header'>
    <!-- Header -->
    <?php require_once "header.php" ?>
</div>

<div id = 'content'>
    <?php require_once "./App/Views/".$data['Content']."/index.php" ?>
</div>

<div id='footer'>
    <!-- Footer -->
    <?php require_once "footer.php" ?>
</div>
</body>
</html>
© 2020 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
Pricing
API
Training
Blog
About
