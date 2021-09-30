<?php include("model.php");

//cek apakah tombol daftar sudah diklik atau belum ?
if (isset($_POST['register'])) {

    //ambil data dari formulir
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];


    //buat query
    $sql = "INSERT INTO admin
    (id, username,password)
    VALUE ('$id','$username','$password')";
    $query = mysqli_query($koneksi, $sql);

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
} else {
    die("Akses dilarang...");
}
