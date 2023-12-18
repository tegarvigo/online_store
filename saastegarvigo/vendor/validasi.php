<?php
session_start();

// untuk memvalidasi inputan pada web dengan field yang ada pada tabel database 

include "konek.php";
$username = $_POST['usernameDiweb'];

$pass = $_POST['passwordDiweb'];




if (empty($username)) {//kondisi untuk username kosong
	$_SESSION['info'] = 'Username dan Password Tidak boleh kosong :)';
	header("location: ../login.php");
	exit();//mengakhiri sesi
} else {
	if (empty($pass)) {//kondisi untuk password kosong
		$_SESSION['info'] = 'Username dan Password Tidak boleh kosong :)';
	header("location: ../login.php");
	exit();
	}else{//kondisi suksses
		$sql = "SELECT * FROM tb_akun WHERE NAMA_AKUN LIKE '$username' AND USERNAME like '$pass' ";

//mengoneksikan database dengan apa yang dipanggil

$cek = mysqli_query($kon, $sql);

//memanggil data pada baris 

$row = mysqli_fetch_assoc($cek); 

// Id_Akun / Nama_Akun / Email / Username / Password / Foto / Hak_Akses
// 1 / DIMAZ / dimazfathi982gmail.com / uhuy / samid / aku.jpg / administrator

//seleksi

if($row['NAMA_AKUN'] === $username && $row['USERNAME'] === $pass){
	$_SESSION['login'] = true;

	
}else{
	$_SESSION['info'] = 'Username atau password salah';
	header("location: ../login.php");
}
	
	if (isset($_SESSION["login"])) {
		header("location: ../index.php");
	}else{
		header("locatiom: ../login.php");
		exit();

	}
  }

}

// echo "ini adalah username ".$username. " dan ini adalah password ".$pass;
// tahap memanggil semua data pada tb_akun didatabase yang mana disamakan dengan
// $username dan $pass


?>