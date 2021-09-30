<?php
session_start();
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $db = new Database();
    $username = $_POST['username'];
    $password = ($_POST['password']);
    $result = mysqli_query(
        $db->koneksi,
        "SELECT * FROM admin WHERE username='$username' and password='$password'"
    );
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['submit'] = $password;
        echo "<script type='text/javascript'>
        alert('Login Berhasil!')
            window.location = 'index.php'
        </script>";
        // ;
    } else {
        echo "<script type='text/javascript'>
        alert('Email atau Password Anda Salah!')
            window.location = 'login.php'
        </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
    <!DOCTYPE html>
    <!-- Created By CodingNepal -->
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Popup Login Form Design | CodingNepal</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    </head>

    <body>
        <div class="center">

            <div class="container">
                <div class="text">
                    Login Form
                </div>
                <form action="" method="post">
                    <div class="data">
                        <label>Username</label>
                        <input type="text" name="username" required>
                    </div>
                    <div class="data">
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>
                    <div class="btn">
                        <div class="inner"></div>
                        <button type="submit" name="submit">login</button>
                    </div>
                    <div class="signup-link">
                        Not a member? <a href="register.php">Signup now</a>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html> <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>