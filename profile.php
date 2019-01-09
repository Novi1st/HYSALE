<?php
require_once('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--lebar halaman mengikuti ukuran layar dan menetapkan tingkat zoom awal saat halaman pertama dimuat oleh browser-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8"><!--set karakter-->	
  <meta name="author" content="">
	<link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="Welcome.php">
    <img src="logo2.jpg" alt="logo" style="width:60px;">
  </a>
  <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sale</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQ</a>
      </li>
    </ul>
    	<a href="control_logout.php" class="nav-link"> Logout</a>
  </div>
</nav>
<?php
$username=$_SESSION['User'];
$result3 = mysqli_query($con,"SELECT * FROM customer where Username='$username'");
while($row3 = mysqli_fetch_array($result3))
{ 
$nama=$row3['NamaCustomer'];
$id=$row3['idCustomer'];
$email=$row3['Email'];
$gender=$row3['Gender'];
$alamat=$row3['Alamat'];
$telephone=$row3['Telephone'];
$foto=$row3['foto'];
$tempatlahir=$row3['TempatLahir'];
$tgllahir=$row3['TglLahir'];
}
?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td colspan="2" height="26" colspan="2">Your Profile Information </td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><?php echo $username ?></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $foto ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">Nama:</div></td>
    <td width="165" valign="top"><?php echo $nama ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Jenis Kelamin</div></td>
    <td valign="top"><?php echo $gender ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Alamat:</div></td>
    <td valign="top"><?php echo $alamat ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Telephone:</div></td>
    <td valign="top"><?php echo $telephone ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Tempat Lahir: </div></td>
    <td valign="top"><?php echo $tempatlahir ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Tanggal Lahir: </div></td>
    <td valign="top"><?php echo $tgllahir ?></td>
  </tr>
  <tr>
  	<td>
		<a href="formEditProfile.php?idCustomer=<?php echo $id?>">Edit</a>
		</td>
		<td>
		<a href="control_hapus.php?idCustomer=<?php echo $id?>">Hapus Akun</a>
	</td>
	</tr>
</table>
</body>
</html>