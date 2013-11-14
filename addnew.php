<html>

<head>
	<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
	<script>
			$(document).ready(function(){
				// delete record from database without refresh the page
				$(".delete").on('click', function(){
					//var item = $('.delete').attr('href');
					var item = $(this).attr('id');
					// activate this confirmation box, you can see the confirm alert box before deleting
					//if(confirm('Do you want to remove?')){
						$.ajax({
							type: 'POST',
							url: 'delete.php',
							data: 'id='+item,
							beforeSend: function(){
								$(".result").html("<i style = 'color: #D00; margin-left: 6px;'>deleting...</i>");
							},
							success: function(){
								$(".result").html("<i style = 'color: #D00; margin-left: 6px;'>deleted...</i>");
							},
							error: function(){
								alert('Sorry! data cannot be deleted at the moment!');
							}
						});
						$(this).closest('.post').fadeOut(600);
					//}
					return false;
				});
			});
		</script>
</head>
<body>
<?php
	include 'db.php';
	//if(isset($_POST['insert'])){
		// pass form post to new variable
		$subject = $_POST['subject'];
		$content = $_POST['content'];
		// insert to database
		mysql_query("INSERT INTO tbl_post VALUES('', '".$subject."', '".$content."')");
		// retrieve data from database
			$sql = mysql_query("SELECT * FROM tbl_post ORDER BY id DESC LIMIT 1");
			// loop data row
			while($row = mysql_fetch_array($sql)){
				echo "<div class = \"post\">";
				echo "<b>".$row['subject']."</b><br />";
				echo $row['content']."<br />";
				echo "<a href = '#' class = 'delete' id = '$row[id]' >Del</a> | <a href = 'edit.php?id=$row[id]'>Edit</a>";
				echo "</div>";
			}
	//}
	//
?>
</body>
</html>