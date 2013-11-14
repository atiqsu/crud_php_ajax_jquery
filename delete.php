<?php
	include 'db.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		mysql_query("DELETE FROM tbl_post WHERE id = '".$id."' ");
	}