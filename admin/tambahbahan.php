<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah bahan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
    <h1 class="title">Bahan</h1><br>
        <form class="form" action="tambahbahan.php" method="post">
            <input type="text" name="nama_bahan" placeholder="Nama bahan">
            <input type="text" name="Deskripsi" placeholder="Deskripsi">
            <input type="text" name="Stok" placeholder="Stok">
           <button class="button" name="submit">Bahan</button>
        <?php
        if(isset($_POST['submit'])){
            $nama_bahan= $_POST['nama_bahan'];
            $Deskripsi= $_POST['Deskripsi'];
            $Stok= $_POST['Stok'];

            include_once("../koneksi.php");

            $result = mysqli_query($mysqli,
            "INSERT INTO web_makanan.bahan(nama_bahan,Deskripsi,Stok) VALUES ('$nama_bahan','$Deskripsi','$Stok')");

            header("location: adminbahan.php");
        }
        ?>
    </div>
</body>
</html>