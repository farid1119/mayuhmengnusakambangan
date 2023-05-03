<?php include '../koneksi/functions.php';
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=gagal");
}
//rumus perhitungan pengunjung
$total = query("SELECT SUM(pengunjung_dewasa) as pd, SUM(pengunjung_anak) as pa FROM pemesanan")[0];

?>
<?php include_once '../koneksi/tiket.php';?><!--mengimport file tiket.php-->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script><!-- untuk menghubungkan grafik, import asset untuk membuat grafik -->
    <link rel="stylesheet" href="../css/bootstrap.min.css"><!--link boostrap.min.css yang di simpan di folder css -->
    <link rel="stylesheet" href="../css/style.css"><!--link tempat style.css yang di simpan di folder css -->
    <title>Dashboard</title><!--nama halaman-->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow py-3 fixed-top">
        <div class="container">
            <img src="../image/Logoceb.png" alt="" width="30" height="30">
            <a class="navbar-brand" href="#">Mayuh Meng <b>Nusakambangan</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pemesanantiket.php">Pemesanan Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../koneksi/logout.php">Logout</a>
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
            <br />
            <h2 class="py-3 text-center" >Grafik Pengunjung Tempat Wisata</h2>
            <canvas id="myChart" width="100%"></canvas>
        </div>
    </section>
    <footer class="p-3 bg-white text-dark text-center position-relative border-top shadow">
        <div class="text-center text-dark">
            © 2023: Farid Arifin with
            <a class="text-dark" href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 5.0</a>
        </div>
    </footer>

    <script>//buat nampilin grafik
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Pengunjung Pantai Teluk Penyu', 'Pengunjung Benteng Pendem', 'Pengunjung Pantai Pamirsan'],
                datasets: [{
                    label: 'Pengunjung',
                    data: [
                        <?= get_pengunjung_pantai_teluk_penyu() ?>,
                        <?= get_pengunjung_benteng_pendem() ?>,
                        <?= get_pengunjung_pantai_parmisan() ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>

</html>