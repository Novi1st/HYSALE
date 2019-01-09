<?php
require_once ("connection.php");
  session_start();
  if(isset($_POST['submit']))
  {
     $foto = $_FILES['foto']["name"];
    $source = $_FILES['foto']["tmp_name"];
                  //tentukan lokasi file akan dipindahkan
    $folder='uploads/';
                  //pindahkan file



    $query="insert into customer (Username,
    Password,NamaCustomer,Email, Gender, TempatLahir,TglLahir,Alamat,foto, Telephone) values
    ('".$_POST['uname']."','".$_POST['password1']."','".$_POST['name']."','".$_POST['email']."','".$_POST['gender']."','".$_POST['tempatLahir']."','".$_POST['tanggalLahir']."','".$_POST['alamat']."','$foto','".$_POST['telp']."')";
    $hasil = mysqli_query($con, $query);
    move_uploaded_file($source, $folder.$foto);
  
    if(mysqli_fetch_assoc($hasil) )
    {
      // kalau berhasil menampilkan status=sukses
      $_SESSION['User']=$_POST['uname'];
      header('Location: Welcome.php?status=sukses');
    } 

    else 
    {
      // kalau gagal menampilkan status=gagal
      header('Location: daftar.php?status=gagal');
    } 
  } 
  else 
  {
    die("Akses dilarang...");
  }
?>