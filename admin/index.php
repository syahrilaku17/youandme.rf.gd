<?php
    include('../koneksi.php');
    $result = mysqli_query($koneksi, "SELECT * FROM happy ORDER BY id")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="container m-5">
    <a href="add.php"><button type="button" class='btn btn-warning'> Tambah Subjek </button></a>
    <?php while($happy = mysqli_fetch_array($result)){ ?>
        <table class='table'>
            <tr>
                <td> <?= $happy['nama'] ?></td>
                <td> <?= $happy['subjek'] ?></td>
                <td> <?= $happy['pesan'] ?></td>
                <td> <?= $happy['tanggal'] ?></td>
                <td> <a href="delete.php?id=<?=$happy['id']; ?>">Delete</a></td>
            </tr>
        </table>
    <?php } ?>
    </div>


</body>
</html>