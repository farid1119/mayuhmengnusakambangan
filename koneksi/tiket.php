<?php
// Memasukan file konfigurasi
include('config.php') ;

/**
 * File ini berisi fungsi untuk berkomunikasi dengan database
 */

 // Koneksi ke database
function connect()
{
    // Koneksi ke database
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // Check connection
    if ($mysqli -> connect_errno) {
        throw new Exception("Database error : " . $mysqli -> connect_error);
    }

    // Mengembalikan nilai koneksi
    return $mysqli;
}

// Fungsi untuk mengambil data kelas_penumpang dari database
function get_wisata()
{
    // Query sql
    $sql = "SELECT * FROM `wisata`";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    return $hasil;
}

function get_pengunjung_pantai_teluk_penyu() {
    // Query sql
    $sql = "SELECT pengunjung_dewasa, pengunjung_anak FROM pemesanan WHERE tempat_wisata='Pantai Teluk Penyu';";

    // $sql = "SELECT pengunjung_dewasa, pengunjung_anak FROM pemesanan WHERE tempat_wisata='pantai teluk penyu';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    $total=0;

    for ($i = 0; $i < count($hasil); $i++) { 
        $total = $total + $hasil[$i]['pengunjung_dewasa'] + $hasil[$i]['pengunjung_anak'];
     }

    return $total;
}

function get_pengunjung_benteng_pendem() {
    // Query sql
    $sql = "SELECT pengunjung_dewasa, pengunjung_anak FROM pemesanan WHERE tempat_wisata='Benteng Pendem';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query 
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    $total=0;

    for ($i = 0; $i < count($hasil); $i++) { 
        $total = $total + $hasil[$i]['pengunjung_dewasa'] + $hasil[$i]['pengunjung_anak'];
     }

    return $total;
}

function get_pengunjung_pantai_parmisan() {
    // Query sql
    $sql = "SELECT pengunjung_dewasa, pengunjung_anak FROM pemesanan WHERE tempat_wisata='Pantai Parmisan';";

    // Koneksi ke database
    $mysqli = connect();
    
    // Eksekusi query
    $result = $mysqli -> query($sql);

    // Ambil data dari hasil query menjadi array
    $hasil = $result -> fetch_all(MYSQLI_ASSOC);

    // fungsi membebaskan memori yang terkait dengan hasil.
    $result -> free_result();

    // Tutup koneksi
    $mysqli -> close();

    $total=0;

    for ($i = 0; $i < count($hasil); $i++) { 
        $total = $total + $hasil[$i]['pengunjung_dewasa'] + $hasil[$i]['pengunjung_anak'];
     }

    return $total;
}


