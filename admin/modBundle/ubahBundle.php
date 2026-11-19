<?php
include '../config/koneksi.php';

$id = $_GET['id'];

$get_data = mysqli_query($koneksi, "SELECT * FROM tbl_bundle WHERE id='$id'");
$data = mysqli_fetch_assoc($get_data);

if(isset($_POST['update'])){

    $namaset = $_POST['namaset'];
    $harga = $_POST['harga'];

    // cek apakah ada gambar baru
    if($_FILES['gambar']['name'] != ''){

    // hapus gambar lama
    $file_lama = "../gambar/".$data['gambar'];
    if(file_exists($file_lama)){
        unlink($file_lama);
        }
        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($tmp, "../gambar/".$gambar);
        $query = mysqli_query($koneksi,
            "UPDATE tbl_bundle SET
            namaset='$namaset',
            harga='$harga',
            gambar='$gambar'
            WHERE id='$id'"
        );
    }else{
        $query = mysqli_query($koneksi,
            "UPDATE tbl_bundle SET
            namaset='$namaset',
            harga='$harga'
            WHERE id='$id'"
        );
    }
    if($query){
        echo "<script>
                alert('Data berhasil diubah!');
                window.location.href='?page=bundle';
              </script>";
    }
}
?>

<div class="content">
    <div class="desc-content">
        <h3>Ubah Bundle</h3><br>
        <p>Silakan ubah data bundle.</p>
    </div>
    <div class="desc-content2">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Bundle :</label><br>
                <input type="text"
                       name="namaset"
                       value="<?= $data['namaset']; ?>"
                       required>
            </div>
            <div class="form-group">
                <label>Harga :</label><br>
                <input type="text"
                       name="harga"
                       value="<?= $data['harga']; ?>"
                       required>
            </div>
            <div class="form-group">
                <label>Gambar Saat Ini :</label><br>
                <img src="../gambar/<?= $data['gambar']; ?>"
                     width="120">
            </div>
            <br>
            <div class="form-group">
                <label>Ganti Gambar :</label><br>
                <input type="file" name="gambar">
            </div>
            <br>
            <button type="submit"
                    name="update"
                    class="btn edit">
                Update Data
            </button>
            <a href="?page=bundle"
               class="btn hapus">
               Batal
            </a>
        </form>
    </div>
</div>