<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Nilai</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Import Nilai</h6>
          <a href="importNilai.php" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm"><i class="fas fa-file-import fa-sm text-white-50"></i> Import Nilai</a>
        </div>
        <div class="card-body">
            Import dengan file .xls / .csv
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Nilai</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Alexsander Suyono</td>
                  <td>
                    <a href="editKehadiran.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailKehadiran.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteKehadiran.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<?php include 'footer.php'; ?>