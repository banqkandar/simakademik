    <div class="sidebar-heading mt-2">
        Main menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#dataMaster" aria-expanded="true" aria-controls="dataMaster">
            <span>Data Master</span>
        </a>
        <div id="dataMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="guru.php">Data Guru</a>
            <a class="collapse-item" href="mapel.php">Data Mata Pelajaran</a>
            <a class="collapse-item" href="jurusan.php">Data Jurusan</a>
            <a class="collapse-item" href="ruang.php">Data Ruang</a>
            <a class="collapse-item" href="kelas.php">Data Kelas</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#dataPenjadwalan" aria-expanded="true" aria-controls="dataPenjadwalan">
            <span>Data Penjadwalan</span>
        </a>
        <div id="dataPenjadwalan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="penjadwalan.php">Data Jadwal</a>
            <a class="collapse-item" href="analisisJadwal.php">Analisis Jadwal</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading mt-2">
        Log out
    </div>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">Keluar
        </a>
    </li>
</ul>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar??</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" jika anda memang ingin mengakhiri sesi ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn badge-danger badge-counter" href="../logout.php">Keluar</a>
        </div>
      </div>
    </div>
</div>