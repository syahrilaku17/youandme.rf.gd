<?php
    include('koneksi.php');
    $result = mysqli_query($koneksi, "SELECT * FROM happy ORDER BY id");
    while($happy = mysqli_fetch_array($result)){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $happy['subjek'] .' | '. $happy['nama'];?></title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <style>
            html,body{
        padding:0;
        margin:0;
        border:0;
        background-color:#0e1119;
        }

        .container{
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        }

        .data{
        color:white;
        font-family:'Poppins',sans-serif;
        font-weight:500;
        text-align:centre;
        letter-spacing:.5rem;
        font-size:31px;
        }
        p{
            font-size:20px !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>
  </head>
  <body>

        <div class="container my-5">
            <div class="row bounceInUp animated"">
                <h1 class='data'> <?= $happy['subjek']; ?></h1>
            </div>
            <div class="row bounceInRight animated"">
                <h1 class='data'> <?= $happy['nama'];?></h1>
            </div>
            <div class="row bounceInLeft animated">
                <p class='data'>"<?= $happy['pesan'];?>"</p>
            </div>
        </div>

    <script>
        const text =  baffle(".data");
        text.set({
        characters: '░▒░ ░██░> ████▓ >█> ░/█>█ ██░░ █<▒ ▓██░ ░/░▒',
                speed: 50
        });

        text.start();
        text.reveal(6000);
    </script>
<?php }?>    
</body>
</html>