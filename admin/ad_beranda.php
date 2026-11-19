<?php
include '../config/koneksi.php';

$totalProduk = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM tbl_produk")
);

$totalAdmin = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM tbl_admin")
);

$totalBundle = mysqli_num_rows(
    mysqli_query($koneksi, "SELECT * FROM tbl_bundle")
);
?>

<div class="content">
    <div class="desc-content">
        <h3>Dashboard - Admin</h3><br>
        <p>Pada halaman ini berisi informasi jumlah produk, admin, dan bundle.</p>
    </div>
    <div class="desc-content2">
        <h3>Statistik Toko :</h3><br>

        <div class="bagian-total">
            <div class="sub-bag-tot">
                <p class="des-bagian">Total Produk</p>
                <p class="jmlh-bagian"><?= $totalProduk; ?></p>
            </div>
            <div class="sub-bag-tot">
                <p class="des-bagian">Total Admin</p>
                <p class="jmlh-bagian"><?= $totalAdmin; ?></p>
            </div>
            <div class="sub-bag-tot">
                <p class="des-bagian">Total bundle</p>
                <p class="jmlh-bagian"><?= $totalBundle; ?></p>
            </div>

        </div>

    </div>
</div>