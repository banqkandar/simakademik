<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Mata Pelajaran</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4 border--primary">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Mata Pelajaran</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Mata Pelajaran</th>
                  <th>Ruangan</th>
                  <th>Semester</th>
                  <th>Jurusan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>MK001</td>
                  <td>Matematika - Integral</td>
                  <td>112</td>
                  <td>6</td>
                  <td>IPA</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<?php include 'footer.php'; ?>