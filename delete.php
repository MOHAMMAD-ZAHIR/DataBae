<?php
		$st_id =$_GET['id'];
		$conn = mysqli_connect("localhost","root","","database") or die("Connection error");
		$sql = "DELETE FROM info WHERE did='$st_id '";
		$insert = mysqli_query($conn,$sql) or die("sql error");
		header("location:http://localhost/pp/index.php")
?>