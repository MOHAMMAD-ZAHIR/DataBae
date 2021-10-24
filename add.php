<?php
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
	$sql = "INSERT INTO info(dname,dfname,dmname,dsex,droll,dreg,dphone,daddress,ddepartment,dsession,dsemester) VALUES('{$st_name}','{$st_fname}','{$st_mname}','{$st_sex}','{$st_roll}','{$st_reg}','{$st_phone}','{$st_address}','{$st_department}','{$st_session}','{$st_semester}')";
	$show = mysqli_query($conn,$sql) or die("SQL error");
	mysqli_close($conn);
	header("location:http://localhost/pp/index.php");
	
?>