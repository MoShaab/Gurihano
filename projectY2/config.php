
<?php
ob_start();

$db_host = 'localhost';
$db_name = 'upload';
$db_user = 'root';
$db_password = '';

$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
    exit();
}
?>
