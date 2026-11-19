<div class="content-user">

<div class="slider-bundle">
    <?php
            include "config/koneksi.php";
            $query = mysqli_query($koneksi,"SELECT * FROM tbl_bundle");
            while($data = mysqli_fetch_assoc($query)){
            ?>
                <div class="slidertrack">
                    <img src="gambar/<?= $data['gambar']; ?>" alt="bundle">
                    <h3><?= $data['namaset']; ?></h3>
                    <p>Harga : <?= ($data['harga']); ?></p>
                </div>
        <?php } ?>
</div>
<div class="card-user">
    <h3>Selamat Datang di Toko Pakaian Online</h3><br>
    <p>
        Temukan berbagai pilihan pakaian dengan kualitas terbaik dan harga terjangkau.
        Kami menyediakan berbagai jenis fashion yang dapat menunjang penampilan Anda.
    </p>
</div>
    <div class="container-produk">
        <?php
            include "config/koneksi.php";
            $query = mysqli_query($koneksi,"SELECT * FROM tbl_produk");
            while($data = mysqli_fetch_assoc($query)){
            ?>
                <div class="card-produk">
                    <img src="gambar/<?= $data['gambar']; ?>" alt="produk">
                    <h3><?= $data['merk']; ?></h3>
                    <p>Jenis : <?= $data['jenis']; ?></p>
                    <p>Harga : <?= ($data['harga']); ?></p>
                </div>
        <?php } ?>
    </div>
</div>
