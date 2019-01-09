<?php

require_once('connection.php');
session_start();

if( isset($_SESSION['User'])){
	
	// ambil id_dokter dari query string
	$username = $_SESSION['User'];
	
	// buat query hapus
	$sql = "DELETE FROM customer WHERE Username='$username'";
	$query = mysqli_query($con, $sql);
	
	// query hapus berhasil
	if( $query ){
		header('Location: hysale.php');
	} else {
		die("gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}

?>
