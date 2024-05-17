<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $ID_Bahan = $_POST['ID_Bahan'];
    $Deskripsi = $_POST['Deskripsi'];
    $Stok = $_POST['Stok'];
    $nama_bahan = $_POST['nama_bahan'];

    // Lakukan proses update data di database
    $query = "UPDATE web_makanan.bahan SET Deskripsi='$Deskripsi', Stok='$Stok', nama_bahan='$nama_bahan' WHERE ID_Bahan=$ID_Bahan";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: adminbahan.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $ID_Bahan = $_GET['id'];
    $query = "SELECT * FROM web_makanan.bahan WHERE ID_Bahan=$ID_Bahan";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "ID_Bahan bahan tidak ditemukan.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="icon" type="image/png" href="../logotitle.png">
    <link rel="stylesheet" href="updateuser.css">
</head>
<body>
<div class="container">
        <header>
            <h1 class="title">Update Bahan</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" name="ID_Bahan" value="<?php echo $data['ID_Bahan']; ?>">

        <label for="nama_bahan">Nama </label><br>
        <input type="text" id="nama_bahan" name="nama_bahan" value="<?php echo $data['nama_bahan']; ?>"><br>

        <label for="Deskripsi">Deskripsi</label><br>
        <input type="text" id="Deskripsi" name="Deskripsi" value="<?php echo $data['Deskripsi']; ?>"><br>

        <label for="Stok">Stok</label><br>
        <input type="text" id="Stok" name="Stok" value="<?php echo $data['Stok']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>