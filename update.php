<?php
	$st_id =$_POST['did'];
	$st_name = $_POST['dname'];
	$st_fname = $_POST['dfname'];
	$st_mname = $_POST['dmname'];
	$st_sex = $_POST['dsex'];
	$st_roll = $_POST['droll'];
	$st_reg = $_POST['dreg'];
	$st_phone = $_POST['dphone'];
	$st_address = $_POST['daddress'];
	$st_department = $_POST['ddepartment'];
	$st_session = $_POST['dsession'];
	$st_semester = $_POST['dsemester'];
	
	$conn = mysqli_connect("localhost","root","","database") or die("Connection error");
	$sql = "UPDATE info SET dname='$st_name',dfname='$st_fname',dmname='$st_mname',dsex='$st_sex',droll='$st_roll',dphone='$st_phone',daddress='$st_address',ddepartment='$st_department',dsession='$st_session',dsemester='$st_semester' WHERE did='$st_id' ";
	$show = mysqli_query($conn,$sql) or die("SQL error");
	mysqli_close($conn);
	header("location:http://localhost/pp/index.php");
	
?>