<?php 
session_start(); //memulai session

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysql_query($config, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek = mysql_num_rows($login);

if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) { //mengecek apakah captcha_code yang diisi sesuai


	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id_admin'] = $data['id_admin'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama_admin'] = $data['nama_admin'];


			//header("location:admin/");
		
	}else{
		header("location:login.php?alert=gagal");
	}

}else {
    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    //echo "<a href=login.php><b>ULANGI LAGI</b></a></center>"; 
}
