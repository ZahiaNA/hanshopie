<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,
        "DELETE FROM tbl_admin WHERE id = '$id'"
    );
    if ($query) {
        echo "<script>
                alert('Data admin berhasil dihapus!');
                window.location.href='?page=admin';
              </script>";
        } else {
        echo "<script>
                alert('Gagal menghapus data: " . mysqli_error($koneksi) . "');
                window.location.href='?page=admin';
              </script>";
        }
}
    else {
    header('Location: ?page=admin');
}
?>