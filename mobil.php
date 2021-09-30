<?php
session_start();
include 'koneksi.php';
if (isset($_POST['tambah'])) {
    $db = new Database();
    $nama = $_POST['nama'];
    $warna = ($_POST['warna']);
    $no_polisi = $_POST['no_polisi'];
    $jumlah_kursi = ($_POST['jumlah_kursi']);
    $tahun_beli = $_POST['tahun_beli'];
    $id_merk = ($_POST['id_merk']);
    $sql = "INSERT INTO tbl_pemesan
    (nama, warna, no_polisi, jumlah_kursi, tahun_beli, id_merk)
    VALUE ('$nama','$warna','$no_polisi','$jumlah_kursi','$tahun_beli','$id_merk')";
    $query = mysqli_query($db->koneksi, $sql);

    //apakah query simpan berhasil ?
    if ($query) {
        //kalau berhasil alihkan ke halaman index.php
        //dengan status=sukses
        header('Location: mobil.php?status=sukses');
    } else {

        //kalau gagal alihkan ke halaman index.html
        //dengan status=gagal
        header('Location: mobil.php?status=gagal');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Site Name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="sb-admin-2.min.css" rel="stylesheet">
    <link href="dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>


    <div class="topbar transition">
        <div class="bars">
            <button type="button" class="btn transition" id="sidebar-toggle">
                <i class="las la-bars"></i>
            </button>
        </div>
        <!-- Navbar -->
        <div class="menu">
            <ul>
                <li>
                    <a href="notifications.html" class="transition">
                        <i class="las la-bell"></i>
                        <span class="badge badge-danger notif">5</span>
                    </a>
                </li>
                <li>
                    <a href="settings.html" class="transition">
                        <i class="las la-sliders-h"></i>
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <div class="dropdown-toggle" id="dropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            HI, Admin
                        </div>
                        <div class="dropdown-menu" aria-labelledby="dropdownProfile">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="change-password.html">Change Password</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="signout.html">Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar transition">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon">
                <i class="fas fa-car"></i>
            </div>
            <div class="sidebar-brand-text">Rental Mobil</div>
        </a>
        <ul>
            <p class="menu">Menu</p>
            <li>
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <p class="menu">Mobil</p>
            <li>
                <a href="merk.php" class="transition">
                    <i class="fas fa-fw fa-columns"></i>
                    <span>Data Merk</span>
                </a>
            </li>
            <li>
                <a href="mobil.php" class="transition">
                    <i class="fas fa-fw fa-car-alt"></i>
                    <span>Data Mobil</span>
                </a>
            </li>
            <p class="menu">Transaksi</p>
            <li>
                <a href="data_pemesanan.php" class="transition">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Pemesan</span>
                </a>
            </li>
            <li>
                <a href="perjalanan.php" class="transition">
                    <i class="fas fa-fw fa-street-view"></i>
                    <span>Data Perjalanan</span>
                </a>
            </li>
            <li>
                <a href="pemesan.php" class="transition">
                    <i class="fas fa-fw fa-receipt"></i>
                    <span>Data Pesanan</span>
                </a>
            </li>
            <p class="menu">Logout</p>
            <li>
                <a href="logout.php" class="transition">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Keluar</span>
                </a>
            </li>
        </ul>
    </div>
    </div>

    <div class="sidebar-overlay"></div>

    <!-- Content -->
    <div class="content transition">
        <div class="container-fluid dashboard">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="merk">Nama Merk</label>
                                            <select name="id_merk" id="merk" class="form-control">

                                                <option value="Toyota"></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Mobil</label>
                                            <input type="text" name="nama" id="nama" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="warna">Warna Mobil</label>
                                                <input type="text" name="warna" id="warna" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="jumlah_kursi">Jumlah Kursi</label>
                                                <input type="number" name="jumlah_kursi" id="jumlah_kursi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="no_polisi">No Polisi</label>
                                                <input type="text" name="no_polisi" id="no_polisi" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="tahun_beli">Tahun Beli</label>
                                                <input type="number" name="tahun_beli" id="tahun_beli" required="required" placeholder="ketik" autocomplete="off" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-success" name="tambah"><i class="fa fa-plus"></i> Tambah</button>
                                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer transition">
        <p>&copy; 2021 All Right Reserved by <a href="AhliKode.com">Rio Fadli</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>