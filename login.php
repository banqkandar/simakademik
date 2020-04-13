<?php include 'header.php'; ?>
<div class="login">
    <div class="img">
        <img src="images/login.svg">
    </div>
    <div class="login-container">
        <form action="" method="post">
            <a href="index.php" class="kembali d-flex">
                <i class="fas fa-arrow-left mr-2 mt-1"></i>
                <span>Kembali</span>
            </a>
            <img class="avatar" src="images/profile.svg" alt="profile">
            <div class="input-div one">
                <div class="i">
                    <i class="fa fa-user"></i>
                </div>
                <div>
                    <h5>Username</h5>
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
            <a href="#">Forgot Password</a>
            <button type="submit" class="btn btn-login mt-5">Masuk Akun Saya</button>
            <hr class="bullet" />
            <a href="daftar.php" class="btn btn-regis btn-block ">Daftar Akun Baru</a>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>