<?php
session_start();
include "config/koneksi.php"; // Pastikan path file koneksi benar

    if (isset($_POST['submit'])) {
        // Ambil input dari form
        $username = trim($_POST['user']);
        $password = trim($_POST['pass']);

        if (empty($username) || empty($password)) {
            echo "<script>
                    alert('Kolom tidak boleh kosong!');window.history.back();</script>";
            exit;
        }

        $query = mysqli_query($koneksi,"SELECT id, un, pw FROM tbl_admin WHERE un = '$username'");

        if ($data = mysqli_fetch_assoc($query)) {
            if ($password == $data['pw']) {
                // Simpan data ke session
                $_SESSION['user_id']  = $data['id'];
                $_SESSION['username'] = $data['un'];
                $_SESSION['is_login'] = true;
                echo "<script>
                        alert('Login Berhasil!');
                        window.location.href='admin/ad_index.php';
                    </script>";
                exit;
            } else {
                echo "<script>
                        alert('Username atau Password salah!');window.history.back();</script>";
                exit;
            }
        } else {
            echo "<script>
                    alert('Username tidak ditemukan!');window.history.back();</script>";
            exit;
        }
    }
?>

<div class="content-user">
    <div class ="card-user">
        <form method="post">

        <legend>LOGIN</legend>

        <p>Username</p>
        <input type="text" name="user" required>

        <p>Password</p>
        <input type="password" name="pass" required>

        <br><br>
        <input type="submit" name="submit" value="LOGIN">

    </form>
    </div>
</div>