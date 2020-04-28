<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Kehadiran Siswa</h1>
    </div>

    <div class="row">

    <div class="col-md-12">
      <div class="card mb-4 border--primary">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Kehadiran</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode - Nama Mata pelajaran</th>
                  <th>Waktu</th>
                  <th>Ruangan</th>
                  <th>Kelas</th>
                  <th>Guru</th>
                  <th>Absensi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>MK001 - Matematika</td>
                  <td>Rabu, 07.00 s/d 13.00</td>
                  <td>Kantor Guru</td>
                  <td>XII TKJ</td>
                  <td>Bambang Pamulang</td>
                  <td><a href="">Lihat Absen Mingguan</a></td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
        
    </div>

</div>

<?php include 'footer.php'; ?>