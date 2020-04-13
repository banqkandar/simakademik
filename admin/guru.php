<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Guru</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Keahlian Guru</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahKeahlianGuruModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Keahlian Guru</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Guru</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahGuruModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Guru</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>NIP</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Alexsander Suyono</td>
                  <td>128371</td>
                  <td>Active</td>
                  <td>
                    <a href="editGuru.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailGuru.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteGuru.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Keahlian Guru Modal-->
<div class="modal fade" id="tambahKeahlianGuruModal" tabindex="-1" role="dialog" aria-labelledby="tambahKeahlianGuruModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahKeahlianGuruModal">Tambah Keahlian Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
        <div class="form-group">
            <label>Nama Guru</label>
            <select name="idGuru" class="form-control" required>
              <option value=""> -- Pilih Guru -- </option>
              <option value="1">Alif ba ta</option>
              <option value="2">Ridwan da du</option>
            </select>
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control" required>
              <option value=""> -- Jurusan Guru -- </option>
              <option value="ipa">IPA</option>
              <option value="ips">IPS</option>
            </select>
          </div>
          <div class="form-group">
            <label>Mata Pelajaran</label>
            <select name="mapel" class="form-control" required>
              <option value=""> -- Mata Pelajaran Guru -- </option>
              <option value="bio">Biologi</option>
              <option value="mtk">Matematika</option>
              <option value="bhs">Bahasa Sunda</option>
              <option value="bhi">Bahasa Inggris</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahKeahlianGuru" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Tambah  Guru Modal-->
<div class="modal fade" id="tambahGuruModal" tabindex="-1" role="dialog" aria-labelledby="tambahGuruModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahGuruModal">Tambah  Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
          <div class="form-group">
              <label for="nipGuru">NIP Guru</label>
              <input type="number" class="form-control" id="nipGuru" name="nipGuru" required>
          </div>
          <div class="form-group">
            <label for="namaGuru">Nama Guru</label>
            <input type="text" class="form-control" id="namaGuru" name="namaGuru" required>
          </div>
          <div class="form-group">
            <label for="alamatGuru">Alamat Guru</label>
            <textarea class="form-control" name="alamatGuru" id="alamatGuru" cols="10" rows="3">Bandung</textarea>
          </div>
          <div class="form-group">
              <label for="noTeleponGuru">No Telepon Guru</label>
              <input type="text" class="form-control" id="noTeleponGuru" name="noTeleponGuru" required>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Status Sekarang -- </option>
              <option value="no_active">Aktif</option>
              <option value="active">Tidak Aktif</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahGuru" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>