<?php
include '../config/koneksi.php';

// ambil data admin
$query = mysqli_query($koneksi, "SELECT * FROM tbl_admin");
?>

<div class="content">
    <div class ="desc-content">
        <h3>Data Admin</h3> <br>
        <p>Pada halaman ini menampilkan akun admin</p>
    </div>
    <div class="desc-content2">
        <h3>Tabel Admin :</h3><br>
        <a href="?page=tambahAdmin" class="btn tambah">+ Tambah Admin</a>
        <table>
            <tr>
                <th style="padding:10px;">No</th>
                <th style="padding:10px;">Username</th>
                <th style="padding:10px;">Aksi</th>
            </tr>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?=$no++; ?></td>
                <td><?=$data['un']; ?></td>
                <td>
                    <a href="?page=ubahAdmin&id=<?=$data['id']; ?>" class="btn edit">Edit</a>
                    <a href="?page=hapusAdmin&id=<?=$data['id']; ?>"
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