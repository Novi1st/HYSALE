<?php

require_once('connection.php');

if( isset($_GET['idCustomer'])){
	
	// ambil id_dokter dari query string
	$username = $_GET['idCustomer'];
	
	// buat query hapus
	$sql = "DELETE FROM customer WHERE idCustomer=$username";
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
