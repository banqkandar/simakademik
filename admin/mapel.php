<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Mata Pelajaran</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4 border--primary">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Mata Pelajaran</h6>
          <a href="" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahMapelModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Mapel</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Mata Pelajaran</th>
                  <th>Ruangan</th>
                  <th>Semester</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>MK001</td>
                  <td>Matematika - Integral</td>
                  <td>112</td>
                  <td>6</td>
                  <td>IPA</td>
                  <td>
                    <a href="editMapel.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="deleteMapel.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Mapel Modal-->
<div class="modal fade" id="tambahMapelModal" tabindex="-1" role="dialog" aria-labelledby="tambahMapelModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahMapelModal">Tambah Data Mapel</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
              <label for="kodeMapel">Kode Mata Pelajaran</label>
              <input type="text" class="form-control" id="kodeMapel" name="kodeMapel" required>
          </div>
          <div class="form-group">
              <label for="namaMapel">Mata Pelajaran</label>
              <input type="text" class="form-control" id="namaMapel" name="namaMapel" required>
          </div>
          <div class="form-group">
            <label>Ruangan</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Ruangan Apa -- </option>
              <option value="0">012</option>
              <option value="1">112</option>
              <option value="2">312</option>
            </select>
          </div>
          <div class="form-group">
            <label>Semester</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Pilih Semester -- </option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Jurusan Apa -- </option>
              <option value="ipa">IPA</option>
              <option value="ips">IPS</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahMapel" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>