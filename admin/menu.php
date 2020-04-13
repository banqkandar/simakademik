<?php include "../config.php"; ?>
    <div class="sidebar-heading mt-2">
        Main menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="dosen.php">
            <span>Data Dosen</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="matkul.php">
            <span>Data Mata Kuliah</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="prodi.php">
            <span>Data Program Studi</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="ruang.php">
            <span>Data Ruang</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="kelas.php">
            <span>Data Kelas</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <span>Penjadwalan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="penjadwalan.php">Kelola Data Jadwal</a>
            <a class="collapse-item" href="instansi.php">Kelola informasi instansi</a>
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