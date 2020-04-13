<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Edit Data Mapel</h1>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                    <a href="mapel.php" class="d-none d-sm-inline-block btn btn-sm"><i
                            class="fas fa-arrow-left fa-sm text-dark-50"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="kodeMapel">Kode Mata Pelajaran</label>
                            <input type="text" class="form-control" id="kodeMapel" name="kodeMapel" required>
                        </div>
                        <div class="form-group">
                            <label for="namaMapel">Mata Pelajaran</label>
                            <input type="text" class="form-control" id="namaMapel" name="namaMapel" required>
                        </div>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <select name="prodi" class="form-control" required>
                                <option value=""> -- Ruangan Apa -- </option>
                                <option value="0">012</option>
                                <option value="1">112</option>
                                <option value="2">312</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Semester</label>
                            <select name="prodi" class="form-control" required>
                                <option value=""> -- Pilih Semester -- </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select name="prodi" class="form-control" required>
                                <option value=""> -- Jurusan Apa -- </option>
                                <option value="ipa">IPA</option>
                                <option value="ips">IPS</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" name="editMapel" class="btn btn-success">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>