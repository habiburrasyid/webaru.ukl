<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Resistrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
    <h1 class="title">Register</h1><br>
        <form class="form" action="register.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="nama" placeholder="Nama">
            <input type="password" name="password" placeholder="Password">
            <select name="level" id="level">
                <option disable selected>Pilih</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
           <button class="button" name="submit">Register</button>
        <?php
        if(isset($_POST['submit'])){
            $namas= $_POST['nama'];
            $usernames= $_POST['username'];
            $passwords= $_POST['password'];
            $levels= $_POST['level'];

            include_once("koneksi.php");

            $result = mysqli_query($mysqli,
            "INSERT INTO web_makanan.user(nama,username,password,level) VALUES ('$namas','$usernames','$passwords','$levels')");

            header("location: index.php");
        }
        ?>
    </div>
</body>
</html>