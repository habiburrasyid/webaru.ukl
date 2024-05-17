<?php
include '../koneksi.php';

$ID_Bahan = $_GET['id'];


$hapus = mysqli_query($mysqli, "DELETE FROM web_makanan.bahan WHERE ID_Bahan = '$ID_Bahan'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: adminbahan.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>