<?php
    include('../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin | Delete/title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $result = mysqli_query($koneksi, "DELETE FROM happy WHERE id=$id");

        header('Location:index.php');
    ?>
    
</body>
</html>