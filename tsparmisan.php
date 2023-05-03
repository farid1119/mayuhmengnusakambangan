<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- import style css bootstrap -->
    <title>Pantai Parmisan</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-warning shadow py-3 fixed-top"> <!-- navbar -->
        <div class="container">
            <img src="image/Logoceb.png" alt="" width="30" height="30">
            <a class="navbar-brand" href="#">Mayuh Meng <b>Nusakambangan</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tempat Wisata
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="tsbenteng.php">Benteng Pendem</a></li>
                            <li><a class="dropdown-item" href="tsparmisan.php">Pantai Parmisan</a></li>
                            <li><a class="dropdown-item" href="tsteluk.php">Pantai Teluk Penyu</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="hargatiket.php">Harga Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pesantiket.php">Pesan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="gy-3 py-3">
        <div class="gy-3 py-3">
        </div>
    </div>


    <section>
        <div class="container">
            <div class="row py-3 gy-3">
                <div class="col-12 text-center">
                    <h1>Pantai Parmisan</h1>
                   <iframe width="560" height="315" src="https://www.youtube.com/embed/woc0A8qwSvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <!-- embed video yt -->
                    <p>Pantai Kopassus atau lebih populer dengan sebagai Pantai Permisan adalah pantai yang yang terdapat di sebelah selatan Pulau Nusakambangan, Kabupaten Cilacap, Provinsi Jawa Tengah. Lokasinya terletak di sebelah selatan Lembaga Pemasyarakatan Permisan. Pantai Permisan ini masih sangat alami, karena lokasi tersebt masih jarang dikunjungi oleh wisatawan. Pantai ini memiliki pasir pantai putih yang dihiasi batu-batu karang kecil serta deburan ombak laut selatan.</p>
                </div>
            </div>
        </div>
    </section>

    <pre></pre>

    <footer class="p-3 bg-white text-dark text-center fixed-bottom border-top shadow"> <!-- footer -->
        <div class="text-center text-dark">
        © 2023: Farid Arifin with 
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>


    <script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- script bootstrapjavascript untuk navbar collapse -->
</body>

</html>