<?php
include '../config/koneksi.php';

// ambil data bundle
$query = mysqli_query($koneksi, "SELECT * FROM tbl_bundle");
?>

<div class="content">
    <div class ="desc-content">
        <h3>Data Bundle</h3> <br>
        <p>Pada halaman ini menampilkan data bundle</p>
    </div>
    <div class="desc-content2">
        <h3>Tabel Bundle :</h3><br>
        <a href="?page=tambahBundle" class="btn tambah">
            + Tambah Bundle
        </a>
        <table>
            <tr>
                <th style="padding:10px;">No</th>
                <th style="padding:10px;">Nama Bundle</th>
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
                    <td><?=$data['namaset']; ?></td>
                    <td><?=$data['harga']; ?></td>
                    <td>
                        <img src="../gambar/<?=$data['gambar']; ?>"
                            width="80">
                    </td>
                    <td>
                        <a href="?page=ubahBundle&id=<?=$data['id']; ?>"
                        class="btn edit">
                        Edit
                        </a>
                        <a href="?page=hapusBundle&id=<?=$data['id']; ?>"
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