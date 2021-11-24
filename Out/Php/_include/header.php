<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark cmd-navbar">
    <div class="container-fluid container-xxl">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/carmd-logo.svg" alt="carmd logo" width="200" class="cmd-logo">
      </a>
      <button class="navbar-toggler cmd-navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse cmd-navbar-collapse collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Used Car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../diep-your-car-step-1.php">Add Your Car</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../diep-my-listings.php">My Listings</a>
          </li>
        </ul>
        <form class="row align-items-center">
          <div class="col-lg-7 d-none d-lg-block">
            <input class="form-control me-2 cmd-control cmd-input cmd-input-search" type="search" placeholder="Search" aria-label="Search">
          </div>
          <div class="col-lg-5">
            <!-- <a href="#" class="cmd-sign-in-lnk nav-link"><i class="far fa-user-circle d-none d-md-inline-block me-1"></i>Sign in</a> -->
            <ul class="navbar-nav">
              <li class="nav-item dropdown cmd-dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                  <span class="cmd-dropdown-user"><i class="far fa-user-circle d-none d-md-inline-block me-1"></i>Welcome Kenny@gmail.com</span></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Kenny@gmail.com</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>