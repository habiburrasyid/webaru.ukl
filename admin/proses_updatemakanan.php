<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $ID_Makanan= $_POST['ID_Makanan'];
    $Nama= $_POST['Nama'];
    $Deskripsi= $_POST['Deskripsi'];
    $Harga= $_POST['Harga'];

    $result = mysqli_query($mysqli, "UPDATE user
    SET Nama='$Nama',username='$username',password='$password',level='$level'
    WHERE ID_Makanan=$ID_Makanan");
    header('Location: adminmakanan.php');
} else{
    die("Akses dilarang...");
}
?>