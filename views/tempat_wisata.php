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
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <!-- Icon -->
    <link rel="shortcun icon" href="../assets/img/depan.png">
    <title>Tempat Wisata</title>
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
    <!-- Container -->
    <div class="container-md mt-5">
        <h2 class="mb-5" style="text-align: center;">Tempat Wisata</h2>
        <div class="row">
            <!-- Card jenis wisata Museum-->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/wayang.jpg" class="img-thumbnail" alt="Museum" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Museum Wayang</h4>
                        <hr>
                        <p class="card-text mb-0">
                        <a href="museum.php">Wisata Museum</a>
                        </p>
                        <p class="card-text mb-0">
                            Pengunjung : 50
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : snack
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" data-bs-toggle="modal" data-bs-target="#Museum">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card jenis wisata Pantai  -->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <!-- Tinggi card 25rem -->
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/anyyer.jpg" class="img-thumbnail" alt="Pantai" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Pantai Anyer</h4>
                        <hr>
                        <p class="card-text mb-0">
                        <a href="pantai.php">Wisata Pantai</a>
                        </p>
                        <p class="card-text mb-0">
                            Pengunjung : 35
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : Makan
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" href="daftar_harga.php" data-bs-toggle="modal" data-bs-target="#Pantai">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Card jenis wisata Taman Nasional -->
            <div class="col-12 col-md-6 col-lg-4 mt-3">
                <!-- Tinggi card 25rem -->
                <div class="card" style="height: 25rem;">
                    <img src="../assets/img/buluran.jpg" class="img-thumbnail" alt="Taman" style="object-fit: cover; height: 225px;">
                    <div class="card-body py-2">
                        <h4 class="card-title mb-2">Taman Nasional Buluran</h4>
                        <hr>
                        <p class="card-text mb-0">
                        <a href="pantai.php">Wisata Taman Nasional</a>
                        </p>
                        <p class="card-text mb-0">
                            Pengunjung : 20
                        </p>
                        <p class="card-text mb-1">
                            Fasilitas : Makan dan Minum
                        </p>
                        <a class="btn btn-md btn-primary btn-outline-info" href="daftar_harga.php" data-bs-toggle="modal" data-bs-target="#Taman">
                            <i class="bi bi-info-circle text-white"> Cek Harga</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Museum-->
    <div class="modal fade mt-4" id="Museum" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Wisata</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Museum</td>
                            <td>Museum Wayang</td>
                            <td>Rp. 50.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Pantai-->
    <div class="modal fade mt-4" id="Pantai" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Wisata</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Pantai</td>
                            <td>Anyer</td>
                            <td>Rp. 100.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Harga Taman Nasional-->
    <div class="modal fade mt-4" id="Taman" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Harga Tiket</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-bordered border-primary" style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>Wisata</th>
                            <th>Tujuan</th>
                            <th>Harga</th>
                        </tr>
                        <tr>
                            <td>Taman Nasional</td>
                            <td>Buluran</td>
                            <td>Rp. 150.000</td>
                        </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top: -10px;">
                    <a class="btn btn-secondary" data-bs-dismiss="modal">Batal</a>
                    <a href="pesan_tiket.php" class="btn btn-primary btn-outline-info text-white">Pesan Tiket</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Script Javascript untuk menu responsive -->
    <script src="../assets/js/menu.js"></script>
    <!-- CDN Javascript Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>