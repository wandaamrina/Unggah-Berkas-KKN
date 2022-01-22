<?php
require_once 'config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
// ambil data file
$surat_pernyataan = $_FILES['file1']['name'];
$pernyataanSementara = $_FILES['file1']['tmp_name'];

$pelatihan = $_FILES['file1']['name'];
$pelatihanSementara = $_FILES['file1']['tmp_name'];

$bukti_bayar = $_FILES['file1']['name'];
$buktiSementara = $_FILES['file1']['tmp_name'];
// tentukan lokasi file akan dipindahkan
$dirUpload = "files/";
// pindahkan file
$terupload = move_uploaded_file($pernyataanSementara, $dirUpload.$surat_pernyataan);
$terupload1 = move_uploaded_file($pelatihanSementara, $dirUpload.$pelatihan);
$terupload2 = move_uploaded_file($buktiSementara, $dirUpload.$bukti_bayar);

$sql = "INSERT INTO file(nim, nama, prodi, alamat, surat_pernyataan, pelatihan, bukti_bayar) VALUES ('$nim', '$nama', 
'$prodi','$alamat','$surat_pernyataan','$pelatihan','$bukti_bayar')";
$query=mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:index.php');
?>
