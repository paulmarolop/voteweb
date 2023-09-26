<?php
  session_start();
  if ( isset($_SESSION["nim"]) ) {
    session_destroy();
  }
  include("koneksi.php");
  // echo '<pre>';
  // echo session_id()."\n";
  // var_dump($_SESSION);
  // echo '</pre>';
  
  if(isset($_POST['nim'])) {
    $nim = $_POST['nim'];
    $result = mysqli_query($conn, "SELECT `id_peserta`,`nim`,`status_vote` FROM `peserta` WHERE nim='$nim' LIMIT 1"); 
    $row = mysqli_fetch_assoc($result);
    if ($row != 0 && $row['status_vote'] == 0){
      $_SESSION['created'] = time();
      $_SESSION['expire'] = $_SESSION['created'] + (17 * 60);
      $_SESSION['nim'] = $nim;
      $_SESSION['id_peserta'] = $row['id_peserta'];
      header("location:vote.php"); 
    }else if ($row != 0 && $row['status_vote'] != 0) {
      $_SESSION['message'] = "NIM yang dimasukkan sudah pernah melakukan vote.";
      header("location:index.php");
      exit;
    }else{
      $_SESSION['message'] = "NIM yang dimasukkan tidak valid!";
      header("location:index.php");
      exit;
    }
    
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voting Kakak Ter | HIMSI FASILKOM UNSRI</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/15181efa86.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
  <section class="container">
    <div class="columns is-multiline">
      <div class="column is-8 is-offset-2 register">
        <div class="columns">
          <div class="column left">
            <img src="img/himsi-unsri.png" style="width:45%;" alt="HIMSI">
            <h1 class="title is-1">Voting Kakak Ter</h1>
            <h2 class="subtitle colored is-4">Website voting para nominasi kakak Ter tahun 2020</h2>
            <p></p>
          </div>
          <div class="column right has-text-centered">
            <h1 class="title is-4">:)</h1>
            <p class="description">Silahkan masukkan NIM anda</p>
            <form method="POST" id="myForm" action="">
              <div class="field">
                <div class="control">
                  <input required class="input is-medium" type="text" id="nim" name="nim" placeholder="NIM" >
                </div>
              </div>
              <?php
                if (isset($_SESSION["message"])) {?>
                    <p style = "color: red;margin-bottom: 0.8rem;background-color: #ffd6d6;border-style: solid;border-width: 1px;border-radius: 10px;border-color: red;">&nbsp
                    <?php echo $_SESSION["message"]; ?> </p> <?php
                    unset($_SESSION["message"]);
                    //var_dump($_SESSION);
                }
              ?>
              <input type="button" class="button is-block is-info is-fullwidth is-medium" onclick="confirmNIM()" 
                     value="Lanjut">
              <!-- <button class="button is-block is-info is-fullwidth is-medium" id="confirm-alert">Lanjut</button> -->
              <br />
              <small><em>*Satu NIM hanya bisa vote 1x</em></small>
            </form>
          </div>
        </div>
      </div>
      <div class="column is-8 is-offset-2">
        <br>
        <nav class="level">
          <div class="level-left">
            <div class="level-item">
              <span class="icon">
                <a href="http://himsiunsri.org" target="_blank"><i class="fas fa-link"></i></a>
              </span> &emsp;
              <span class="icon">
              <a href="https://www.instagram.com/himsiunsri/" target="_blank"><i class="fab fa-instagram"></i></a>
              </span>
            </div>
          </div>
          <div class="level-right">
            <small class="level-item" style="color: var(--textLight)">
              Dinas Ristek PTI - HIMSI UNSRI 2020 | Hosted by&nbsp<a href="https://www.hostingan.id/">Hostingan ID </a>
            </small>
          </div>
        </nav>
      </div>
    </div>
  </section>
</body>
<script>
document.getElementById("myForm").addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      event.preventDefault();
      confirmNIM();
    }
});

function confirmNIM() {
  var inputVal = document.getElementById("nim").value;
  if (!inputVal) {
    return;
  }
  Swal.fire({
    title: '<strong></strong>',
    icon: 'info',
    title: inputVal,
    html:
      'Pastikan NIM yang anda masukkan benar dan merupakan NIM anda.',
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: 'Lanjut',
    reverseButtons: true,
    showCancelButton: true
  }).then((result) => {
    if (result.isConfirmed) {
        document.getElementById("myForm").submit();
    }
  });
}
</script>
</html>