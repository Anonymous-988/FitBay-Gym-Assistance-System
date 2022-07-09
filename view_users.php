<html>
<head>
	<title>FitBay | View Users</title>
<style type="text/css">
	table{
		background-color: #f1533e;
	}
	tr,th{
		border: 3px solid white;
		border-radius: 10px;
	}
</style>
</head>
<body>
	<table align="center" width="794" style="color:black; font-size: 20;">
		<tr align="center">
			<td colspan="6"><h2>View All User</h2><br></td>
		</tr>
		<tr>
			<th>User No</th>
			<th>User Name</th>
			<th>User Email</th>
			<th>User Weight</th>
			<th>User Age</th>
			<th>User Contact</th>
			<th>Delete</th>
		</tr>
		<?php 
		$i=0;
			$sel_user="SELECT * FROM users";
			$run_user=mysqli_query($con, $sel_user);
			while ($row_user=mysqli_fetch_array($run_user)) {
				$user_id=$row_user['user_id'];
				$user_name=$row_user['user_name'];
				$user_email=$row_user['user_email'];
				$user_weight=$row_user['user_weight'];
				$user_age=$row_user['user_age'];
				$user_contact=$row_user['user_contact'];

				$i++;
			
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $user_email; ?></td>
			<td><?php echo $user_weight; ?></td>
			<td><?php echo $user_age; ?></td>
			<td><?php echo $user_contact; ?></td>
			<td><a href="index1.php?delete_user=<?php echo $user_id; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>