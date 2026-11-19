<?php
include '../config/koneksi.php';

if (isset($_POST['simpan'])) {

    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, "../gambar/" . $gambar);

    $query = mysqli_query($koneksi,
        "INSERT INTO tbl_produk
        (merk, jenis, harga, gambar)
        VALUES
        ('$merk','$jenis','$harga','$gambar')"
    );

    if ($query){
        echo "<script>
                alert('Produk berhasil ditambahkan!');
                window.location.href='?page=produk';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan produk');
              </script>";
    }
}
?>

<div class="content">

    <div class="desc-content">
        <h3>Tambah Produk</h3><br>
        <p>Silakan isi formulir berikut untuk menambahkan produk.</p>
    </div>

    <div class="desc-content2">

        <form action="" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Merk :</label><br>
                <input type="text" name="merk" required>
            </div>

            <br>

            <div class="form-group">
                <label>Jenis :</label><br>

                <select name="jenis" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="Jaket">Jaket</option>
                    <option value="Celana">Celana</option>
                    <option value="Baju">Baju</option>
                    <option value="Dress">Dress</option>
                    <option value="Kemeja">Kemeja</option>
                </select>
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

            <a href="?page=produk" class="btn edit">
                Kembali
            </a>

        </form>

    </div>
</div>