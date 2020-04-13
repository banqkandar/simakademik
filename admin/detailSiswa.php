<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Detail Data Siswa</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                    <a href="siswa.php" class="d-none d-sm-inline-block btn btn-sm"><i class="fas fa-arrow-left fa-sm text-dark-50"></i> Kembali</a>
                </div>
                <div class="card-body ">
                    <div class="d-sm-flex align-items-center justify-content-center mb-3">
                        <img src="../images/profile.svg" style="width:10em">
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                <h6 class="text-custom font-weight-bold">Buat Akun</h6>
                </div>
                <div class="card-body ">
                <form action="" method="post">
            <div class="form-group">
              <label for="emailSiswa">Email</label>
              <input type="text" class="form-control" id="emailSiswa" name="emailSiswa" value="" required>
            </div>
            <div class="form-group">
              <label for="passwordSiswa">Password</label>
              <input type="text" class="form-control" id="passwordSiswa" name="passwordSiswa" value="" required>
            </div>
            <button type="submit" name="tambahAkunSiswa" class="btn btn-primary">Tambah</button>
          </form>
                </div>
            </div>
        </div>
        
    </div>

</div>

<?php include 'footer.php'; ?>