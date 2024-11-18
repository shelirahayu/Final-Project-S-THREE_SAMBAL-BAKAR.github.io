  <?php
  session_start();

  if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";
    include "main.php";
  } elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
    $page = "order.php";
    include "main.php";
  } elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    if ($_SESSION['level'] == 0000000001) {
      $page = "user.php";
      include "main.php";
    } else {
      $page = "home.php";
      include "main.php";
    }
  } elseif (isset($_GET['x']) && $_GET['x'] == 'customer') {
    $page = "customer.php";
    include "main.php";
  } elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
    if ($_SESSION['level'] == 0000000001) {
      $page = "report.php";
      include "main.php";
    } else {
      $page = "home.php";
      include "main.php";
    }
  } elseif (isset($_GET['x']) && $_GET['x'] == 'menu') {
    $page = "menu.php";
    include "main.php";
  } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
  } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include "proses/logout.php";
  } else {
    $page = "home.php";
    include "main.php";
  }
  ?>
 