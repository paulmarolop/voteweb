<?php
  session_start();
  if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
  }
  else {
    $now = time();
    if ($now > $_SESSION['expire']) {
      session_destroy();
    }
  }
  include "../koneksi.php";
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Voting Kakak Ter | HIMSI FASILKOM UNSRI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a><img src="../img/himsi-unsri.png" style="width:20%;" alt="" /></a>
                        <a style="text-decoration: none; font-size: large; font-weight:500; color:white">Himsi Unsri</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu logo-area">
                        <ul class="nav navbar-nav notika-top-nav">
                          <a style="text-decoration: none; font-size: large; font-weight:500; color:white">Admin</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Table</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Hasil Voting</a></li>
                                    </ul>
                                </li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li><a data-toggle="tab" href="#Home"><i class="notika-icon notika-menus"></i>Hasil Voting</a>
                        </li>
                        <li><a href="logout.php"><i class="notika-icon notika-right-arrow"></i>Logout</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->

    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Teramah</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_teramah) AS jumlah FROM `nominasi_teramah`
                                      LEFT JOIN vote
                                        ON vote.id_teramah=nominasi_teramah.id_teramah
                                      GROUP BY nominasi_teramah.id_teramah";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Terganteng</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr>
                                        <td>1</td>
                                        <td>Alexandra</td>
                                        <td>Christopher</td>
                                    </tr> -->
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_terganteng) AS jumlah FROM `nominasi_terganteng`
                                      LEFT JOIN vote
                                        ON vote.id_terganteng=nominasi_terganteng.id_terganteng
                                      GROUP BY nominasi_terganteng.id_terganteng";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Terjail</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_terjail) AS jumlah FROM `nominasi_terjail`
                                      LEFT JOIN vote
                                        ON vote.id_terjail=nominasi_terjail.id_terjail
                                      GROUP BY nominasi_terjail.id_terjail";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Terjutek</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_terjutek) AS jumlah FROM `nominasi_terjutek`
                                      LEFT JOIN vote
                                        ON vote.id_terjutek=nominasi_terjutek.id_terjutek
                                      GROUP BY nominasi_terjutek.id_terjutek";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Terlucu</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_terlucu) AS jumlah FROM `nominasi_terlucu`
                                      LEFT JOIN vote
                                        ON vote.id_terlucu=nominasi_terlucu.id_terlucu
                                      GROUP BY nominasi_terlucu.id_terlucu";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Termanis</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_termanis) AS jumlah FROM `nominasi_termanis`
                                      LEFT JOIN vote
                                        ON vote.id_termanis=nominasi_termanis.id_termanis
                                      GROUP BY nominasi_termanis.id_termanis";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Nominasi Terseram</h2>
                        </div>
                        <div class="bsc-tbl-cds">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Nama</th>
                                        <th style="width: 40%">Jumlah Vote</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                      include "../koneksi.php";

                                      $sql = "SELECT nama, COUNT(vote.id_terseram) AS jumlah FROM `nominasi_terseram`
                                      LEFT JOIN vote
                                        ON vote.id_terseram=nominasi_terseram.id_terseram
                                      GROUP BY nominasi_terseram.id_terseram";
                                      $query = mysqli_query($conn, $sql) or die (mysqli_error());
                                      $count = 1;
                                      while($data = mysqli_fetch_array($query)){
                                          $nama = $data["nama"];
                                          $jumlah = $data["jumlah"];
                                          echo "<tr>
                                                  <td>$count</td>
                                                  <td>$nama</td>
                                                  <td>$jumlah</td>
                                                  <td>";
                                          echo "<td></tr>";
                                          $count++;
                                      }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Normal Table area End-->
    
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- Data Table JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>