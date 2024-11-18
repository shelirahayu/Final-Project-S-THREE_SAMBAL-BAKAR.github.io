<div class="col-lg-3">
  <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
            <li class="nav-item">
              <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'home')  ? 'active link-light' : 'link-dark'; ?>" aria-current="page" href="home"><i class="bi bi-house-door"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'menu') ? 'active link-light' : 'link-dark'; ?>" href="menu"><i class="bi bi-menu-button-fill"></i> Daftar Menu</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'order') ? 'active link-light' : 'link-dark'; ?>" href="order"><i class="bi bi-cart4"></i> Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'customer') ? 'active link-light' : 'link-dark'; ?>" href="customer"><i class="bi bi-person-fill"></i> Customer</a>
            </li>
            <?php if ($hasil['level'] == 0000000001) { ?>

              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'user') ? 'active link-light' : 'link-dark'; ?>" href="user"><i class="bi bi-columns-gap"></i> User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'report') ? 'active link-light' : 'link-dark'; ?>" href="report"><i class="bi bi-file-earmark-bar-graph"></i> Report</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] == 'logout') ? 'active link-light' : 'link-dark'; ?>" href="logout"><i class="bi bi-box-arrow-right"></i> Log out</a>
              </li>
            <?php } ?>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link link-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a> -->
            <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul> -->

        </div>
      </div>
    </div>
  </nav>
</div>