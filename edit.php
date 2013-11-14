<?php
	include 'db.php';
	$id = $_GET['id'];
?>
	<form action = "" method = "post">
		<h1>Update post</h1>
		<?php 
			// get variable success from URL
			if(isset($_GET['success'])){
				echo "Update success...<br />";
			}
			$sql = mysql_query("SELECT * FROM tbl_post WHERE id = '".$id."' ");
			while($row = mysql_fetch_array($sql)){
		?>
		Subject: <br />
		<input type = "text" name = "subject" value = "<?php echo $row['subject']?>" /><br />
		Content: <br />
		<textarea name = "content"><?php echo $row['content']?></textarea>
		<br />
		<input type = "submit" name= "edit" value = "Update" />
		<br />
		<a href = "../php_tutorial/">Back</a>
		<?php 
			}
		?>
	</form>
<?php 
	if(isset($_POST['edit'])){
		$subject = $_POST['subject'];
		$content = $_POST['content'];
		$id = $_GET['id'];
		// update dabase with new record
		mysql_query("UPDATE tbl_post SET subject = '".$subject."', content = '".$content."' WHERE id = '".$id."' ");
		// redirect page to edit.php to avoid form resubmission
		header("Location: edit.php?id=$id&success=1");
	}
?>