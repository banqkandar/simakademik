<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Siswa</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Penempatan Siswa</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahPenempatanSiswaModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Penempatan
            Siswa</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Siswa</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahSiswaModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Siswa</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>NIS</th>
                  <th>Nomor Telepon</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>Alexsander Suyono</td>
                  <td>99872387</td>
                  <td>08218329829</td>
                  <td>Active</td>
                  <td>
                    <a href="cekKehadiran.php" class="btn btn-secondary btn-sm">Cek Absen</a> |
                    <a href="editSiswa.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailSiswa.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteSiswa.php" class="btn btn-danger btn-sm">Delete</a>
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
<div class="modal fade" id="tambahPenempatanSiswaModal" tabindex="-1" role="dialog"
  aria-labelledby="tambahPenempatanSiswaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahPenempatanSiswaModal">Tambah Keahlian Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
          <div class="form-group">
            <label>Nama Siswa</label>
            <select name="idSiswa" class="form-control" required>
              <option value=""> -- Pilih Siswa -- </option>
              <option value="">Uya Kuya</option>
              <option value="">Ayu Kayu</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <select name="kelas" class="form-control" required>
              <option value=""> -- Kelas Berapa -- </option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
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

<!-- Tambah Siswa Modal-->
<div class="modal fade" id="tambahSiswaModal" tabindex="-1" role="dialog" aria-labelledby="tambahSiswaModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahSiswaModal">Tambah Data Siswa</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
          <div class="form-group">
            <label for="namaSiswa">Nama Siswa</label>
            <input type="text" class="form-control" id="namaSiswa" name="namaSiswa" required>
          </div>
          <div class="form-group">
            <label for="nisSiswa">NIS Siswa</label>
            <input type="text" class="form-control" id="nisSiswa" name="nisSiswa" required>
          </div>
          <div class="form-group">
            <label for="alamatSiswa">Alamat Siswa</label>
            <textarea class="form-control" name="alamatSiswa" id="alamatSiswa" cols="10" rows="3">Medan</textarea>
          </div>
          <div class="form-group">
            <label for="noTeleponSiswa">No Telepon Siswa</label>
            <input type="text" class="form-control" id="noTeleponSiswa" name="noTeleponSiswa" required>
          </div>
          <div class="form-group">
            <label>Tahun Daftar</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Tahun Berapa Daftar -- </option>
              <option value="">2016</option>
              <option value="">2017</option>
              <option value="">2018</option>
              <option value="">2019</option>
              <option value="">2020</option>
              <option value="">2021</option>
              <option value="">2022</option>
            </select>
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
        <button type="button" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahSiswa" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>