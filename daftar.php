<?php include 'header.php'; ?>

<div class="login">
    <div class="img">
        <img src="images/login.svg">
    </div>
    <div class="login-container">
        <div class="row align-items-center justify-content-center ">
            <form action="" method="post">
                <a href="login.php" class="kembali d-flex">
                    <i class="fas fa-arrow-left mr-2 mt-1"></i>
                    <span>Kembali</span>
                </a>
                <h1 class="h3 font-weight-bold mt-4 pt-1 judul-login">Akun Baru</h1>
                <p class="subjudul h8 mt-1 mb-4 ">Daftar akunmu sekarang</p>

                <div class="input-div one">
                    <div class="i">
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <h5>Nama Lengkap</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fa fa-user"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input type="text" class="input">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input">
                    </div>
                </div>
                <button type="submit" class="btn btn-login mt-5">Daftar Sekarang</button>
            </form>
        </div>
    </div>
    
<?php include 'footer.php'; ?>