<?php
require_once ("connection.php");
  session_start();
  if(isset($_POST['submit']))
  {
    $tgl = $_POST['date'];
    $bln = $_POST['month'];
    $thn = $_POST['year'];

  $query="insert into customer (Username,
  Password,NamaCustomer,Email,TempatLahir,TglLahir,Alamat,Telephone) values
  ('".$_POST['uname']."','".$_POST['password1']."','".$_POST['name']."','".$_POST['email']."','".$_POST['tempatLahir']."','".$thn."-".$bln."-".$tgl."','".$_POST['alamat']."','".$_POST['telp']."')";
  $hasil = mysqli_query($con, $query);

  if($hasil ) {
    // kalau berhasil menampilkan status=sukses
    $_SESSION['User']=$_POST['uname'];
    header('Location: Welcome.php?status=sukses');
  } else {
    // kalau gagal menampilkan status=gagal
    header('Location: daftar.php?status=gagal');
  } 
} else {
  die("Akses dilarang...");
}
?>