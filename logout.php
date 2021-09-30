<?php
session_start();
if (isset($_SESSION['submit'])) {
    unset($_SESSION);
    session_destroy();
    echo "<script type='text/javascript'>
alert('Logout Berhasil');window.location='login.php'
</script>";
}
