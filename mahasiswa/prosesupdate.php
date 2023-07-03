<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

$iniupate=mysqli_query($conn,"UPDATE mahasiswa set nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id=$id");
if($iniupate){
    header('location:index.php');
}



?>