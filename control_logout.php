<?php 
session_start();//fungsi untuk memulai SESSION

if (!empty($_SESSION['User'])){ // mengecek apakah SESSION sudah ada atau belum

unset($_SESSION['User']); //menghapus SESSION

header("location:hysale.php");

}
?>