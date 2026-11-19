<?php
include '../config/koneksi.php';

// Cek apakah tombol simpan sudah diklik
if (isset($_POST['simpan'])){

    $un = $_POST['un'];
    $pw = $_POST['pw'];

    // Query untuk menambahkan data admin ke tabel tbl_admin
    $query = mysqli_query($koneksi, "INSERT INTO tbl_admin (un, pw) 
                                     VALUES ('$un', '$pw')");
    if ($query){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location.href='?page=admin';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan data: " . mysqli_error($koneksi) . "');
              </script>";
    }
}
?>

<div class="content">
    <div class ="desc-content">
        <h3>Tambah Admin</h3> <br>
        <p>silahkan isi formulir di bawah ini untuk menambahkan data admin</p>
    </div>
    <div class="desc-content2">
        <form action="" method="POST">
            <div class="form-group">
                <label>Username :</label><br>
                <input type="text" name="un" required placeholder="Masukkan Username">
            </div>
            <br>
            <div class="form-group">
                <label>Password :</label><br>
                <input type="password" name="pw" required placeholder="Masukkan Password">
            </div>
            <br>
            <button type="submit" name="simpan" class="btn tambah">Simpan Data</button>
            <a href="?page=admin" class="btn edit">Kembali</a>
        </form>
    </div>
</div>