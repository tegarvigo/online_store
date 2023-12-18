<?php

// konek.php berfungsi untuk mengkoneksikan antara aplikasi/web/sistem dengan database mysql
// yang didalamkurung (server,username,password,nama database)

$server = "localhost";
$username = "root";
$pass = "";
$nama_db = "db_toko_tegar";

$kon = mysqli_connect($server, $username, $pass, $nama_db);

if(!$kon){
    echo "koneksi gagal";
}

?>