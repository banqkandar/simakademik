<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Jurusan</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Jurusan</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahJurusanModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Jurusan</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jurusan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>IPA</td>
                  <td>
                    <a href="editJurusan.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="deleteJurusan.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>IPS</td>
                  <td>
                    <a href="editJurusan.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="deleteJurusan.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Jurusan Modal-->
<div class="modal fade" id="tambahJurusanModal" tabindex="-1" role="dialog" aria-labelledby="tambahJurusanModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahJurusanModalLabel">Tambah Jurusan Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
        <div class="form-group">
          <label for="namaJurusan">Nama Jurusan</label>
          <input type="text" class="form-control" id="namaJurusan" name="namaJurusan" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahJurusan" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>