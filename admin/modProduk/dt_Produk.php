<?php
include '../config/koneksi.php';

// ambil data produk
$query = mysqli_query($koneksi, "SELECT * FROM tbl_produk");
?>

<div class="content">
    <div class ="desc-content">
        <h3>Data Produk</h3> <br>
        <p>Pada halaman ini menampilkan data produk</p>
    </div>

    <div class="desc-content2">
        <h3>Tabel Produk :</h3><br>

        <a href="?page=tambahProduk" class="btn tambah">
            + Tambah Produk
        </a>

        <table>
            <tr>
                <th style="padding:10px;">No</th>
                <th style="padding:10px;">Merk</th>
                <th style="padding:10px;">Jenis</th>
                <th style="padding:10px;">Harga</th>
                <th style="padding:10px;">Gambar</th>
                <th style="padding:10px;">Aksi</th>
            </tr>

            <?php
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$no++; ?></td>
                <td><?=$data['merk']; ?></td>
                <td><?=$data['jenis']; ?></td>
                <td><?=$data['harga']; ?></td>

                <td>
                    <img src="../gambar/<?=$data['gambar']; ?>"
                         width="80">
                </td>

                <td>
                    <a href="?page=ubahProduk&id=<?=$data['id']; ?>"
                       class="btn edit">
                       Edit
                    </a>

                    <a href="?page=hapusProduk&id=<?=$data['id']; ?>"
                       class="btn hapus"
                       onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                       Hapus
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>