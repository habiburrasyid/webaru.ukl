<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah makanan</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
    <h1 class="title">Makanan</h1><br>
        <form class="form" action="tambahmakanan.php" method="post">
            <input type="text" name="Nama" placeholder="Nama makanan">
            <input type="text" name="Deskripsi" placeholder="Deskripsi">
            <input type="text" name="Harga" placeholder="Harga">
           <button class="button" name="submit">Makanan</button>
        <?php
        if(isset($_POST['submit'])){
            $Nama= $_POST['Nama'];
            $Deskripsi= $_POST['Deskripsi'];
            $Harga= $_POST['Harga'];

            include_once("../koneksi.php");

            $result = mysqli_query($mysqli,
            "INSERT INTO web_makanan.makanan(Nama,Deskripsi,Harga) VALUES ('$Nama','$Deskripsi','$Harga')");

            header("location: adminmakanan.php");
        }
        ?>
    </div>
</body>
</html>