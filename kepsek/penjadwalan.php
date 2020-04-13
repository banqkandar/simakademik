<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Jadwal</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-gray">Data Jadwal</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahJadwalModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Jadwal</a>
        </div>
        <div class="card-body">
        <form action="" method="POST">
            <div class="form-group">
                <label>Pilih Tahun Ajar</label>
                <select name="status" class="form-control" required>
                    <option value=""> -- Pilih Tahun Ajar -- </option>
                    <option value="">202001233</option>
                    <option value="">202004122</option>
                    <option value="">202011058</option>
                </select>
            </div>
        </form>
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Mata Kuliah</th>
                  <th>Dosen</th>
                  <th>SKS</th>
                  <th>Ruang</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MK001</td>
                  <td>Kewirausahaan</td>
                  <td>Alexsander Suyono</td>
                  <td>3</td>
                  <td>5034</td>
                  <td>Senin</td>
                  <td>07:00 - 09:15</td>
                  <td>
                    <a href="editJadwal.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailjadwal.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteJadwal.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Jadwal Modal-->
<div class="modal fade" id="tambahJadwalModal" tabindex="-1" role="dialog" aria-labelledby="tambahJadwalModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahJadwalModal">Tambah Jadwal</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
        <div class="form-group">
          <label for="namaRuang">Nama Ruangan</label>
          <input type="text" class="form-control" id="namaRuang" name="namaRuang" required>
        </div>
        <div class="form-group">
          <label for="kapasitasRuang">Kapasitas Ruangan</label>
          <input type="number" class="form-control" id="kapasitasRuang" name="kapasitasRuang" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahRuang" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>