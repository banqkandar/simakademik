<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Edit Data Guru</h1>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                    <a href="guru.php" class="d-none d-sm-inline-block btn btn-sm"><i class="fas fa-arrow-left fa-sm text-dark-50"></i> Kembali</a>
                </div>
                <div class="card-body">
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
                            <textarea class="form-control" name="alamatGuru" id="alamatGuru" cols="10"
                                rows="3">Bandung</textarea>
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
                    <button type="submit" name="editGuru" class="btn btn-success">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>