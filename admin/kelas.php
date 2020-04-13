<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Kelas</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-gray">Data Kelas</h6>
          <a href="tambahKelas.php" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kelas</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Mata Kuliah</th>
                  <th>Dosen</th>
                  <th>Kelas</th>
                  <th>Program Studi</th>
                  <th>Kapasitas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>MK001</td>
                  <td>Kewirausahaan</td>
                  <td>Alexsander Suyono</td>
                  <td>IF1</td>
                  <td>Teknik Informatika</td>
                  <td>45</td>
                  <td>
                    <a href="editKelas.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="deleteKelas.php" class="btn btn-danger btn-sm">Delete</a>
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