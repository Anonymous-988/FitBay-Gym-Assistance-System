<html>
<head>
	<title>FitBay | View Trainers</title>
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
	<?php
		if(isset($_GET['view_trainers'])) { 
	?>
	<table align="center" width="794" style="color:black; font-size: 20;">
		<tr align="center">
			<td colspan="6"><h2>View All Trainers</h2><br></td>
		</tr>
		<tr>
			<th>Trainer No</th>
			<th>Trainer Name</th>
			<th>Trainer Class</th>
			<th>Trainer Contact</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
		$i=0;
			$sel_trainer="SELECT * FROM trainer";
			$run_trainer=mysqli_query($con, $sel_trainer);
			while ($row_trainer=mysqli_fetch_array($run_trainer)) {
				$tran_id=$row_trainer['tran_id'];
				$tran_name=$row_trainer['tran_name'];
				$tran_class=$row_trainer['tran_class'];
				$tran_contact=$row_trainer['tran_contact'];

				$i++;
			
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $tran_name; ?></td>
			<td><?php echo $tran_class; ?></td>
			<td><?php echo $tran_contact; ?></td>
			<td><a href="index1.php?edit_tran=<?php echo $tran_id; ?>">Edit</a></td>
			<td><a href="index1.php?delete_tran=<?php echo $tran_id; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	<?php } ?>
</body>
</html>