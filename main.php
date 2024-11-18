<?php
// session_start();
if (empty($_SESSION['username'])) {
  header('location:login');
}
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username]'");
$hasil = mysqli_fetch_array($query);

echo $hasil['username'];

// if(empty($_SESSION['level_sambak'])){
//   header ('location:login');
// }

// include "proses/connect.php";
// $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[level_sambak]'");
// $hasil = mysqli_fetch_array($query);

// echo $hasil['level'];
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sambak - Aplikasi Pemesanan Makanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px">
  <!--Header -->
  <?php include "header.php"; ?>
  <!-- End Header -->
  <div class="container-1g">
    <div class="row">
      <!-- Sidebar -->
      <?php include "sidebar.php"; ?>
      <!-- End Sidebar -->

      <!-- Content -->
      <?php include  $page; ?>
      <!-- End Content -->
    </div>
    <div class="fixed-bottom text-center mb-2">
      Copyright 2024 Sambal Bakar
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>