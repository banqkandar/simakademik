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
                    <a href="siswa.php" class="d-none d-sm-inline-block btn btn-sm"><i
                            class="fas fa-arrow-left fa-sm text-dark-50"></i> Kembali</a>
                </div>
                <div class="card-body">
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
                            <textarea class="form-control" name="alamatSiswa" id="alamatSiswa" cols="10"
                                rows="3">Medan</textarea>
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
                    <button type="submit" name="editSiswa" class="btn btn-success">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>