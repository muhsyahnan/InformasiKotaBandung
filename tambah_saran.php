<?php
$koneksi = mysqli_connect("localhost","root","","penulisan ilmiah");


//Masukan data pesan

// Check connection
if (mysqli_connect_errno()){
 echo "Koneksi database gagal : " . mysqli_connect_error();
}

$nama = $_POST['Nama'];
$email = $_POST['Email'];
$pesan = $_POST['Pesan'];

$data = "INSERT INTO kontak VALUES('','$nama', '$email', '$pesan')";

mysqli_query($koneksi, $data);
header("Location: kontak.php");
?>