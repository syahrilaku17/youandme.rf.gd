<?php
    include('../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form action="add.php" method="post" class='form'>
        <div class="form-group">
            <label for="subjek"> Subjek </label>
            <input name='subjek' id='subjek' type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama"> Nama </label>
            <input name='nama' id='nama' type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="pesan"> Pesan </label>
            <input name='pesan' id='pesan' type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="tanggal"> Tanggal </label>
            <input name='tanggal' id='tanggal' type="date" class="form-control">
        </div>

        <button type='submit' name='submit' class='btn btn-primary'> Tambah </button>
    </form>
</div>
    <?php
        if(isset($_POST['submit'])){
            $subjek = $_POST['subjek'];
            $nama = $_POST['nama'];
            $pesan = $_POST['pesan'];
            $tanggal = $_POST['tanggal'];

            $result = mysqli_query($koneksi, "INSERT INTO happy (subjek,nama,pesan,tanggal) VALUES ('$subjek', '$nama', '$pesan', '$tanggal')");

            header('Location:index.php');
        }
    ?>
</body>
</html>