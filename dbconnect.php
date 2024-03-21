<?php
	$conn;
	function connection(){
		global $conn;
		$server="localhost";
		$username="root";
		$password="";
		$database="hospital";

		$conn=mysqli_connect($server,$username,$password,$database);
		
		if (!$conn) {
			die("error".mysqli_connect_error());
		}
	}
connection();
?>