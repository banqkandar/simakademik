<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Edit Data Kelas</h1>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                    <a href="kelas.php" class="d-none d-sm-inline-block btn btn-sm"><i
                            class="fas fa-arrow-left fa-sm text-dark-50"></i> Kembali</a>
                </div>
                <div class="card-body">
                <form class="user" action="" method="POST">
                    <div class="form-group">
                        <label for="namaKelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="namaKelas" name="namaKelas" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" name="editKelas" class="btn btn-success">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>