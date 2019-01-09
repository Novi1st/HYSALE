<?php

require_once('connection.php');
session_start();

// cek button simpan
if(isset($_POST['simpan'])){
	
	// ambil data dari form
	$username=$_SESSION['User'];
	$nama=$_POST['NamaCustomer'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$tempatLahir = $_POST['tempatLahir'];
	$tglLahir = $_POST['tanggalLahir'];
	$alamat=$_POST['alamat'];
	$telp=$_POST['telp'];
	
	// buat query update
	$sql = "UPDATE customer SET Username='$username', NamaCustomer='$nama', Password='$password', Email='$email', Gender='$gender', TempatLahir='$tempatLahir', TglLahir='$tglLahir', Telephone='$telp', Alamat=' $alamat' WHERE Username='$username'";
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
