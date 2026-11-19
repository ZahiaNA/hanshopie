<?php
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $namaset = $_POST['namaset'];
    $harga = $_POST['harga'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp, "../gambar/" . $gambar);
    $query = mysqli_query($koneksi,
        "INSERT INTO tbl_bundle
        (namaset, harga, gambar)
        VALUES
        ('$namaset','$harga','$gambar')"
    );
    if ($query){
        echo "<script>
                alert('Bundle berhasil ditambahkan!');
                window.location.href='?page=bundle';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan bundle');
              </script>";
    }
}
?>

<div class="content">
    <div class="desc-content">
        <h3>Tambah Bundle</h3><br>
        <p>Silakan isi data berikut untuk menambahkan bundle.</p>
    </div>
    <div class="desc-content2">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Bundle :</label><br>
                <input type="text" name="namaset" required>
            </div>
            <br>
            <div class="form-group">
                <label>Harga :</label><br>
                <input type="text" name="harga" required>
            </div>
            <br>
            <div class="form-group">
                <label>Gambar :</label><br>
                <input type="file" name="gambar" accept="image/*" required>
            </div>
            <br>
            <button type="submit" name="simpan" class="btn tambah">
                Simpan Data
            </button>
            <a href="?page=bundle" class="btn edit">
                Kembali
            </a>
        </form>
    </div>
</div>