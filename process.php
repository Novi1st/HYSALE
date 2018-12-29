<?php
	require_once('connection.php');
	session_start();


	if (isset($_POST['login'])) 
	{
		# code...

		if (empty($_POST['uname']) || empty($_POST['psw'])) {
			# code...
			header("location:hysale.php?Empty= Please fill in the blanks");

		}
		else
		{
			$query="select Username, Password from customer where Username='".$_POST['uname']."' and Password='".$_POST['psw']."'"; 
			$result=mysqli_query($con,$query);
			if (mysqli_fetch_assoc($result)) {
				# code...
				$_SESSION['User']=$_POST['uname'];
				header("location:Welcome.php");
			}
			else
			{
				header("location:hysale.php?Invalid= Please Enter Correct Username and Password");
				
			}
		}
	}
	else
	{
		echo "Not Working";
	}

?>