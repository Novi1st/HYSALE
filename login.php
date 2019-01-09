<?php
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
        <p>Login</p>
      </div>
      
      <form action="process.php" method="post">
          <label for="uname"><b>Username</b></label>
          <br>
          <input type="text" name="uname" placeholder="Username"></input>
          <br>
          <label for="psw"><b>Password</b></label>
          <br>
          <input type="password" name="psw" placeholder="Password"></input>
          <br>
        <br>
              <input name="login" type="submit" value="login">
                 <div class="fb">
        <table>
          <tr>
          <td><a href="https://facebook.com/"> <img src="contact/fb.png"><input type="button" name="submitFB"  value="Login With Facebook"/></a></td>
          </tr>
        </table>
      </div>
               <div class="punya"><p>Don't Have an account? <a href="daftar.php">Signin</a></p></div>
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

<?php
  if(isset($_POST['submit']))
  {
    $tgl = $_POST['date'];
    $bln = $_POST['month'];
    $thn = $_POST['year'];

  $query="insert into customer (Username,
  Password,NamaCustomer,Email,TempatLahir,TglLahir,Alamat,Telephone) values
  ('".$_POST['username']."','".$_POST['password']."','".$_POST['name']."','".$_POST['email']."','".$_POST['tempatLahir']."','".$thn."-".$bln."-".$tgl."','".$_POST['alamat']."','".$_POST['telp']."')";

   //eksekusi query
  $hasil=mysqli_query($con,$query) /*or die  (mysqli_error())*/;
  ?>

  <script>
  alert("data sukses ditambahkan");
  window.location='profile.php';</script>
  <?php
  }
?>
