<?php
include 'connection.php';
?>                               
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
		.style1 {color: #FFFFFF}
		</style>
	</head>
	<body>
		<h3>Profile</h3>  
		<table cellpadding="0" cellspacing="0" border="1px" class="table">
			<thead>
				<tr bgcolor="#000033">
					<th><CENTER style=""><span class="style1">Username</span></th>
					<th><CENTER style=""><span class="style1">Nama Lengkap</span></th>
					<th><CENTER style=""><span class="style1">Password</span></th>
					<th><CENTER style=""><span class="style1">Email</span></th>
					<th colspan="2"><CENTER style=""><span class="style1">AKSI</span></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$query = mysqli_query($con,"SELECT * FROM customer");
				while ($record = mysqli_fetch_array($query)) {
				?>
					<tr class="active">
						<td> <CENTER style=""><?php echo $record['Username']; ?></td>
						<td> <?php echo $record['NamaCustomer']; ?></td>
						<td> <?php echo $record['Password']; ?></td>
						<td> <?php echo $record['Email']; ?></td>
						<td> <CENTER style="">
							<a href="updateadmin.php?id_admin=<?php echo $record['id_admin']?>"
							class="btn btn-xs btn-success">Update</a>
							<a href="deleteadmin.php?id_admin=<?php echo $record['id_admin']?>"
							class="btn btn-xs btn-danger" onClick="return confirm('Apakah anda yakin akan
							menghapus data ini?')">Delete</a>
						</td>

					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
<?php
mysqli_close($con);
?>