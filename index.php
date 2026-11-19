<?php
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'tentang':
        $file = 'user/us_tentang.php';
        break;
    case 'kontak':
        $file = 'user/us_kontak.php';
        break;
    case 'login':
        $file = 'us_login.php';
        break; 
    default:
        $file = 'user/us_index.php';
        break;
}

require 'user/us_header.php';
require $file;
require 'user/us_footer.php';
?>