<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabel User</title>
<link rel="stylesheet" href="admintabel1.css">
</head>
<body>
<header>
        <a href="#" class="logo">
            <img src="../user/img/logo.png" alt="">
        </a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li><a href="index.php">User</a></li>
            <li><a href="adminbahan.php">Bahan</a></li>
            <li><a href="adminresep.php">Resep</a></li>
            <li><a href="adminmakanan.php">Makanan</a></li>
        </ul>
        </div>
    </header>
    <h1>data user</h1>
    <button class="btn"><a href="../register.php">Tambah User</a></button>

<table border="1" class="table">
    <tr>
        <th>nomor</th>
        <th>id</th>
        <th>nama</th>
        <th>username</th>
        <th>password</th>
        <th>level</th>
        <th>action</th>
        <th>action</th>

    </tr>
    <?php
    //Select Tabel User dari database 
    $nomor = 1;
    include '../koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM web_makanan.user ") or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td>
            <td><a href="hapususer.php?id=<?php echo $data['id']; ?>" class="btn-hapus">Hapus</a> <!-- Tombol hapus --></td>
            <td><a href="updateuser.php?id=<?php echo $data['id']; ?>" class="btn-update">Update</a> <!-- Tombol update --></td>
        </tr>
    <?php } ?>
</table>

<button class="btn"><a href="../index.php">Log out</a></button>

</body>
</html>