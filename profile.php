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
$result = mysqli_query($con,"SELECT * FROM customer where Username='$username'");
$row = mysqli_fetch_array($result);
?>
<div class="container-fluid">
<table class="table table-sm">
  <thead>
  <tr>
    <th colspan="3" scope="col"><?php echo $username ?> Profile Information </th>
  </tr>
</thead>
<tbody>
  <tr>
    <th width="25%" rowspan="7"><?php
            echo "<img src='uploads/".$row['foto']."' width='125' height='150'/>";
            ?></th>
    <td width="25%" valign="top"><div align="left">Nama</div></td>
    <td width="50%" valign="top"><?php echo $row['NamaCustomer'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><?php echo $row['Email'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Jenis Kelamin</div></td>
    <td valign="top"><?php echo $row['Gender'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Alamat:</div></td>
    <td valign="top"><?php echo $row['Alamat'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Telephone:</div></td>
    <td valign="top"><?php echo $row['Telephone'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Tempat Lahir: </div></td>
    <td valign="top"><?php echo $row['TempatLahir'] ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Tanggal Lahir: </div></td>
    <td valign="top"><?php echo $row['TglLahir'] ?></td>
  </tr>
  <tr>
  	<td>
		<a href="formEditProfile.php?Username=<?php echo $row['Username']?>">Edit</a>
		</td>
		<td>
		<a href="control_hapus.php?Username=<?php echo $row['Username']?>">Hapus Akun</a>
	</td>
	</tr>
</tbody>
</table>
</div>

<footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">© 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>   
</body>
</html>