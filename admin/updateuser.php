<?php
include '../koneksi.php';

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    // Lakukan proses update data di database
    $query = "UPDATE web_makanan.user SET username='$username', password='$password', nama='$nama' WHERE id=$id";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        echo "Data berhasil diperbarui.";
        header("Location: index.php"); // Redirect kembali ke halaman data user
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($mysqli);
    }
}

// Mendapatkan data user yang akan diupdate
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM web_makanan.user WHERE id=$id";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "ID user tidak ditemukan.";
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
            <h1 class="title">Update Alat Musik</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

        <label for="nama">Nama </label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>"><br>

        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" value="<?php echo $data['username']; ?>"><br>

        <label for="password">Password</label><br>
        <input type="text" id="password" name="password" value="<?php echo $data['password']; ?>"><br>

        <label for="level">Level </label><br>
        <input type="text" id="level" name="level" value="<?php echo $data['level']; ?>"><br>

        <input type="submit" name="update" value="Update" class="button">
    </form>
        </section>
    </div>
    
</body>
</html>