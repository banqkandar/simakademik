<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Dosen</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-gray">Data Dosen</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahDosenModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Dosen</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Alexsander Suyono</td>
                  <td>alex2020</td>
                  <td>alex2020@gmail.com</td>
                  <td>
                    <a href="editDosen.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailDosen.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteDosen.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Dosen Modal-->
<div class="modal fade" id="tambahDosenModal" tabindex="-1" role="dialog" aria-labelledby="tambahDosenModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDosenModal">Tambah Data Dosen</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
          <div class="form-group">
              <label for="namaDosen">Nama Dosen</label>
              <input type="text" class="form-control" id="namaDosen" name="namaDosen" required>
          </div>
          <div class="form-group">
            <label>Program Studi</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Pilih Program Studi -- </option>
              <option value="if">Tenik Informatika</option>
              <option value="si">Sistem Informasi</option>
              <option value="te">Teknik Elektro</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahDosen" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>