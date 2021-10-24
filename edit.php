<!DOCTYPE html>
<html>
	<head>
		<title>zahir
		</title>
	</head>
	<body>
	<?php
	$st_id =$_GET['id'];
	$conn = mysqli_connect("localhost","root","","database") or die("Connection error");
	$sql = "SELECT * FROM info WHERE did={$st_id}";
	$show = mysqli_query($conn,$sql) or die("SQL error");
	if(mysqli_num_rows($show)>0){
		while($row = mysqli_fetch_assoc($show)){
	?>
	
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="dname" value="<?php echo $row['dname'];?>" ></td>
					<td><input type="hidden" name="did" value="<?php echo $row['did'];?>" ></td>
					
				</tr>
				<tr>
					<td>Father's Name:</td> 
					<td><input type="text" name="dfname" value="<?php echo $row['dfname']; ?>"  ></td>
				</tr>
				<tr>
					<td>Mother's Name:</td>
					<td><input type="text" name="dmname" value="<?php echo $row['dmname']; ?>" ></td>
				</tr>
				<tr>
					<td>Sex:</td>
					<td>
						<label for="sex"></label>
							<select id="sex" name="dsex" value="<?php echo $row['dsex']; ?>" >
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Transgender">Transgender</option>
							</select>
					</td>
				</tr>
				<tr>
					<td>Roll:</td>
					<td><input type="number" name="droll" value="<?php echo $row['droll']; ?>"  ></td>
				</tr>
				<tr>
					<td>Reg:</td>
					<td><input type="number" name="dreg" value="<?php echo $row['dreg']; ?>"  ></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="number" name="dphone" value="<?php echo $row['dphone']; ?>"  ></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="daddress" value="<?php echo $row['daddress']; ?>"  ></td>
				</tr>
				<tr>
					<td>Department:</td>
					<td><input type="text" name="ddepartment" value="<?php echo $row['ddepartment']; ?>"  ></td>
				</tr>
				<tr>
					<td>Session:</td>
					<td><input type="text" name="dsession" value="<?php echo $row['dsession']; ?>"  ></td>
				</tr>
				<tr>
					<td>Semester:</td>
					<td><input type="text" name="dsemester" value="<?php echo $row['dsemester']; ?>" ></td>
				</tr>
				<tr>
					<td>
						<input type="submit">
					</td>
				</tr>
				
			</table>
		</form>
		<?php
			}
	    }
		?>
		
	</body>
</html>