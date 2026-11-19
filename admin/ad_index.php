<?php
include "cek_sesi.php";

$page = $_GET['page'] ?? 'Beranda';

switch ($page) {
    case 'logout':
        header("Location: ../index.php?page=login");
        break;
    case 'tambahBundle':
        $file = 'modBundle/tambahBundle.php';
        break;
    case 'hapusBundle':
        $file = 'modBundle/hapusBundle.php';
        break;
    case 'ubahBundle':
        $file = 'modBundle/ubahBundle.php';
        break;
    case 'tambahAdmin':
        $file = 'modAdmin/tambahAdmin.php';
        break;
    case 'hapusAdmin':
        $file = 'modAdmin/hapusAdmin.php';
        break;
    case 'ubahAdmin':
        $file = 'modAdmin/ubahAdmin.php';
        break;
    case 'tambahProduk':
        $file = 'modProduk/tambahProduk.php';
        break;
    case 'hapusProduk':
        $file = 'modProduk/hapusProduk.php';
        break;
    case 'ubahProduk':
        $file = 'modProduk/ubahProduk.php';
        break;
    case 'admin':
        $file = 'modAdmin/dt_admin.php';
        break;
    case 'produk':
        $file = 'modProduk/dt_Produk.php';
        break;
    case 'bundle':
        $file = 'modBundle/dt_Bundle.php';
        break;
    default:
        $file = 'ad_beranda.php';
        break;
}

require 'ad_header.php';
require 'ad_sidebar.php';
require $file;
require 'ad_footer.php';
?>