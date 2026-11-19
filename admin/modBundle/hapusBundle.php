<?php
include '../config/koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    // ambil data gambar dulu
    $get = mysqli_query($koneksi,
        "SELECT * FROM tbl_bundle WHERE id='$id'"
    );
    $data = mysqli_fetch_assoc($get);
    // hapus file gambar
    if(file_exists("../gambar/".$data['gambar'])){
        unlink("../gambar/".$data['gambar']);
    }
    // hapus data dari database
    $query = mysqli_query($koneksi,
        "DELETE FROM tbl_bundle WHERE id='$id'"
    );
    if($query){
        echo "<script>
                alert('Bundle berhasil dihapus!');
                window.location.href='?page=bundle';
              </script>";
    }else{
        echo "<script>
                alert('Gagal menghapus bundle!');
                window.location.href='?page=bundle';
              </script>";
    }
}else{
    header("Location:?page=bundle");
}
?>