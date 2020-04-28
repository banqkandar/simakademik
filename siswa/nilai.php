<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mt-5 text-gray-800 ">Data Nilai</h1>
    </div>

    <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Nilai</h6>
        </div>
        <div class="card-body">
          <div class="col-5">
            <form action="" method="POST">
              <div class="form-group">
                <label>Pilih Semester</label>
                <select name="status" class="form-control" required>
                  <option value=""> -- Pilih Semester -- </option>
                  <option value="">2020/2021 Ganjil</option>
                  <option value="">2021/2022 Genap</option>
                  <option value="">2020/2021 Ganjil</option>
                  <option value="">2021/2022 Genap</option>
                  <option value="">2020/2021 Ganjil</option>
                  <option value="">2021/2022 Genap</option>
                </select>
              </div>
            </form>
          </div>
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode</th>
                  <th>Mata Pelajaran</th>
                  <th>Nilai KKN</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>MK001</td>
                  <td>Kewirausahaan</td>
                  <td>70</td>
                  <td>33</td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
        
    </div>

</div>

<?php include 'footer.php'; ?>