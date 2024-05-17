<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $ID_Makanan = $_POST['ID_Makanan'];
    $Nama = $_POST['Nama'];
    $Deskripsi = $_POST['Deskripsi'];
    $Harga = $_POST['Harga'];

    // Lakukan proses update data di database
    $query = "UPDATE web_makanan.makanan SET Nama='$Nama', Deskripsi='$Deskripsi', Harga='$Harga' WHERE ID_Makanan=$ID_Makanan";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: adminmakanan.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $ID_Makanan = $_GET['id'];
    $query = "SELECT * FROM web_makanan.makanan WHERE ID_Makanan=$ID_Makanan";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "ID_Makanan makanan tidak ditemukan.";
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
            <h1 class="title">Update Makanan</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" name="ID_Makanan" value="<?php echo $data['ID_Makanan']; ?>">

        <label for="Nama">Nama </label><br>
        <input type="text" id="Nama" name="Nama" value="<?php echo $data['Nama']; ?>"><br>

        <label for="Deskripsi">Deskripsi</label><br>
        <input type="text" id="Deskripsi" name="Deskripsi" value="<?php echo $data['Deskripsi']; ?>"><br>

        <label for="Harga">Harga</label><br>
        <input type="text" id="Harga" name="Harga" value="<?php echo $data['Harga']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>