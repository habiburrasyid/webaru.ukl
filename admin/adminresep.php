<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabel user</title>
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
    <h1>data resep</h1>

<table border="1" class="table">
    <tr>
        <th>nomor</th>
        <th>Resep</th>
        <th>Bahan</th>
        <th>Makanan</th>
        <th>action</th>
        <th>action</th>

    </tr>
    <?php
    //Select Tabel User dari database 
    $nomor = 1;
    include '../koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM web_makanan.resep ") or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['ID_Resep']; ?></td>
            <td><?php echo $data['Bahan_ID']; ?></td>
            <td><?php echo $data['Makanan_ID']; ?></td>
            <td><a href="hapusresep.php?id=<?php echo $data['ID_Resep']; ?>" class="btn-hapus">Hapus</a> <!-- Tombol hapus --></td>
            <td><a href="updateresep.php?id=<?php echo $data['ID_Resep']; ?>" class="btn-update">Update</a> <!-- Tombol update --></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>