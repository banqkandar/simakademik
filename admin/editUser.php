<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Edit Profil (Admin)</h1>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-header">
          <a href="index.php" class="d-none d-sm-inline-block btn btn-sm"><i
              class="fas fa-arrow-left fa-sm text-dark-50"></i> Kembali</a>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <div class="form-group">
                <label for="nipUser">NIP</label>
                <input type="number" class="form-control" id="nipUser" name="nipUser" value="" required>
              </div>
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" value="" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" class="form-control" id="alamat" rows="3">Bandung</textarea>
            </div>
            <div class="form-group">
              <label for="noTelepon">No Telepon</label>
              <input type="number" class="form-control" id="noTelepon" name="noTelepon" value="" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control" required>
                <option value=""> -- Status Sekarang -- </option>
                <option value="no_active">Aktif</option>
                <option value="active">Tidak Aktif</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <button type="submit" name="editProfil" class="btn btn-success">Edit</button>
        </div>
        </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card mb-4">
        <div class="card-header">
          <h6 class="text-custom font-weight-bold">Ganti Password</h6>
        </div>
        <div class="card-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="pass_lama">Password Lama</label>
              <input type="password" class="form-control" id="pass_lama" name="pass_lama" required>
            </div>
            <div class="form-group">
              <label for="pass_baru">Password Baru</label>
              <input type="password" class="form-control" id="pass_baru" name="pass_baru" required>
            </div>
            <button type="submit" class="btn btn-success">Ganti Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>