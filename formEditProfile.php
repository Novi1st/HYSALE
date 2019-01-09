<?php
require_once('connection.php');
session_start();

if( !isset($_GET['idCustomer']) ){
	// kalau tidak ada id_dokter di query string
	header('Location: profile.php');
}

//deklarasikan variabel $id dari id_dokter
$id = $_GET['idCustomer'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM customer WHERE idCustomer=$id";
$query = mysqli_query($con, $sql);
$customer = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>


	<form action="control_edit.php" method="POST">
		<fieldset>

		<p>
			<label for="idCustomer">Id: </label>
			<input type="text" id="idCustomer" name="idCustomer" value="<?php echo $customer['idCustomer'] ?>" />
		</p>
		<p>
			<label for="NamaCustomer">Nama: </label>
			<input type="text" name="NamaCustomer" placeholder="nama lengkap" value="<?php echo $customer['NamaCustomer'] ?>" />
		</p>
		<p>
			<label for="Username">Username: </label>
			<input type="text" name="Username" value="<?php echo $customer['Username'] ?>" />
		</p>
		<p>
			<label for="Alamat">Alamat: </label>
			<textarea name="Alamat"><?php echo $customer['Alamat'] ?></textarea>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>	
		</fieldset>	
	</form>	
	<br>
