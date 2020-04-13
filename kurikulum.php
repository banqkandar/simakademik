<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<div class="container">
    <div class="row align-items-center justify-content-center mb-5 mt-5">
        <div class="col-md-4 mr-5">
            <h1 class="judul mt-5">Kurikulum</h1>
            <p class="font-weight-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur.</p>
            <form action="" method="post">
                <div class="form-group">
                    <label for="jurusan" class="col-form-label">Pilih Jurusan</label>
                    <select class="form-control">
                        <option value="">Pilih Jurusan</option>
                        <option value="">TKJ</option>
                        <option value="">RPL</option>
                        <option value="">IPA</option>
                        <option value="">IPS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kelas" class="col-form-label">Pilih Kelas</label>
                    <select class="form-control">
                        <option value="">Pilih Kelas</option>
                        <option value="">TKJ</option>
                        <option value="">RPL</option>
                        <option value="">IPA</option>
                        <option value="">IPS</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="col-md-5">
            <img class="gambar" src="images/kurikulum.svg" style="width:30em;">
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>