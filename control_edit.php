<?php

require_once('connection.php');

// cek button simpan
if(isset($_POST['simpan'])){
	
	// ambil data dari form
	$id = $_POST['idCustomer'];
	$username=$_POST['Username'];
	$nama=$_POST['NamaCustomer'];
	$alamat=$_POST['Alamat'];
	
	// buat query update
	$sql = "UPDATE customer SET Username='$username', NamaCustomer='$nama', Alamat='$alamat' WHERE idCustomer=$id";
	$query = mysqli_query($con, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list dokter.php
		header('Location: profile.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
		
} else {
	die("Akses dilarang...");
}

?>
