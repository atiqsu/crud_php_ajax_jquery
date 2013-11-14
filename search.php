<?php
	include 'db.php';
	$val = $_POST['val'];
	// retrieve data from database
				$sql = mysql_query("SELECT * FROM tbl_post WHERE subject LIKE '%{$val}%' ");
				// loop data row
				while($row = mysql_fetch_array($sql)){
					
					echo "<b>".$row['subject']."</b><br />";
					echo $row['content']."<br />";
					echo "<a href = '$row[id]' class = 'delete' >Del</a> | <a href = 'edit.php?id=$row[id]'>Edit</a>";
					
				}