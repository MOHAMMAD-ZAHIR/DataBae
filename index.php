<!DOCTYPE html>
<html>
	<head>
		<title>zahir
		</title>
	</head>
	<body>
	
	<?php
		
	$conn = mysqli_connect("localhost","root","","database") or die("Connection error");
	$sql = "SELECT * FROM info";
	$show = mysqli_query($conn,$sql) or die("SQL error");
	if(mysqli_num_rows($show)>0){
	?>
			<table border=1px>
				<tr>
					<td>ID</td>
					<td>Name:</td>
					<td>Father's Name:</td>
					<td>Mother's Name:</td>
					<td>Sex:</td>
					<td>Roll:</td>
					<td>Reg:</td>
					<td>Phone:</td>
					<td>Address:</td>
					<td>Department:</td>
					<td>Session:</td>
					<td>Semester:</td>
					<td>Operation</td>
				</tr>
				<?php
					while($row = mysqli_fetch_assoc($show)){
				?>
						<tr>
							<td><?php echo $row['did'];?></td>
							<td><?php echo $row['dname'];?></td>
							<td><?php echo $row['dfname'];?></td>
							<td><?php echo $row['dmname'];?></td>
							<td><?php echo $row['dsex'];?></td>
							<td><?php echo $row['droll'];?></td>
							<td><?php echo $row['dreg'];?></td>
							<td><?php echo $row['dphone'];?></td>
							<td><?php echo $row['daddress'];?></td>
							<td><?php echo $row['ddepartment'];?></td>
							<td><?php echo $row['dsession'];?></td>
							<td><?php echo $row['dsemester'];?></td>
							<td><button><a href="insert.php">ADD</a></button>
							<td><button><a href="edit.php?id=<?php echo $row['did'];?>">Edit</a></button>
							<td><button><a href="delete.php?id=<?php echo $row['did'];?>">Delete</a></button>
							
							</td>
						</tr>
					<?php }?>
	
				
			</table>
	<?php
	}else{
		echo"There is no data";
	}
	mysqli_close($conn);
	?>
	</body>
</html>