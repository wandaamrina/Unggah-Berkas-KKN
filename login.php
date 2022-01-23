<head>
  <title>Unggah Berkas KKN</title>
</head>
<body bgcolor="grey">
  <div class="container">
    <div class="login-box">

      <center>

        <h2>Login Aplikasi Unggah Berkas KKN</h2>
        

        <br/>
    <?php 
            if(isset($_GET['alert'])){
            if($_GET['alert'] == "gagal"){
                echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
            }else if($_GET['alert'] == "logout"){
                echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
            }else if($_GET['alert'] == "belum_login"){
                echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
            }
            }
            ?>
        </center>

        <div class="login-box-body" style="background-color: #F0F8FF; height: 300px;"">

        <form action="periksa_login.php" method="POST">
            <div class="form-group has-feedback" style="margin-top: 40px">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <center><img src='captcha.php' /></center><br>
            <input type="text" class="form-control" placeholder="Kode Captcha" name="captcha_code" required="required" autocomplete="off">
            </div>
            <div class="row">
            <div class="col-xs-offset-8 col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            </div>
        </form>

        </div>
    </div>
    </div>

</body>
</html>
