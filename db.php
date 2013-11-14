<?php
	try{
		mysql_connect("localhost", "root", "");
		mysql_select_db("db_post");
	}catch(Exception $e){
		echo "Errr: ".$e->getMessage();
	}