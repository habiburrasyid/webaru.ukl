<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $ID_Resep = $_POST['ID_Resep'];
    $Makanan_ID = $_POST['Makanan_ID'];
    $Bahan_ID = $_POST['Bahan_ID'];
    $Kuantitas = $_POST['Kuantitas'];

    // Lakukan proses update data di database
    $query = "UPDATE web_makanan.resep SET Makanan_ID='$Makanan_ID', Bahan_ID='$Bahan_ID', Kuantitas='$Kuantitas' WHERE ID_Resep=$ID_Resep";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: adminresep.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $ID_Resep = $_GET['id'];
    $query = "SELECT * FROM web_makanan.resep WHERE ID_Resep=$ID_Resep";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "ID_Resep Resep tidak ditemukan.";
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
            <h1 class="title">Update Resep</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" name="ID_Resep" value="<?php echo $data['ID_Resep']; ?>">

        <label for="Makanan_ID">Makanan_ID </label><br>
        <input type="text" id="Makanan_ID" name="Makanan_ID" value="<?php echo $data['Makanan_ID']; ?>"><br>

        <label for="Bahan_ID">Bahan_ID</label><br>
        <input type="text" id="Bahan_ID" name="Bahan_ID" value="<?php echo $data['Bahan_ID']; ?>"><br>

        <label for="Kuantitas">Kuantitas</label><br>
        <input type="text" id="Kuantitas" name="Kuantitas" value="<?php echo $data['Kuantitas']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>