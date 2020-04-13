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
          <h6 class="text-custom font-weight-bold">Data Jadwal</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahJadwalModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Jadwal</a>
        </div>
        <div class="card-body">
          <div class="col-5">
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
          </div>
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Mata Pelajaran</th>
                  <th>Guru</th>
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
            <label for="namaRuang">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="namaRuang" name="namaRuang" required>
          </div>
          <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <select name="idMapel" class="form-control" required>
              <option value=""> -- Mata Pelajaran -- </option>
              <option value="">Matematika</option>
              <option value="">Bahasa Arab</option>
            </select>
          </div>
          <div class="form-group">
            <label>Ruangan</label>
            <select name="idRuang" class="form-control" required>
              <option value=""> -- Ruang Berapa -- </option>
              <option value="">5292</option>
              <option value="">1232</option>
            </select>
          </div>
          <div class="form-group">
            <label for="hari">Hari</label>
            <select name="hari" class="form-control" required>
              <option value=""> -- Pilih Hari -- </option>
              <option value="">Senin</option>
              <option value="">Selasa</option>
              <option value="">Rabu</option>
              <option value="">Kamis</option>
              <option value="">Jumat</option>
              <option value="">Sabtu</option>
              <option value="">Minggu</option>
            </select>
          </div>
          <div class="form-group">
            <label for="waktuAwal">Waktu Awal</label>
            <input type="time" class="form-control" id="waktuAwal" name="waktu" required>
          </div>
          <div class="form-group">
            <label for="waktuAkhir">Waktu Selesai</label>
            <input type="time" class="form-control" id="waktuAkhir" name="waktuAkhir" required>
          </div>
          <div class="form-group">
            <label>Nama Guru</label>
            <select name="idGuru" class="form-control" required>
              <option value=""> -- Pilih Guru -- </option>
              <option value="">Alif ba ta</option>
              <option value="">Aceng Pekok</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahPenjadwalan" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>