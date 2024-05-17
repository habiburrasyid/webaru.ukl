<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){

    $ID_Bahan= $_POST['ID_Bahan'];
    $Nama= $_POST['Nama'];
    $Deskripsi= $_POST['Deskripsi'];
    $Stok= $_POST['Stok'];

    $result = mysqli_query($mysqli, "UPDATE user
    SET Nama='$Nama',username='$username',password='$password',level='$level'
    WHERE ID_Bahan=$ID_Bahan");
    header('Location: adminbahan.php');
} else{
    die("Akses dilarang...");
}
?>