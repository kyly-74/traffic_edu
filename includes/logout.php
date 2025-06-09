<?php
session_start();

session_unset();
session_destroy();

session_start();
$_SESSION['message'] = 'Đăng xuất thành công';

header('Location: ../index.php');
exit;
