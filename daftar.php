<?php
include "koneksi.php";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_users(username,email,password)
            VALUES('$username','$email','$password')";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>alert('Pendaftaran berhasil');</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran</title>
</head>
<body>
<center>
    <h2>Form Pendaftaran</h2>

    <form action="daftar.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="submit">Daftar</button>
    </form>
</center>
</body>
</html>