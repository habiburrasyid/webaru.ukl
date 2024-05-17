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
    <h1>data bahan</h1>

    <button class="btn"><a href="tambahbahan.php">Tambah bahan</a></button>

<table border="1" class="table">
    <tr>
        <th>nomor</th>
        <th>nama</th>
        <th>deskripsi</th>
        <th>stok</th>
        <th>action</th>
        <th>action</th>

    </tr>
    <?php
    //Select Tabel User dari database 
    $nomor = 1;
    include '../koneksi.php';
    $query_mysql = mysqli_query($mysqli, "SELECT * FROM web_makanan.bahan ") or die(mysqli_error());

    while($data = mysqli_fetch_array($query_mysql)){
    ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nama_bahan']; ?></td>
            <td><?php echo $data['Deskripsi']; ?></td>
            <td><?php echo $data['Stok']; ?></td>
            <td><a href="hapusbahan.php?id=<?php echo $data['ID_Bahan']; ?>" class="btn-hapus">Hapus</a> <!-- Tombol hapus --></td>
            <td><a href="updatebahan.php?id=<?php echo $data['ID_Bahan']; ?>" class="btn-update">Update</a> <!-- Tombol update --></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>