<?php
  session_start();
  if (!isset($_SESSION["nim"])) {
    header("Location: index.php");
    exit;
  }
  else {
    $now = time();
    if ($now > $_SESSION['expire']) {
      session_destroy();
    }
  }
  // echo '<pre>';
  // echo session_id()."\n";
  // var_dump($_SESSION);
  // echo '</pre>';
  include "koneksi.php";
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
    <script src="js/lazysizes.min.js" async></script>
    <title>Voting Kakak Ter | HIMSI FASILKOM UNSRI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/vote.css" rel="stylesheet">
  </head>
  <body>
  <header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-center justify-content-md-between" style="color:white">
      <a class="navbar-brand d-flex align-items-center" >
        <i class="fas fa-vote-yea"></i>
        <strong style="padding-bottom:2px">&nbspVoting Kakak Ter&nbsp</strong>
      </a>
      <a class="navbar-brand" href="http://himsiunsri.org">
        <img data-src="img/himsi-unsri.png" class="lazyload" alt="" style="width:85px;">
      </a>
    </div>
  </div>
  </header>

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Vote para nominasi kakak Ter</h1>
      <p class="judul" style="color:#2793DA">Terdapat 8 kategori pada voting ini:<br>Teramah, Tercantik, Terganteng, Terjail, Terjutek, Terlucu, Termanis, dan Terseram.</p>
      <p></p>
      <div class="container"><div id="expiredtime" style="display: none;"><?php echo $_SESSION['expire'] ?></div>
    </div>
  </section>
  <hr class="red"> <hr class="blue"> <hr class="green">

<main role="main">
<form action="voteproses.php" method="POST">   

  <!-- Nominasi Teramah -->
  <div class="album py-5" style="background-color: #f7f7f7">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FFAEBC;">Nominasi Kakak Teramah</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\A.Salman Alfarizi.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="1" required>
                  <label class="form-check-label" for="1">A. Salman Alfarizi</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Sakinah.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="2">
                  <label class="form-check-label" for="2">Sakinah</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Suciati Nurrohmah.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="3">
                  <label class="form-check-label" for="3">Suciati Nurrohmah</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\teramah\Juwinda Septia.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_teramah" value="4">
                  <label class="form-check-label" for="4">Juwinda Septia</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><hr class="grey"> 

  <!-- Nominasi Tercantik -->
  <div class="album py-5" style="background-color: #f2f2f2">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #A0E7E5;">Nominasi Kakak Tercantik</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Halimah.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="1" required>
                  <label class="form-check-label" for="1">Halimah</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Cici Elna Sari.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="2">
                  <label class="form-check-label" for="2">Cici Elna Sari</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Gladys Dwi Mawarni.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="3">
                  <label class="form-check-label" for="3">Gladys Dwi Mawarni</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Annisa Nabila.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="4">
                  <label class="form-check-label" for="4">Annisa Nabila</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\tercantik\Nadhifah Amira.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_tercantik" value="5">
                  <label class="form-check-label" for="5">Nadhifah Amira</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </div><hr class="grey"> 

  <!-- Nominasi Terganteng -->
  <div class="album py-5" style="background-color: #f7f7f7">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #B4F8C8;">Nominasi Kakak Terganteng</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\terganteng\Addien Putra Arkananta.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terganteng" value="1" required>
                  <label class="form-check-label" for="1">Addien Putra Arkananta</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terganteng\Muhammad Rozan Azzikri.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terganteng" value="2">
                  <label class="form-check-label" for="2">Muhammad Rozan Azzikri</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terganteng\Muhammad Aziz Antabari Acta.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terganteng" value="3">
                  <label class="form-check-label" for="3">Muhammad Aziz Antabari Acta</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terganteng\Iwan Mandala Putra.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terganteng" value="4">
                  <label class="form-check-label" for="4">Iwan Mandala Putra</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terganteng\Aqbil Fattaqqoh.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terganteng" value="5">
                  <label class="form-check-label" for="5">Aqbil Fattaqqoh</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><hr class="grey">
  
  <!-- Nominasi Terjail -->
  <div class="album py-5" style="background-color: #f2f2f2">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FFAEBC;">Nominasi Kakak Terjail</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjail\Lulu Salsabila.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjail" value="1" required>
                  <label class="form-check-label" for="1">Lulu Salsabila</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjail\Muhammad Syahridho Alghifary.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjail" value="2">
                  <label class="form-check-label" for="2">Muhammad Syahridho Alghifary</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjail\Septiani Aulia Putri.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjail" value="3">
                  <label class="form-check-label" for="3">Septiani Aulia Putri</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjail\Trievanni Chantika.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjail" value="4">
                  <label class="form-check-label" for="4">Trievanni Chantika</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><hr class="grey"> 

  <!-- Nominasi Terjutek -->
  <div class="album py-5" style="background-color: #f7f7f7">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #A0E7E5;">Nominasi Kakak Terjutek</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjutek\Naberi Oktaria.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjutek" value="1" required>
                  <label class="form-check-label" for="1">Naberi Oktaria</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjutek\Ahmad Hafizh Zahran.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjutek" value="2">
                  <label class="form-check-label" for="2">Ahmad Hafizh Zahran</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjutek\Anindya Dewi Maharani.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjutek" value="3">
                  <label class="form-check-label" for="3">Anindya Dewi Maharani</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terjutek\Muhammad Chendy Rizky Pratama.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terjutek" value="4">
                  <label class="form-check-label" for="4">Muhammad Chendy Rizky Pratama</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </div><hr class="grey">

  <!-- Nominasi Terlucu -->
  <div class="album py-5" style="background-color: #f2f2f2">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #B4F8C8;">Nominasi Kakak Terlucu</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\terlucu\M. C. Adam Ikhsaniova.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terlucu" value="1" required>
                  <label class="form-check-label" for="1">M. C. Adam Ikhsaniova</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terlucu\Aulia Syahrani.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terlucu" value="2">
                  <label class="form-check-label" for="2">Aulia Syahrani</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terlucu\Thomas Al Kadafi.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terlucu" value="3">
                  <label class="form-check-label" for="3">Thomas Al Kadafi</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terlucu\Indra Tiara Saputra.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terlucu" value="4">
                  <label class="form-check-label" for="4">Indra Tiara Saputra</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><hr class="grey">

  <!-- Nominasi Termanis -->
  <div class="album py-5" style="background-color: #f2f2f2">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #FFAEBC;">Nominasi Kakak Termanis</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\termanis\Fadilah Imam Iqtidar.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_termanis" value="1" required>
                  <label class="form-check-label" for="1">Fadilah Imam Iqtidar</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\termanis\Naufal Alghifary.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_termanis" value="2">
                  <label class="form-check-label" for="2">Naufal Alghifary</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\termanis\Mahdiyah ‘Afifah Sari.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_termanis" value="3">
                  <label class="form-check-label" for="3">>Mahdiyah ‘Afifah Sari</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\termanis\Dian Apriani.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_termanis" value="4">
                  <label class="form-check-label" for="4">Dian Apriani</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\termanis\Nadya Anggraini.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_termanis" value="5">
                  <label class="form-check-label" for="5">Nadya Anggraini</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><hr class="grey"> 

  <!-- Nominasi Terseram -->
  <div class="album py-5" style="background-color: #f7f7f7">
    <div class="container">
      <h1 class="jumbotron-heading-nominasi"><a style="box-shadow: .1rem .1rem .5rem #A0E7E5;">Nominasi Kakak Terseram</a></h1>
      <div class="row">
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\terseram\Poppy Nurisa.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terseram" value="1" required>
                  <label class="form-check-label" for="1">Poppy Nurisa</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terseram\Raffilia Mutiara Purwani.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terseram" value="2">
                  <label class="form-check-label" for="2">Raffilia Mutiara Purwani</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terseram\Muhammad Fandra Eka Pratama.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terseram" value="3">
                  <label class="form-check-label" for="3">Muhammad Fandra Eka Pratama</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm">
          <img class="card-img-top lazyload" data-src="img\nominasi\terseram\Fahlevi Dwi Yauma Hadid.png" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">  
                  <input class="form-check-input" type="radio" name="id_terseram" value="4">
                  <label class="form-check-label" for="4">Fahlevi Dwi Yauma Hadid</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="album py-5" style="background-color: #f7f7f7">
    <div class="container">
        <div class="wrapper">
          <button type="submit" class="btn btn-primary btn-lg my-btn-submit">
           <a style="font-weight: 700">Vote</a>
          </button>
        </div>
    </div>
  </div>
  

</form>
</main>

<hr class="red"> <hr class="blue"> <hr class="green">
<footer class="text-muted">
  <div class="container">
    <p><a href="#" class="backtop">Back to top</a></p>
    <p>
      <a> Dinas Ristek PTI - HIMSI UNSRI 2020 | Hosted by&nbsp<a href="https://www.hostingan.id/">Hostingan ID </a></a>
    </p>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>

      <script>
        var expired = parseInt(document.getElementById("expiredtime").innerHTML);
        var d = new Date();
        var n = d.getTime();
        n = Math.round(n / 1000);

        setInterval(function(){
          logout();
        }, (expired-n) * 1000);

        function logout(){
          document.location = "logout.php"
        }
      </script>

</body>
</html>
