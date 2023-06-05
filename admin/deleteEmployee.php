<?php
include_once("functions.php");
	 
	// Get id from URL to delete that user
	$id = $_GET['id_karyawan'];
	 
	// Delete user row from table based on given id
	$result = mysqli_query($conn, "DELETE FROM identitas_karyawan WHERE id_karyawan=$id");
	 
	// After delete redirect to Home, so that latest user list will be displayed.
	header("Location: jobdeskAdmin.php");
?>