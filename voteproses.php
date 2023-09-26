<?php
  session_start();
  include "koneksi.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting Kakak Ter | HIMSI FASILKOM UNSRI</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <?php
  $id_peserta = $_SESSION['id_peserta'];
  $id_teramah = $_POST['id_teramah'];
  $id_tercantik = $_POST['id_tercantik'];
  $id_terganteng = $_POST['id_terganteng'];
  $id_terjail = $_POST['id_terjail'];
  $id_terjutek = $_POST['id_terjutek'];
  $id_terlucu = $_POST['id_terlucu'];
  $id_termanis = $_POST['id_termanis'];
  $id_terseram = $_POST['id_terseram'];
  $time = date('Y-m-d H:i:s');

  $query = "INSERT INTO `vote` (`id_vote`, `id_peserta`, `id_teramah`, `id_tercantik`, `id_terganteng`, `id_terjail`, `id_terjutek`, `id_terlucu`,`id_termanis`, `id_terseram`, `datetime`) 
            VALUES (NULL, '$id_peserta', '$id_teramah', '$id_tercantik', '$id_terganteng', '$id_terjail', '$id_terjutek', '$id_terlucu', '$id_termanis', '$id_terseram', '$time')";

  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Error 21, please contact admin.";
  }
  else if($result){
    $query2 = "UPDATE `peserta` SET `status_vote` = '1' WHERE `peserta`.`id_peserta` = '$id_peserta'";
    if (mysqli_query($conn, $query2)) {
      echo "<script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil vote',
          showConfirmButton: false,
          timer: 2000
      })
      .then(function (result) {
      if (true) {
          window.location = 'index.php';
      }
      })
      </script>";
    }
    else{
      echo "Error 22, please contact admin.". mysqli_error($conn);
    }
  }
  ?>

</body>
</html>