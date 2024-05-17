<?php
include '../koneksi.php';

$ID_Makanan = $_GET['id'];


$hapus = mysqli_query($mysqli, "DELETE FROM web_makanan.makanan WHERE ID_Makanan = '$ID_Makanan'") or die(mysqli_error($mysqli));

if($hapus) {
    header("Location: adminmakanan.php");
    exit();
} else {
    echo "Gagal menghapus user.";
}
?>