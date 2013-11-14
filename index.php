<?php 
	ob_start();
	include 'db.php'; 
?>
<!doctype html>
<html>
	<head>
		<!--CSS initialization-->
		<link rel = "stylesheet" href = "css/style.css" />
		<!--User jquery library with PHP-->
		<script src="http://code.jquery.com/jquery-1.9.0.js"></script>
		<script>
			$(document).ready(function(){
				// add record to database dynamically
				$(".btn").click(function(){
					var sub = $(".subject").val();
					var con = $(".content").val();
					$.ajax({
						type: 'POST', 
						url: 'addnew.php',
						data: 'subject='+sub+'&content='+con,
						beforeSend: function(){
							$(".btn").val("Submitting...").attr("disabled", "disabled");
						},
						success: function(e){
							// remove submitting attr
							$(".btn").val("Save").removeAttr("disabled", "disabled");
							$(".prepend").prepend(e).fadeIn('slow');
						},
						error: function(){
							alert('Sorry! data cannot be deleted at the moment!');
						}
					});
					return false;
				});

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
							}
						});
						$(this).closest('.post').fadeOut('slow');
					//}
					return false;
				});
			});
		</script>
	</head>
	<body>
	<div id = "div_post">
		<h1>New Post</h1>
		<form>
			Subject:<br /> <input type = "text" name = "subject" autofocus = "autofocus" class = "subject" />
			<br />
			Content: <br />
			<textarea name = "content" cols = "62" rows = "10" class = "content"></textarea><br />
			<input type = "submit" value = "Save" name = "insert" class = "btn"/>
		</form>
			<div class = "result"></div>
			<div class = "prepend"></div>
			<?php 
				// retrieve data from database
				$sql = mysql_query("SELECT * FROM tbl_post ORDER BY id DESC");
				// loop data row
				while($row = mysql_fetch_array($sql)){
					echo "<div class = \"post\">";
					echo "<b>".$row['subject']."</b><br />";
					echo $row['content']."<br />";
					echo "<a href = '#' class = 'delete' id = '$row[id]' >Del</a> | <a href = 'edit.php?id=$row[id]'>Edit</a>";
					echo "</div>";
				}
			?>
		</div>
	</body>
</html>
<?php
	ob_end_flush();
