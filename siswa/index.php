<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Dashboard</h1>
  </div>

  <div class="row">

    <div class="col-xl-4 col-md-6 mb-4">
      <a href="absen.php" style="text-decoration: none;">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Absen Q</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">104</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-people-carry fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <a href="nilai.php" style="text-decoration: none;">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Nilai Q</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">68</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-book fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <a href="jadwal.php" style="text-decoration: none;">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jadwal Q</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-university fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

  </div>

</div>

<?php include 'footer.php'; ?>