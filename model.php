<?php
class Proses extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from admin"
        );
        // var_dump($datakategori);
        return $datakategori;
    }
    // Menambah Data
    public function create($id, $username, $password)
    {
        mysqli_query(
            $this->koneksi,
            "insert into admin values(null,'$username','$password')"
        );
    }
}
