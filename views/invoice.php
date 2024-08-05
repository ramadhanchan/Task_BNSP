<?php

require '../controllers/pemesanan_tiket.php';

// Variabel mengambil data dari 0 pada tabel
$query = query("SELECT * FROM tb_pemesanan_tiket")[0];
// Format tanggal
$tanggal_berangkat = new DateTime($query['tanggal_kunjungan']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CDN Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CDN Boxicons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- CSS Navbar -->
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- CSS Invoice -->
    <link rel="stylesheet" href="../assets/css/invoice.css">
    <!-- Icon -->
    <link rel="shortcun icon" href="../assets/img/icon.png">
    <title>Invoice</title>
</head>
<body>
    <!-- Navbar (Navigasi Bar) -->
    <nav class="shadow">
        <a href="#" class="logo">Tiket Wisata</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="../index.html">Home</a></li>
            <li><a href="tempat_wisata.php">Tempat Wisata</a></li>
            <li><a href="pesan_tiket.php">Pesan Tiket</a></li>
            <li><a href="invoice.php">Invoice</a></li>
        </ul>
        <div class="user">
            <a href="#">
                <i class="bx bxs-user-account"></i> Halo!
            </a>
        </div>
    </nav>
    <br><br>
    <div class="container-lg mt-4">
        <div class="card">
            <div class="row ms-5 me-0">
                <h3 class="mb-4 mt-3 text-center">Invoice Pemesanan Tiket</h3>
                <label for="nama" class="col-sm-6 col-form-label">Nama Lengkap</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['nama']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Nomer Identitas</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['nomer_identitas']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">No. HP</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['no_hp']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Tempat Wisata</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['tempat_wisata']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Tanggal Kunjungan</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $tanggal_berangkat->format('d-m-Y'); ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Jumlah Pengunjung Dewasa</label>
                <div class="col-md-6 mt-2">
                <p>: <?= $query['pengunjung_dewasa']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Jumlah Pengunjung Anak-Anak</label>
                <div class="col-md-6 mt-2">
                    <p>: <?= $query['pengunjung_anakanak']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Harga Tiket</label>
                <div class="col-md-6 mt-2">
                    <p>: Rp. <?= $query['harga_tiket']; ?></p>
                </div>
            </div>
            <div class="row ms-5 me-0">
                <label for="nama" class="col-sm-6 col-form-label">Total Harga</label>
                <div class="col-md-6 mt-2">
                    <p>: Rp. <?= $query['total_bayar']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- CDN Javascript Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>