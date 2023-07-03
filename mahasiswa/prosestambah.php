<?php
include "koneksi.php";
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

$initambah=mysqli_query($conn,"INSERT INTO mahasiswa (id,nama,jenis_kelamin,alamat)value(NULL,'$nama','$jenis_kelamin','$alamat')");
if($initambah){
    header('location:form_tambah.php');
}


?>