<?php 
include 'koneksi/koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>
    alert('Anda belum login!');
    window.location.href='login.php';
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISDUKCAPIL</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container-fluid">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    <img src="assets/imgs/baru.png"  alt=""  width="180px" >
                    </a>
                </li>

                
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="data_karyawan.php">
                        <span class="icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Data Karyawan</span>
                    </a>
                </li>


                <li>
                    <a href="data_user.php">
                        <span class="icon">
                            <ion-icon name="file-tray-stacked-outline"></ion-icon>
                        </span>
                        <span class="title">Data User</span>
                    </a>
                </li>

                <li>
                    <a href="data_jabatan.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data Jabatan </span>
                    </a>
                </li>

                <li>
                    <a href="data_absen.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data Absen Datang</span>
                    </a>
                </li>

                <li>
                    <a href="data_absen_pulang.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data Absen Pulang</span>
                    </a>
                </li>


                <li>
                    <a href="data_keterangan.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Data keterangan</span>
                    </a>
                </li>

                <li>
                    <a href="tentang_a.php">
                        <span class="icon">
                        <ion-icon name="file-tray-stacked-outline"></ion-icon>                        </span>
                        <span class="title">Tentang Kami</span>
                    </a>
                </li>

</div>

        
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

            

                <a href="logout.php">
                <div class="btn btn-outline-dark float-end">Logout
                </div>
                </a>
            </div>

            <!-- ======================= Cards ================== -->
            



<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script defer src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap -->
    <title>KEPEGAWAIAN</title>

    <style>
      /* Import Font */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');


        * {
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;
        }


        #klik:after {
            background-color: gold;
            color: white;
        }


        #klik:hover {
            background-color: gold;
            color: white;
        }

        #gambar {
            width: 100px;
            display: block;
    margin-left: auto;
    margin-right: auto;
            
            
}

        #center {
            display: flex;
            justify-content: center;
            justify-content: space-around;
}

        #tengah {
            display: block;
    margin-left: auto;
    margin-right: auto;
        }
    
        .zoom {
  transition: transform .2s; /* Animation */
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}





        </style>
    </head>
    <body>
        
    </body>

    <body>



    <main class="mt-5" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="card alert alert-primary rounded-0 border-0 border-start border-3 border-primary">
                    <div  class="card-body">
                        <span class="display-5 fw-bold">SELAMAT DATANG!</span>
                        <hr>
                        <h3>APLIKASI ABSEN DISDUKCAPIL</h3>
                        <h5>KOTA PALANGKA RAYA</h5>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </main>   
<div id="navbar" class="container">
<div class="col">

<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 border-start border-4 border-primary rounded-0 shadow-sm">
                    <div class="card-body">
                        <ion-icon name="document-attach-outline"></ion-icon> 
                        <span class="text-primary fs-3 fw-bold"><?= hitungdata('data_karyawan') ?></span><br>
                        <small class="text-muted">Data Pegawai</small>
                </div>
        </div>
  </div>





<div id="center"  class="row row-cols-1 row-cols-md-3 g-4 py-3">   
    <div  class="card">
    <img  id="gambar"  src="assets/imgs/berkas2.png" alt="Avatar">
    <div class="card-body">
    <center><h5 class="card-title" >Data Karyawan</h5>
    <p class="card-text" >Tambah Data Karyawan</p>
    <a href="tambah_data_karyawan.php" class="btn btn-primary">Tambah</a>
    </center>
    </div>
</div>

<div>
    <div id="center" class="card">
    <img  id="gambar"  src="assets/imgs/berkas2.png" alt="Avatar">
    <div class="card-body">
    <center><h5 class="card-title" >Data Absen</h5>
    <p class="card-text" >Tambah Data Absen</p>
    <a href="tambah_data_absen.php" class="btn btn-primary">Tambah</a>
    </center>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>


        <div id="navbar" class="container">
<div class="col">


<div id="center" class="card">
<img id="gambar"  src="assets/imgs/berkas2.png" alt="Avatar">
    <div class="card-body">
        <center>
        <h5 class="card-title">Laporan</h5>
    <p class="card-text">Hasil Laporan</p>
    <a href="laporan.php" class="btn btn-primary">Lihat</a>
        </center>
    </div>



                    </div>
                </div>
            </div>
        </div>



                    </main>   
    
        
</body>
</html>    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>