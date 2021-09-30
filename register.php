<?php
session_start();
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $db = new Database();
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $sql = "INSERT INTO admin
    (username,password)
    VALUE ('$username','$password')";
    $query = mysqli_query($db->koneksi, $sql);

    //apakah query simpan berhasil ?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php
        //dengan status=sukses
        header('Location: login.php?status=sukses');
    } else {

        //kalau gagal alihkan ke halaman index.html
        //dengan status=gagal
        header('Location: login.php?status=gagal');
    }
}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
</head>

<style>

</style>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Name</span>
                        <input type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="text" name="password" placeholder="Confirm your password" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>