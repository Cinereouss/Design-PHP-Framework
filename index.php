<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('core/database.php');
$config = [
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'',
    'db_name'=>'hocltweb'
];
$db = new database($config);

$nguoi = $db->table('nguoi')->findAll();
print_r($nguoi);

?>