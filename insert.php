<!DOCTYPE html>
<html>
	<head>
		<title>zahir
		</title>
	</head>
	<body>
		<form action="add.php" method="post">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="dname" required ></td>
				</tr>
				<tr>
					<td>Father's Name:</td>
					<td><input type="text" name="dfname" required ></td>
				</tr>
				<tr>
					<td>Mother's Name:</td>
					<td><input type="text" name="dmname" required ></td>
				</tr>
				<tr>
					<td>Sex:</td>
					<td>
						<label for="sex"></label>
							<select id="sex" name="dsex" required>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Transgender">Transgender</option>
							</select>
					</td>
				</tr>
				<tr>
					<td>Roll:</td>
					<td><input type="number" name="droll" required ></td>
				</tr>
				<tr>
					<td>Reg:</td>
					<td><input type="number" name="dreg" required ></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="number" name="dphone" required ></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="daddress" required ></td>
				</tr>
				<tr>
					<td>Department:</td>
					<td><input type="text" name="ddepartment" required ></td>
				</tr>
				<tr>
					<td>Session:</td>
					<td><input type="text" name="dsession" required ></td>
				</tr>
				<tr>
					<td>Semester:</td>
					<td><input type="text" name="dsemester" required ></td>
				</tr>
				<tr>
					<td>
						<input type="submit">
						<input type="reset">
					</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>