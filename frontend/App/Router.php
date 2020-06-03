<?php
header("X-Frame-Options: DENY");
header("Content-Security-Policy: frame-ancestors 'none'", false);
require_once('./Core/App.php');
require_once('./Core/Controller.php');
require_once('./Core/Model.php');
$app = new App();