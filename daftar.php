<?php
session_start();
require_once ("connection.php");
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/product.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script src="js/jguery.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="hysale.php">
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
   
  </div>
</nav>

  <div class="clear"></div>
      <div class="container-form">
      <div class="registrasi">
        <p>Registration</p>
      </div>
      
      <form action="control_daftar.php" method="post">
        <fieldset>
          <legend>Data Diri</legend>
          <label for="name"><b>Nama Lengkap</b></label>
          <br>
          <input type="text" name="name" placeholder="Nama Lengkap"></input>
          <br>
          <label for="uname"><b>Username</b></label>
          <br>
          <input type="text" name="uname" placeholder="Username"></input>
          <br>
          <label for="password"><b>Password</b></label>
          <br>
          <input type="password" name="password1" placeholder="Password"></input>
          <br>
          <label for="email"><b>Email</b></label>
          <br>
          <input type="text" name="email" placeholder="Email-e.g.novinurkhaeni@gmail.com"></input>
          <br>
          <label for="gender"><b>Jenis Kelamin</b></label>
          <br>
              <input type="radio" name="gender" value="Laki-laki">Laki-laki</input>
              <input type="radio" name="gender" value="Perempuan">Perempuan</input>
          <br>
              <label for="tempatLahir"><b>Tempat Lahir</b></label>
          <br>
          <input type="text" name="tempatLahir" placeholder="Tempat Lahir"></input>

 
          <br> 
              <label for="tanggalLahir"><b>Tanggal Lahir</b></label>
              <input type="date" name="tanggalLahir" placeholder="Tanggal Lahir"></input>
              <br> 
          <label for="alamat"><b>Alamat</b></label>
          <br>
          <input type="text" name="alamat" placeholder="Alamat"></input>
          <br> 
          <label for="telp"><b>No Telephone</b></label>
          <br>
          <input type="text" name="telp" placeholder="No Telephone"></input>
          <br>  
          <tr>
            <td><label for="foto">Pilih File</td>
            <td><input type="file" name="foto" value=""></td>
          </tr>
    <br>
        </fieldset>
        <br>
              <input name="submit" type="submit" value="Insert">
                 <div class="fb">
        <table>
          <tr>
          <td><a href="https://facebook.com/"> <img src="contact/fb.png"><input type="button" name="submitFB"  value="Signup With Facebook"/></a></td>
          </tr>
        </table>
            <?php
            if(isset($_POST['submit'])){
                  $foto = $_FILES["foto"]["name"];
                  $source = $_FILES["foto"]["tmp_name"];
                  $folder='../uploads/';
                  move_uploaded_file($source, $folder.$foto);
                }
            ?>
      </div>
               <div class="punya"><p>Have an account? <a href="login.php">Login</a></p></div>
      </form>
    </div>
</body>
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
</html> 
