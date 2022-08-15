<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<style>
        .container{
        height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .btn-primary{
        background: rgba(110, 0, 46);
        border: 0;
    }
</style>
<div class="container">
    <?php 
        include "koneksi.php";

        extract($_POST);
        $perintah = mysqli_query($db, "insert into tbruangrasa values('$nama', '$email', '$pesan')");

        if($perintah){
            echo "Pesan Berhasil Tersimpan! <br> Terimakasih Telah Memberi Pesan, Kritik ataupun Saran";
        }else{
            echo "Pesan gagal Terkirim! <br> Silahkan Ulangi";
        }
    ?>
    <br>
    <br>
    <a href="../index.php"><button class="btn btn-primary">Kembali</button></a>
</div>