<?php
include '../config/koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];
$get_data = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE id = '$id'");
$data = mysqli_fetch_assoc($get_data);
// Jika tombol update diklik
if (isset($_POST['update'])) {
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    $query = mysqli_query($koneksi, "UPDATE tbl_admin SET
        un = '$un',
        pw = '$pw'
        WHERE id = '$id'");
    if ($query) {
        echo "<script>
                alert('Data berhasil diubah!');
                window.location.href = '?page=admin';
              </script>";
    }
}
?>

<div class="content">
    <div class="desc-content">
        <h3>Ubah Data Admin</h3> <br>
        <p>Silakan isi formulir di bawah ini untuk mengubah data admin.</p>
    </div>
    <div class="desc-content2">
        <h3>Form Ubah Data Admin :</h3><br>
        <form action="" method="POST">
            <div class="form-group">
                <label>Username :</label><br>
                <input type="text" name="un" value="<?= $data['un']; ?>" required>
            </div>
            <div class="form-group">
                <label>Password :</label><br>
                <input type="password" name="pw" value="<?= $data['pw']; ?>" required>
            </div>
            <br>
            <button type="submit" name="update" class="btn edit">Update Data</button>
            <a href="?page=admin" class="btn hapus">Batal</a>
        </form>
    </div>
</div>