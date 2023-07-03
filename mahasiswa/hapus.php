<?php
include "koneksi.php";
$id = $_GET['id'];
$inihapus = mysqli_query($conn, "DELETE FROM mahasiswa where id='$id'");
if ($inihapus) {
    echo "<script>window.alert('Data warga berhasil'); window.location.href='index.php'</script>";
} else {
    echo "<script>window.alert('Data warga Gagal'); window.location.href='index.php'</script>";
}

// if ($inihapus) {
//     echo "<script>window.alert('Data warga berhasil'); window.location.href='index.php'</script>";
// }
