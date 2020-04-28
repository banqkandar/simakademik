<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Profile Anda</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                    <a href="siswa.php" class="d-none d-sm-inline-block btn btn-sm">Data Profile</a>
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
                <h6 class="text-custom font-weight-bold">Ganti Password</h6>
                </div>
                <div class="card-body ">
                <form action="" method="post">
            <div class="form-group">
              <label for="passwordSiswaLama">Password Lama</label>
              <input type="password" class="form-control" id="passwordSiswaLama" name="passwordSiswaLama" value="" required>
            </div>
            <div class="form-group">
              <label for="passwordSiswaBaru">Password Baru</label>
              <input type="password" class="form-control" id="passwordSiswaBaru" name="passwordSiswaBaru" value="" required>
            </div>
            <div class="form-group">
              <label for="konfrimasiPasswordBaru">Konfirmasi Password Baru</label>
              <input type="password" class="form-control" id="konfrimasiPasswordBaru" name="konfrimasiPasswordBaru" value="" required>
            </div>
            <button type="submit" name="editAkunSiswa" class="btn btn-success">Ubah</button>
          </form>
                </div>
            </div>
        </div>
        
    </div>

</div>

<?php include 'footer.php'; ?>