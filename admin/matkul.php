<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Mata Kuliah</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-gray">Data Mata Kuliah</h6>
          <a href="" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahMatkulModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Matkul</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Mata Kuliah</th>
                  <th>SKS</th>
                  <th>Semester</th>
                  <th>Program Studi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>MK001</td>
                  <td>Kewirausahaan</td>
                  <td>3</td>
                  <td>8</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <a href="editMatkul.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="deleteMatkul.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Matkul Modal-->
<div class="modal fade" id="tambahMatkulModal" tabindex="-1" role="dialog" aria-labelledby="tambahMatkulModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahMatkulModal">Tambah Data Matkul</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
          <div class="form-group">
              <label for="namaDosen">Kode Matkul</label>
              <input type="text" class="form-control" id="namaDosen" name="namaDosen" required>
          </div>
          <div class="form-group">
              <label for="namaDosen">Mata Kuliah</label>
              <input type="text" class="form-control" id="namaDosen" name="namaDosen" required>
          </div>
          <div class="form-group">
            <label>Jumlah SKS</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Berapa Jumlah SKS -- </option>
              <option value="0">0</option>
              <option value="2">2</option>
              <option value="3">3</option>
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
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahMatkul" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>